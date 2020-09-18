<!-- Header -->
<?= $this->extend('layout/template.php'); ?>

<!-- Content -->
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/hotel/create" class="btn btn-primary my-3">Insert Hotel</a>

            <h4 class="mt-3">List of Hotels</h4>
            <?php if (session()->getFlashdata('alert')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('alert'); ?>
            </div>
            <?php endif; ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hotel Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Meals</th>
                        <th scope="col">Validity</th>
                        <th scope="col">Location</th>
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($hotel as $h) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><a href="/hotel/detail/<?= $h['id']; ?>"><?= $h['hotelName']; ?></a></td>
                        <td><?= $h['price']; ?></td>
                        <td><?= $h['room']; ?></td>
                        <td><?= $h['meals']; ?></td>
                        <td><?= $h['validity']; ?></td>
                        <td><?= $h['location']; ?></td>
                        <!-- <td><a href="/hotel/detail" class="btn btn-warning">Edit</a></td> -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Footer -->
<?= $this->endSection(); ?>
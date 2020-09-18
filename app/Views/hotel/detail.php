<!-- header -->
<?= $this->extend('layout/template.php'); ?>

<!-- content -->
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col my-3">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="/img/<?= $hotel['cover']; ?>" class="card-img mx-auto" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title"><?= $hotel['hotelName']; ?></h5>
                            <p class="card-text">Price : <?= $hotel['price']; ?></p>
                            <p class="card-text">Room : <?= $hotel['room']; ?></p>
                            <p class="card-text">Meals : <?= $hotel['meals']; ?></p>
                            <p class="card-text">Validity : <?= $hotel['validity']; ?></p>
                            <p class="card-text">Location : <?= $hotel['location']; ?></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            <a href="/hotel/edit/<?= $hotel['id']; ?>" class="btn btn-warning float-right mb-3 mr-3"><i class="fas fa-edit"></i>&nbsp;Edit</a>
                            <form action="/hotel/delete/<?= $hotel['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/hotel" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
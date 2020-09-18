<!-- Header -->
<?= $this->extend('layout/template'); ?>

<!-- Content -->
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Edit Hotel Information</h2>
            <?php if (session()->getFlashdata('emptyName')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('emptyName'); ?>
                </div>
            <?php endif; ?>
            <form action="/hotel/update/<?= $hotel['id']; ?>" method=POST>
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $hotel['id']; ?>">
                <div class="form-group row">
                    <label for="inputText3" class="col-sm-2 col-form-label">Hotel Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText3" name="hotelName" autofocus value="<?= $hotel['hotelName']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRoom" name="room" value="<?= $hotel['room']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPrice" name="price" value="<?= $hotel['price']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMeals" class="col-sm-2 col-form-label">Meals</label>
                    <div class="col-sm-4">
                        <select name="meals" id="meal" class="form-control">
                            <optgroup label="Option">
                                <option value="<?= $hotel['meals']; ?>"><?= $hotel['meals']; ?></option>
                                <option value="Bed with Breakfast">Bed with Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Room Only">Room Only</option>
                                <option value="Fullboard">Fullboard</option>
                                <option value="Halfboard">Halfboard</option>
                            </optgroup>
                        </select>
                    </div>
                    <label for="inputValidity" class="col-sm-2 col-form-label">Validity</label>
                    <div class="col-sm-4">
                        <input type="date" name="validity" id="inputValidity" class="form-control" value="<?= $hotel['validity']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLocation" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <input type="text" name="location" id="inputLocation" class="form-control" value="<?= $hotel['location']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<?= $this->endSection(); ?>
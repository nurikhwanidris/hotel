<!-- Header -->
<?= $this->extend('layout/template'); ?>

<!-- Content -->
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Insert Hotel Form</h2>
            <?php if (session()->getFlashdata('emptyName')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('emptyName'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('fileError')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('fileError'); ?>
                </div>
            <?php endif; ?>
            <form action="/hotel/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="inputText3" class="col-sm-2 col-form-label">Hotel Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText3" name="hotelName" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRoom" name="room">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPrice" name="price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMeals" class="col-sm-2 col-form-label">Meals</label>
                    <div class="col-sm-4">
                        <select name="meals" id="meal" class="form-control">
                            <optgroup label="Option">
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
                        <input type="date" name="validity" id="inputValidity" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLocation" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <input type="text" name="location" id="inputLocation" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputFile" class="col-sm-2 col-form label">Hotel Image</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview" alt="">
                    </div>
                    <div class="col-sm-8">
                        <input type="file" name="cover" id="cover" class="form-control file-input" onchange="previewImg();">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<?= $this->endSection(); ?>
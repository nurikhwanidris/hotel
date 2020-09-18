<!-- Header -->
<?= $this->extend('layout/template.php'); ?>

<!-- Content -->
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1>Contact Me</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Email</h4>
                    <i class="far fa-envelope-open"></i>
                    <a href="mailto:nurikhwanidris.@gmail.com"> nurikhwanidris.@gmail.com</a>
                </div>
                <div class="col">
                    <h4>Phone</h4>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+60162614844"> Click here to call or call 016-261 4844</a>
                </div>
                <div class="col">
                    <h4>Whatsapp</h4>
                    <i class="fab fa-whatsapp"></i>&nbsp; Use the bloody same number
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?= $this->endSection(); ?>
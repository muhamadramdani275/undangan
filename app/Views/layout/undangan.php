<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- CSS Assets -->
    <link rel="stylesheet" href="<?= base_url('/assets/bootstrap/css/') ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('/assets/css/') ?>/style.css">
    <link rel="stylesheet" href="<?= base_url('/assets/fontawesome/css') ?>/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <!-- JS Assets -->
    <script src="<?= base_url('/assets/js/') ?>/jquery.min.js"></script>
    <script src="<?= base_url('/assets/js/') ?>/popper.min.js"></script>
    <script src="<?= base_url('/assets/bootstrap/js/') ?>/bootstrap.min.js"></script>
    <script src="<?= base_url('/assets/js/') ?>/style.js"></script>
    <script src="<?= base_url('/assets/fontawesome/js') ?>/all.js"></script>
    <script src="<?= base_url('/assets/particlesjs') ?>/particles.js"></script>
    <script src="<?= base_url('/assets/particlesjs') ?>/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>

</head>

<body>

    <?= $this->renderSection('jumboCover'); ?>

    <?= $this->renderSection('content') ?>


    <footer class="container-fluid bg-dark fixed-bottom navigasi">
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-md-3"></div>
                <div class="col-2 col-md-1"><a href="#home"><i class="fas fa-home"></i></a></div>
                <div class="col-2 col-md-1"><a href="#couple"><i class="fas fas fa-user-friends"></i></a></div>
                <div class="col-2 col-md-1"><a href="#story"><i class="fas fa-route"></i></a></div>
                <div class="col-2 col-md-1"><a href="#gallery"><i class="fas fa-images"></i></a></div>
                <div class="col-2 col-md-1"><a href="#location"><i class="fas fa-map"></i></a></div>
                <div class="col-2 col-md-1"><a href="#greeting"><i class="fas fa-comment"></i></a></div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </footer>
</body>

</html>
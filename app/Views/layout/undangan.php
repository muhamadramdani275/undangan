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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('/assets') ?>/venobox/venobox.css" type="text/css" media="screen" />

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('/assets') ?>/venobox/venobox.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQ8zXdjgsyvBkASL2HCzb0YjOgqHwTFE&callback=initMap&libraries=&v=weekly" async></script>

</head>

<body>

    <?= $this->renderSection('jumboCover'); ?>

    <?= $this->renderSection('content') ?>

    <audio src="<?= base_url('/assets/song') ?>/song.mp3" id="my_audio" loop="loop"></audio>

    <button class="btn btn-primary lagu" type="button">
        <i class="fas fa-pause"></i>
    </button>

    <footer class="container-fluid bg-dark fixed-bottom navigasi">
        <div class="container">
            <div class="row mt-3 mb-3 d-flex justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-2 col-md-1"><a href="#home"><i class="fas fa-home"></i></a></div>
                <div class="col-2 col-md-1"><a href="#couple"><i class="fas fas fa-user-friends"></i></a></div>
                <div class="col-2 col-md-1"><a href="#gallery"><i class="fas fa-images"></i></a></div>
                <div class="col-2 col-md-1"><a href="#location"><i class="fas fa-map"></i></a></div>
                <div class="col-2 col-md-1"><a href="#greeting"><i class="fas fa-comment"></i></a></div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        window.addEventListener("DOMContentLoaded", event => {
            const audio = document.querySelector("audio");
            audio.volume = 0.5;
            setTimeout(function() {
                audio.play();
            }, 3000);
        });

        $(document).ready(function() {
            $("button.lagu").click(function() {
                var audio = $("audio#my_audio")[0];
                if (audio.paused) {
                    audio.play();
                    $(this).html('<i class="fas fa-pause"></i>');
                } else {
                    audio.pause();
                    $(this).html('<i class="fas fa-play"></i>');
                }

            });
        });
    </script>
</body>

</html>
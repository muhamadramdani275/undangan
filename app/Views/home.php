<?= $this->extend('layout/undangan') ?>
<?= $this->extend('jumbo-cover') ?>

<?= $this->section('content') ?>

<section class="container-fluid home" id="home">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <img src="<?= base_url('/assets/img') ?>/wedding.svg" alt="Couple Name" class="couple-name mt-5">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="name">Ma'ruf Robani, S.Pd. & Komariah, S.Pd.</h1>
                    <p class="date">01 Maret 2021</p>
                    <p class="mt-3 kepada">
                        <i>Kepada Yth <br>
                            Bapak/Ibu/Saudara/i</i>
                    </p>
                    <h2 class="tamu">Dani</h2>
                    <p class="alamat">Karawang</p>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js">

    </div>
    <div class="triangle mt-4">

    </div>
    <div class="row bg-light informasi">
        <div class="col-md-12">
            <div class="container animasi">
                <h2 class="info text-center">Informasi</h2>
                <p class="text-center">Sebelumnya Mohon maaf kepada Bapak, Ibu, Saudara/i,</p>
                <p class="text-center">Terkait dengan kondisi pandemi Covid-19 yang terjadi saat ini, tanpa mengurangi rasa hormat kami bermaksud untuk menerapkan protokol kesehatan pencegahan penularan virus Covid-19 selama acara resepsi berlangsung dalam rincian berikut :</p>
                <ul>
                    <li>Area resepsi merupakan area taman terbuka/outdoor dengan area yang luas.</li>
                    <li>Para tamu wajib mencuci tangan atau menggunakan hand sanitizer sebelum memasuki area resepsi.
                    </li>
                    <li>Para tamu wajib menggunakan masker selama berada di dalam area resepsi.
                    </li>
                    <li>Para tamu wajib diukur suhu tubuhnya sebelum memasuki area resepsi.
                    </li>
                    <li>Para tamu wajib menjaga jarak satu sama lain.
                    </li>
                    <li>Tidak ada sesi berjabat tangan dengan pengantin.
                    </li>
                    <li>Tidak diperkenankan melakukan kontak fisik dengan pengantin atau dengan tamu undangan yang lain.
                    </li>
                </ul>
                <p class="text-center">Mohon dimaklumi keadaannya dan semoga dapat menjaga kita semua. <br>
                    Terimakasih.</p>
            </div>

        </div>
    </div>
</section>
<section class="container-fluid couple animasi" id="couple">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center couple">Bride & Groom</h1>
            <div class="container mt-5">
                <p class="text-center"><i> Assalamu’alaikum Warahmatullahi Wabarakatuh</i><br>
                    Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan. <br>
                    Ya Allah, perkenankanlah kami merangkai kasih sayang yang Kau ciptakan di antara putra-putri kami:</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <img src="<?= base_url('/assets/img') ?>/frame.png" alt="" class="pria">
                    </div>
                    <div class="card-body">
                        <h2 class="info">- Mempelai Pria -</h2>
                        <h2 class="info">Ma'ruf Robani, S.Pd.</h2>
                        <p class="text-center">
                            Putra ke-5 dari Keluarga <br>
                            <b>Bpk H. Agus Ruhyana <br>& <br> Ibu Hj. Eneng Mulyawati (Almh)</b>
                        </p>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <img src="<?= base_url('/assets/img') ?>/frame.png" alt="" class="wanita">
                    </div>
                    <div class="card-body">
                        <h2 class="info">- Mempelai Wanita -</h2>
                        <h2 class="info">Komariah, S.Pd.</h2>
                        <p class="text-center">
                            Putri ke-2 dari Keluarga <br>
                            <b>Bpk Ardi Rifa'i Arsyad <br>& <br> Ibu Winaesih</b>
                        </p>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<section class="container-fluid story animasi" id="story" style="height: 100vh;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">STORY</h1>
        </div>
    </div>
</section>
<section class="container-fluid gallery animasi" id="gallery" style="height: 100vh;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">GALLERY</h1>
        </div>
    </div>
</section>
<section class="container-fluid location animasi" id="location" style="height: 100vh;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">LOCATION</h1>
        </div>
    </div>
</section>
<section class="container-fluid greeting animasi" id="greeting" style="height: 100vh;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">GREETINGS</h1>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        particlesJS('particles-js',

            {
                "particles": {
                    "number": {
                        "value": 400,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#fff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 10,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": false,
                        "distance": 500,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 2
                    },
                    "move": {
                        "enable": true,
                        "speed": 4,
                        "direction": "bottom",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "bubble"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 0.5
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 4,
                            "duration": 0.3,
                            "opacity": 1,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            }

        );

        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            //Scroll and show hash
            // $('html, body').animate({
            //     'scrollTop': $target.offset().top
            // }, 1000, 'swing', function() {
            //     window.location.hash = target;
            // });

            //Scroll and don't show hash
            $('html, body').animate({
                'scrollTop': $target.offset().top
            }, 1000, 'swing');
        });
    });
    window.addEventListener('scroll', reveal);

    function reveal() {
        var reveals = document.querySelectorAll('.animasi');

        for (var i = 0; i < reveals.length; i++) {

            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;

            if (revealtop < windowheight - revealpoint) {
                reveals[i].classList.add('show');
            } else {
                reveals[i].classList.remove('show');
            }
        }
    }
</script>
<?= $this->endSection() ?>
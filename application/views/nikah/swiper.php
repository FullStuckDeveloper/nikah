<!DOCTYPE html>
<?php $this->load->view('layout/script'); ?>
<?php $this->load->view('layout/style'); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #000;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .gallery-top {
            height: 95%;
            width: 100%;
        }

        .gallery-thumbs {
            height: 5%;
            box-sizing: border-box;
            padding: 0px 0;
        }

        .gallery-thumbs .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .gallery-thumbs .swiper-slide-thumb-active {
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="col-sm-12">
                    <section class="content-header col-sm-offset-4 col-sm-4">
                        <h1 class="header-halaman col-sm-12" style="font-size: 29pt;color:#fff">
                            Bismillahirrahmanirrahim
                        </h1>
                    </section>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2);color:aqua">Acara</div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3);color:aqua">Ucapan</div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4);color:aqua">Lokasi</div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5);color:aqua">Galeri</div>
            <!-- <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div> -->
        </div>
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div> -->
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/1);color:aqua"><span class="fa fa-home fa-2x"></span></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2);color:aqua"><span class="fa fa-calendar fa-2x"></span></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3);color:aqua"><span class="fa fa-comments fa-2x"></span></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4);color:aqua"><span class="fa fa-map-marker fa-2x"></span></div>
            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5);color:aqua"><span class="fa fa-camera-retro fa-2x"></span></div>
            <!-- <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div> -->
        </div>
    </div>

    <!-- Initialize Swiper -->
    <script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 0,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs
            }
        });
    </script>
</body>

</html>
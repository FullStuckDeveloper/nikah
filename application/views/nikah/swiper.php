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
    /* SWIPER */
        html,
        body {
            position: relative;
            height: 100%;
            margin:0;
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
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
           background-size: cover;
            background-position: center;
            height: auto;
        }

        .gallery-top {
            height: 94%;
            width: 100%;
            background: #aed6f1;
            background-image: url(<?php echo base_url("assets/img/background1024op50.png"); ?>);
            background-size: 100% 100%;
        }

        .gallery-thumbs {
            height: 6%;
            box-sizing: border-box;
            padding: 0px 0;
            background: #3c8dbc;
        }

        .gallery-thumbs .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.5;
        }

        .gallery-thumbs .swiper-slide-thumb-active {
            opacity: 1;
        }

        .scroll {
            overflow: auto;
            overflow-x:hidden;
        }
        /* CUSTOM */

        .judul-halaman {
          font-family: 'Allura';
          /* font-style:italic; */
          text-align: center;
          background-image: url(<?php echo base_url("assets/img/judul.png"); ?>);
          width: 100%;
        }

        .content-header>h1 {
          margin-top: 50px;
          font-size: 30pt;
          font-style: bold;
        }

        .header-halaman {
            font-family: 'Allura';
            text-align: center;
            background-image: url(<?php echo base_url("assets/img/judul.png") ?>);
            width: 100%;
        }

        .pembuka {
            font-family: Pavanam;
            font-style: ;
            text-align: center;
            font-size: 12pt;
        }

        .navbar {
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .nama-mempelai {
            font-size: 22pt;
            font-family: 'Alex Brush';
        }

        .waktu-tempat {
            font-size: 14pt;
            font-family: 'Nobile';
        }

        .users-list-date {
            font-size: 10pt;
        }

        .main-footer {
            padding-top: 100px;
            border-top: 0px solid #fff;
        }

        .sub-judul {
            font-size: 16pt;
        }

        .keterangan {
            font-size: 10pt;
        }

        .countdown {
            font-family: 'Annie Use Your Telescope';
            font-size: 36pt;
            text-align: center;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 0px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper-container gallery-top">    
        <div class="swiper-wrapper">
            <div class="swiper-slide scroll">
                <div class="col-sm-12" style="border:0px solid">
                    <section class="content-header col-sm-offset-4 col-sm-4">
                        <h1 class="header-halaman col-sm-12" style="font-size:22pt;"">
                            Bismillahirrahmanirrahim
                        </h1>
                        <audio controls autoplay="autoplay" loop="loop">
                            <source src="<?php echo base_url("assets/matakehati.mp3"); ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </section>
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12" style="border:0px solid;">
                                <p class="pembuka col-sm-12">
                                    <strong>Assalamu`alaikum Warahmatullahi Wabarakatuh</strong> Dengan memohon rahmat serta ridho Allah Subhanahu Wa Ta`ala kami bermaksud menyelenggarakan acara pernikahan :
                                </p>
                                <div class="box-body no-padding" style="border:0px solid">
                                    <ul class="users-list clearfix">
                                        <li style="border:0px solid; width:100%;">
                                            <img src="<?php echo base_url("assets/img/anden.png"); ?>" alt="User Image" style="width:35%;">
                                            <a class="users-list-name nama-mempelai">Andendria Kusuma Dewi</a>
                                            <span class="users-list-date" style="color: #000">Puteri pertama dari Bapak Moh. Ridwan Devano dan Ibu Elly Libanon</span>
                                        </li>
                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.box-body -->
                                <p style="text-align:center;font-family: arial"><strong>dengan</strong></p>
                                <div class="box-body no-padding" style="border:0px solid">
                                    <ul class="users-list   ">
                                        <li style="border:0px solid; width:100%;">
                                            <img src="<?php echo base_url("assets/img/siluetaji4.png"); ?>" alt="User Image" style="width:35%;">
                                            <a class="users-list-name nama-mempelai" href="#">Aji Ridwan Alhabsyi</a>
                                            <span class="users-list-date" style="color: #000">Putera pertama dari Bapak Sulaiman dan Ibu Tetih</span>
                                        </li>
                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                &nbsp;
                                <!-- /.box-body -->
                                <div class="box-body no-padding" style="border:0px solid; margin-bottom:50px;">
                                    <ul class="users-list clearfix">
                                        <li style="border:0px solid; width:100%;">
                                            <p class="users-list-name waktu-tempat"><span class="fa fa-calendar"></span>&nbsp; 07.09.2019</p>
                                            <p class="users-list-name waktu-tempat"><span class="fa fa-map-marker"></span>&nbsp; Masjid Bogor Baru</br>Bogor</p>
                                        </li>
                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row (main row) -->
                    </section><!-- /.content -->
                </div>
            </div>
            <div class="swiper-slide scroll">
                <div class="col-sm-12" style="border:0px solid">
                    <section class="content-header col-sm-offset-4 col-sm-4">
                        <h1 class="judul-halaman col-sm-12" style="border:0px solid">
                            Rangkaian Acara
                        </h1>
                    </section>
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12" style="border:0px solid;">
                                &nbsp;
                                <div class="box-body no-padding col-sm-offset-4 col-sm-3" style="border:0px solid">
                                    <ul class="users-list clearfix">
                                        <li style="border:0px solid; width:100%;">
                                            <table>
                                                <tr style="border:0px solid;">
                                                    <td><span class="fa fa-bell sub-judul pull-right"></span></td>
                                                    <td class="sub-judul">AKAD NIKAH</td>
                                                </tr>
                                                <tr style="border:0px solid;">
                                                    <td></td>
                                                    <td><span class="fa fa-calendar"></span>&nbsp; Bogor, 6 September 2019</td>
                                                </tr>
                                                <tr style="border:0px solid;">
                                                    <td></td>
                                                    <td><span class="fa fa-clock-o"></span>&nbsp; Jam 09:00 WIB</td>
                                                </tr>
                                                <tr style="border:0px solid;">
                                                    <td></td>
                                                    <td><span class="fa fa-map-marker"></span>&nbsp; KUA Bogor Tengah </br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;Jl. Sempur Kaler No. 106
                                                    </td>
                                                </tr>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                                
                                <hr class="col-sm-12" style="border-top:2px dashed #3c8dbc;">

                                <div class="box-body no-padding col-sm-offset-4 col-sm-3" style="border:0px solid;margin-bottom:50px;">
                                    <ul class="users-list clearfix">
                                        <li style="border:0px solid; width:100%;">
                                            <table>
                                                <tr style="border:0px solid;">
                                                    <td><span class="fa fa-bell sub-judul pull-right"></span></td>
                                                    <td class="sub-judul">RESEPSI</td>
                                                </tr>
                                                <tr style="border:0px solid;">
                                                    <td></td>
                                                    <td><span class="fa fa-calendar"></span>&nbsp; Bogor, 7 September 2019</td>
                                                </tr>
                                                <tr style="border:0px solid;">
                                                    <td></td>
                                                    <td><span class="fa fa-clock-o"></span>&nbsp; Jam 10:00 - 14:00 WIB</td>
                                                </tr>
                                                <tr style="border:0px solid;">
                                                    <td></td>
                                                    <td><span class="fa fa-map-marker"></span>&nbsp; Masjid Bogor Baru </br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;Jl. Mesjid Bogor Baru, </br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;Kecamatan Bogor Tengah, </br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;Kota Bogor, Jawa Barat
                                                    </td>
                                                </tr>
                                            </table>
                                        </li>
                                    </ul>
                                    <!-- /.users-list -->
                                </div>

                                <hr class="col-sm-12" style="border-top:2px dashed #3c8dbc;">

                                <div class="box-body no-padding col-sm-12" style="border:0px solid;margin-bottom:50px;">
                                    <p class="countdown" id="demo"></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="swiper-slide scroll">
                <div class="col-sm-12" style="border:0px solid">
                    <section class="content-header col-sm-12">
                        <h1 class="judul-halaman col-sm-12">
                            Doa & Harapan
                        </h1>
                    </section>
                    <section class="content">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-xs-12" style="border:0px solid;">
                                <!-- Horizontal Form -->
                                <div class="box box-widget" style="background-color:rgb(255, 255, 255, 0.7)">
                                    <!-- form start -->
                                    <form class="form-horizontal" method="post" action="<?= site_url('nikah/buat_ucapan') ?>">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="nama" id="inputEmail3" placeholder="Nama" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" name="ucapan" rows="3" placeholder="Tulis yang ingin Anda sampaikan"></textarea>
                                                </div>
                                            </div>
                                        </div><!-- /.box-body -->
                                        <div class="box-footer" style="background-color:rgb(255, 255, 255, 0.0)">
                                            <button type="submit" class="btn btn-info pull-right" style="background: #3c8dbc">Kirim</button>
                                        </div><!-- /.box-footer -->
                                    </form>
                                </div><!-- /.box -->
                            </div>
                            &nbsp;</br></br></br>
                        </div><!-- /.col -->
                    </section><!-- /.content -->
                </div>
            </div>
            <div class="swiper-slide scroll">
                <div class="col-sm-12" style="border:0px solid">
                    <section class="content-header col-sm-offset-4 col-sm-4">
                        <h1 class="judul-halaman col-sm-12">
                            Lokasi
                        </h1>
                    </section>
                    <section class="content">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-xs-12" style="border:0px solid;">
                                &nbsp;
                                <div class="box box-widget" style="background-color:rgb(255, 255, 255, 0.7)">
                                    <div class="box-body no-padding" style="border:0px solid">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4276215458217!2d106.80835351473385!3d-6.593654595231552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d117dd69f9%3A0xa27ed56d57e94517!2sMasjid+Bogor+Baru!5e0!3m2!1sen!2sid!4v1565004229701!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                &nbsp;</br></br></br>
                            </div><!-- /.col -->
                        </div><!-- /.row (main row) -->
                    </section><!-- /.content -->
                </div>
            </div>
            <div class="swiper-slide scroll">
                <div class="col-sm-12" style="border:0px solid">
                    <section class="content-header col-sm-offset-4 col-sm-4">
                        <h1 class="judul-halaman col-sm-12">
                            Galeri
                        </h1>
                    </section>
                    <section class="content">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-6" style="border:0px solid;">
                                &nbsp;
                                <!-- Box Comment -->
                                <div class="box box-widget" style="background-color: rgba(255,255,255, 0.7);">
                                    <div class="box-header with-border">
                                        <div class="user-block">
                                            <img class="img-circle" src="https://img.icons8.com/color/96/000000/user-female.png" alt="User Image">
                                            <span class="username"><a href="#">Anden & Aji</a></span>
                                            <span class="description">2 March 2019</span>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body" style="border:0px solid">
                                        <div class="col-sm-offset-1 col-sm-10" style="border:0px solid">
                                            <img class="img-responsive" src="<?php echo base_url("assets/img/galeri1.png"); ?>" alt="Photo">&nbsp;
                                            <p>Sebenernya sifat kita teh sama, layaknya anak kembar.</p>
                                            <p>Kitu weh kita mah :)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-widget" style="background-color: rgba(255,255,255, 0.7);">
                                    <div class="box-header with-border">
                                        <div class="user-block">
                                            <img class="img-circle" src="https://img.icons8.com/color/96/000000/user-female.png" alt="User Image">
                                            <span class="username"><a href="#">Anden & Aji</a></span>
                                            <span class="description">27 Oktober 2018</span>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="col-sm-offset-1 col-sm-10" style="border:0px solid">
                                            <img class="img-responsive" src="<?php echo base_url("assets/img/galeri2.png"); ?>" alt="Photo">&nbsp;
                                            <p>Sama-sama anak pertama, ego nya gede pun sama-sama.</p>
                                            <p>Jadi kalo lagi gak mau ngalah juga sama-sama.</p>
                                            <p>Ribut sudah biasa, yang penting tetep sama-sama.</p>
                                            <p>Happy Weekend!</p>
                                            <p><strong>*Catatan:</strong> Apa yang kalian liat ini hanya saat lagi akur aja, karena kalo lagi gak akur, gak akan diposting :D</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-widget" style="background-color: rgba(255,255,255, 0.7);">
                                    <div class="box-header with-border">
                                        <div class="user-block">
                                            <img class="img-circle" src="https://img.icons8.com/color/96/000000/user-female.png" alt="User Image">
                                            <span class="username"><a href="#">Anden & Aji</a></span>
                                            <span class="description">26 Agustus 2018</span>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="col-sm-offset-1 col-sm-10" style="border:0px solid">
                                            <img class="img-responsive" src="<?php echo base_url("assets/img/galeri3.png"); ?>" alt="Photo">&nbsp;
                                            <p>Abis dari kondangan, dan panas mencekam, ngadem dulu di tempat pertama kali kita ketemu (lagi).</p>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;</br></br></br>
                                <!-- /.box-footer -->
                                <!-- </div> -->
                                <!-- /.box -->
                            </div><!-- /.col -->
                        </div><!-- /.row (main row) -->
                    </section><!-- /.content -->
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper" style="border-top: 0px solid #fff;">
            <div class="swiper-slide" style="color: #fff;text-align: center;border-right: 0px solid #fff; margin-top: 5px"><span class="fa fa-home fa-2x"></span></div>
            <div class="swiper-slide" style="color: #fff;text-align: center;border-right: 0px solid #fff; margin-top: 5px"><span class="fa fa-calendar fa-2x"></span></div>
            <div class="swiper-slide" style="color: #fff;text-align: center;border-right: 0px solid #fff; margin-top: 5px"><span class="fa fa-comments-o fa-2x"></span></div>
            <div class="swiper-slide" style="color: #fff;text-align: center;border-right: 0px solid #fff; margin-top: 5px"><span class="fa fa-map-marker fa-2x"></span></div>
            <div class="swiper-slide" style="color: #fff;text-align: center;border-right: 0px solid #fff; margin-top: 5px"><span class="fa fa-camera-retro fa-2x"></span></div>
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
        
        // Set the date we're counting down to
        var countDownDate = new Date("Sep 7, 2019 10:10:10").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
    </script>
</body>

</html>
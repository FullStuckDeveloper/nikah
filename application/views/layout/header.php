<!DOCTYPE html>
<?php $this->load->view('layout/script'); ?>
<?php $this->load->view('layout/style'); ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
  padding: 0px;
}
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 14px;
}
.navbar a:hover {
  background: #f1f1f1;
  color: #3c8dbc;
}
.navbar a.active {
  background-color: #fff;
  color: #3c8dbc;
}
.main {
  padding: 16px;
  margin-bottom: 30px;
}
.width100 {
  width: 100%;
}
.border {
  border:1px solid #000;
  text-align:center;
}
.center {
  margin: auto;
  width: 50%;
  border: 0px solid green;
  padding: 10px;
}
.content-wrapper {
  background-image: url("../assets/img/background5.png");
  background-color: #AED6F1;
  background-attachment: fixed;
}
.content-header > h1 {
    margin-top:50px;
    font-size: 30pt;
    font-style: bold;
}
</style>
</head>
<header class="main-header">
  <title><?php echo $title ?></title>
  <!-- Logo -->
  <!-- <a href="index2.html" class="logo"> -->
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <!-- <span class="logo-mini" style="font-size:9pt;"><b>SD</b></span> -->
    <!-- logo for regular state and mobile devices -->
    <!-- <span class="logo-lg"><b>Sahabat</b> Dekat</span>
  </a> -->
    <!-- Header Navbar: style can be found in header.less -->
    <!-- <nav class=""> -->
      <!-- Sidebar toggle button-->
<!--       <a href="#" class="navbar-brand" >
        <span class="sr-only">Toggle navigation</span>
      </a> -->
        <!-- <ul class="nav navbar-nav"> -->
          <!-- User Account: style can be found in dropdown.less -->
          <!-- <li class="active"><a href="#"><i class="fa fa-home"></i> &nbsp;Beranda</a></li>
          <li class=><a href="#"><i class="fa fa-calendar"></i> &nbsp;Acara</a></li>
          <li class=><a href="#"><i class="fa fa-comments-o"></i> &nbsp;Ucapan</a></li>
          <li class=><a href="#"><i class="fa fa-map-marker"></i> &nbsp;Lokasi</a></li>
          <li class=><a href="#"><i class="fa fa-camera-retro"></i> &nbsp;Galeri</a></li> -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        <!-- </ul> -->
        <div class="navbar col-sm-12">
          <!-- <div class="col-sm-1"></div> -->
          <a href="<?php echo site_url('nikah'); ?>" style="width:20%;"><i class="fa fa-home fa-2x"></i> 
            <!-- </br>Beranda -->
          </a>
          <a href="<?php echo site_url('nikah/acara'); ?>" style="width:20%;"><i class="fa fa-calendar fa-2x"></i> 
            <!-- </br>Acara -->
          </a>
          <a href="<?php echo site_url('nikah/ucapan'); ?>" style="width:20%;"><i class="fa fa-comments-o fa-2x"></i> 
            <!-- </br>Ucapan -->
          </a>
          <a href="<?php echo site_url('nikah/lokasi'); ?>" style="width:20%;"><i class="fa fa-map-marker fa-2x"></i> 
            <!-- </br>Lokasi -->
          </a>
          <a href="<?php echo site_url('nikah/galeri'); ?>" style="width:20%;"><i class="fa fa-camera-retro fa-2x"></i> 
            <!-- </br>Galeri -->
          </a>
          <!-- <div class="col-sm-1"></div> -->
        </div>
        <!-- <div class="navbar width100">
          <div class="width100"><a href="#"><i class="fa fa-home"></i> &nbsp;</br>Beranda</a></div>
          <div class="width100"><a href="#"><i class="fa fa-calendar"></i> &nbsp;</br>Acara</a></div>
          <div class="width100"><a href="#"><i class="fa fa-comments-o"></i> &nbsp;</br>Ucapan</a></div>
          <div class="width100"><a href="#"><i class="fa fa-map-marker"></i> &nbsp;</br>Lokasi</a></div>
          <div class="width100"><a href="#"><i class="fa fa-camera-retro"></i> &nbsp;</br>Galeri</a></div>
        </div> -->
 <!--    </nav> -->
  </header>
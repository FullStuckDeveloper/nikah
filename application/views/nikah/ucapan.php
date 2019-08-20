<style>
.judul-halaman {
    font-family:'Allura';
    font-style:italic;
    text-align:center;
}
.navbar {
    overflow: hidden;
    position: fixed;
    bottom: 0;
    width: 100%;
}
.content-wrapper {
   /* background-color:#fff;*/
}
.nama-mempelai {
    font-size:18pt;
}
.waktu-tempat {
    font-size:14pt;
}
.main-footer {
    padding-top:100px;
    border-top:0px solid #fff;
}
</style>
<!-- Content Wrapper. Contains page content -->
<body class="hold-transition skin-blue layout-top-nav layout-boxed">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header col-sm-12">
                <h1 class="judul-halaman col-sm-12">
                    Doa & Harapan
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-xs-12" style="border:0px solid;">
                        <!-- Horizontal Form -->
                        <div class="box box-widget" style="background-color:rgb(255, 255, 255, 0.7)">
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?= site_url('nikah/buat_ucapan')?>">
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
                    <button type="submit" class="btn btn-info pull-right">Kirim</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              </div>
                        &nbsp;</br></br></br>
                    </div><!-- /.col -->
                </div><!-- /.row (main row) -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
<!-- <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -6.5936546, lng: 106.8105422};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhrzQB1qGro3Nzel4o2FDoqqguea7eT-o&callback=initMap">
    </script> -->
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
        <div class="content-wrapper" style="background:'<?php echo base_url("assets/img/background1.jpg"); ?>'">
            <!-- Content Header (Page header) -->
            <section class="content-header col-sm-12">
                <h1 class="judul-halaman col-sm-12">
                    Ucapan
                </h1>
            </section>
            <!-- Main content -->
            &nbsp;
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-xs-12" style="border:0px solid;">
                        <!-- Horizontal Form -->
                        <div class="box box-widget">
                          <div class='box-footer box-comments'>
                          <?php
                                if (isset($data_ucapan)) {
                                  foreach ($data_ucapan as $data) {
                                ?>
                            <div class='box-comment'>
                              <!-- User image -->
                              <!-- <img class='img-circle img-sm' src='<?php echo base_url("assets/img/user3-128x128.jpg"); ?>' alt='user image'> -->
                              <div class='comment-text'>
                              
                                <span class="username">
                                  <?php echo $data->nama; ?>
                                  <!-- <span class='text-muted pull-right'>8:03 PM Today</span> -->
                                </span><!-- /.username -->
                                <?php
                              echo $data->ucapan;
                              ?>
                                
                              </div><!-- /.comment-text -->
                            </div><!-- /.box-comment -->
                            <?php 
                              } 
                                }
                              
                                ?>
                          </div><!-- /.box-footer -->
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
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Detail Mobil</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconfont/styles.css">
    <!-- END GLOBAL MANDATORY STYLES -->



<link rel="stylesheet" type="text/css" href="vendors/leaflet/leaflet.css">
<link rel="stylesheet" type="text/css" href="vendors/lightslider/css/lightslider.min.css">


    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">



<?php include"share/menu.php";?>
<hr>
<?php $id=$_GET['id'];
  include 'share/db.php';
$query = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where no_pol='$id' ");
while($data = mysqli_fetch_array($query)){
?>
<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="job-overview__body">
                    <div class="job-overview__body-figure">
                      <div>
                          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
                                  <li data-target="#carouselExampleCaptions" data-slide-to="4" class=""></li>
                              </ol>
                              <div class="carousel-inner" role="listbox">
                                  <div class="carousel-item active">
                                      <img class="d-flex" src="mobil/<?php echo $data['foto_depan']?>" alt="First slide" width="600" height="400">
                                      <div class="carousel-caption">
                                          <h5>Foto Tampak Depan</h5>

                                      </div>
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-flex" src="mobil/<?php echo $data['foto_samping']?>" alt="Second slide" width="600" height="400" >
                                      <div class="carousel-caption d-none d-md-block">
                                          <h5>Foto Tampak Samping</h5>

                                      </div>
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-flex" src="mobil/<?php echo $data['foto_belakang']?>" alt="Third slide" width="600" height="400">
                                      <div class="carousel-caption d-none d-md-block">
                                          <h5>Foto Tampak Belakang</h5>

                                      </div>
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-flex" src="mobil/<?php echo $data['foto_dalam1']?>" alt="Third slide" width="600" height="400">
                                      <div class="carousel-caption d-none d-md-block">
                                            <h5>Foto Tampak Dalam Mobil</h5>
                                      </div>
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-flex" src="mobil/<?php echo $data['foto_dalam2']?>" alt="Third slide" width="600" height="400">
                                      <div class="carousel-caption d-none d-md-block">
                                            <h5>Foto Tampak Dalam Mobil</h5>
                                      </div>
                                  </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                              </a>
                          </div>
                        </div>
                    </div>

                    <div class="job-overview__body-description">
                        <?php echo $data['alamat'];?><br>
                          No Hp</a> &ndash; <?php echo $data['no_hp_rental'];?>
                    </div>

                    <div class="description-list-block">
                        <h5 class="description-list-block__heading">Fasilitas</h5>
                        <?php echo $data['fasilitas']?>
                    </div>


                </div>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-5">
                <div class="job-overview__company">
                      <a href="detail_rental.php?id=<?php echo $data['id_rental'];?>"><img src="rental/<?php echo $data['foto_rental'];?>" alt="" class="job-overview__company-logo"></a>
                    <div class="job-overview__company-info">
                        <a href="detail_rental.php?id=<?php echo $data['id_rental'];?>" class="job-overview__company-name"><?php echo $data['nama_rental'];?></a>
                        <a href="ketersediaan.php?id=<?php echo $data['no_pol'];?>" class="btn btn-primary btn-lg btn-block">Pesan Sekarang</a>
                    </div>
                </div>

                <div class="job-overview__details">
                    <h5 class="job-overview__details-heading">Spesifikasi Mobil</h5>
                    <ul class="job-overview__details-body list-unstyled">
                        <li class="job-overview__details-body-item">
                            <span class="icon iconfont-calendar-solid job-overview__details-body-item-icon"></span>
                            <span class="job-overview__details-body-item-type">Merek:</span>
                            <span class="job-overview__details-body-item-info"><?php echo $data['merek']?></span>
                        </li>
                        <li class="job-overview__details-body-item">
                            <span class="icon iconfont-map-point job-overview__details-body-item-icon"></span>
                            <span class="job-overview__details-body-item-type">Jenis:</span>
                            <span class="job-overview__details-body-item-info"><?php echo $data['jenis']?></span>
                        </li>
                        <li class="job-overview__details-body-item">
                            <span class="icon iconfont-map-point job-overview__details-body-item-icon"></span>
                            <span class="job-overview__details-body-item-type">Tipe:</span>
                            <span class="job-overview__details-body-item-info"><?php echo $data['tipe']?></span>
                        </li>
                        <li class="job-overview__details-body-item">
                            <span class="icon iconfont-user job-overview__details-body-item-icon"></span>
                            <span class="job-overview__details-body-item-type">Kapasitas Penumpang:</span>
                            <span class="job-overview__details-body-item-info"><?php echo $data['kapasitas_penumpang']?></span>
                        </li>
                        <li class="job-overview__details-body-item">
                            <span class="icon iconfont-clock-solid job-overview__details-body-item-icon"></span>
                            <span class="job-overview__details-body-item-type">Bahan Bakar:</span>
                            <span class="job-overview__details-body-item-info"><?php echo $data['bahan_bakar']?></span>
                        </li>
                        <li class="job-overview__details-body-item">
                            <span class="icon iconfont-databaseconstruction job-overview__details-body-item-icon"></span>
                            <span class="job-overview__details-body-item-type">Harga Sewa:</span>
                            <span class="job-overview__details-body-item-info">Rp.<?php echo $data['harga_sewa']?>/Hari</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


        <?php
        if(isset($_SESSION['rental'])){
          if($_SESSION['rental']==$data['username']){
        ?>
        <center>
        <a href="edit_mobil.php?id=<?php echo $data['no_pol'];?>" class="btn btn-warning">Perbaharui</a>
        <a href="proses/hapus_mobil.php?id=<?php echo $data['no_pol'];?>&&g1=<?php echo $data['foto_depan'];?>&&g2=<?php echo $data['foto_belakang'];?>&&g3=<?php echo $data['foto_samping'];?>&&g4=<?php echo $data['foto_dalam1'];?>&&g5=<?php echo $data['foto_dalam2'];?>" class="btn btn-danger">Hapus</a>
        <br>
        <br>
        </center>
        <?php
          }
        }
        ?>
<?php } ?>
<?php include"share/footer.php";?>



<script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/tether/js/tether.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="js/dropdown.animate.js"></script>



<script>
    (function () {
        $(document).ready(function () {
            var dropDownToggle = $('.dropdown-toggle');

            $(".navbar-toggler").on("click", function () {
                $(this).toggleClass("is-active");
            });

            dropDownToggle.click(function() {
                var dropdownList = $(this).parent().find('.dropdown-menu');
                var dropdownOffset = $(this).offset();
                var offsetLeft = dropdownOffset.left;
                var dropdownWidth = dropdownList.width() / 2;
                var docWidth = $(window).width();

                var isDropdownVisible = (offsetLeft + dropdownWidth <= docWidth);

                if (!isDropdownVisible) {
                    dropdownList.addClass('dropdown-menu-right');
                } else {
                    dropdownList.removeClass('dropdown-menu-right');
                }
            });
        });
    })(jQuery);
</script>

<script src="vendors/leaflet/leaflet.js"></script>
<script src="vendors/lightslider/js/lightslider.min.js"></script>
<script src="js/apartment.js"></script>


</body>
</html>

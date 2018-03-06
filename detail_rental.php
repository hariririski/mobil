<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Detail Rental</title>

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
<div class="apartment">
    <div class="apartment__wrap">
        <?php $id=$_GET['id'];
          include 'share/db.php';
        $query = mysqli_query($con,"select * from rental where id_rental='$id' ");
        while($data = mysqli_fetch_array($query)){
        ?>

        <h1 class="apartment__name"><?php echo $data['nama_rental'];?></h1>


        <div class="apartment__price">

        </div>



        <div class="apartment__description">
            <?php echo $data['alamat'];?>

        </div>



    </div>
    <div class="apartment__image-slider">
        <ul id="apartment-image-slider">

                <img width="1200px"src="rental/<?php echo $data['foto_rental'];?>" alt="">


        </ul>
    </div>

</div>

<?php
$id=$_GET['id'];
$cari = mysqli_query($con,"SELECT COUNT(no_pol) as jumlah_mobil, MAX(harga_sewa)as tinggi , MIN(harga_sewa) as rendah FROM `mobil` WHERE id_rental='$id' ");
while($data3 = mysqli_fetch_array($cari)){
?>
<div class="apartment__about">
    <div class="container">
        <div class="apartment__about-wrap">

            <ul class="apartment__about-amenity">
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-info-solid apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Jumlah Mobil :<?php echo $data3['jumlah_mobil'];?></span>

                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-wallet apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Sewa Termahal: Rp.<?php echo $data3['tinggi'];?>/Hari</span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-wallet apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Sewa Termurah: Rp.<?php echo $data3['rendah'];?>/Hari</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
}
?>
<div class="listing-travel-trips">
    <div class="container">
        <div class="row">
          <?php

          $query = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental");
          while($data1 = mysqli_fetch_array($query)){


          ?>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image" >
                        <center><img height="160px"  width="270px" src="mobil/<?php echo $data1['foto_samping'];?>" alt="" ></center>
                        <div class="listing-travel-trips__item-title">
                            <span><?php echo $data1['merek'];?></span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                          <table width="100%" border="0">
                            <tr>
                              <td width="40%">
                                Nama Rental
                              </td>
                              <td width="5%">
                                :
                              </td>
                              <td>
                              <?php echo $data1['nama_rental'];?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Merek
                              </td>
                              <td>
                                :
                              </td>
                              <td>
                                <?php echo $data1['merek'];?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Jenis
                              </td>
                              <td>
                                :
                              </td>
                              <td>
                                <?php echo $data1['jenis'];?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Tipe
                              </td>
                              <td>
                                :
                              </td>
                              <td>
                                <?php echo $data1['tipe'];?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Bahan Bakar
                              </td>
                              <td>
                                :
                              </td>
                              <td>
                                <?php echo $data1['bahan_bakar'];?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Jenis
                              </td>
                              <td>
                                :
                              </td>
                              <td>
                                <?php echo $data1['jenis'];?>
                              </td>
                            </tr>

                          </table>



                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Harga Sewa</span>
                                <span class="value">Rp.<?php echo $data12['harga_sewa'];?> </span>
                            </div>
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Waktu</span>
                                <span class="value">1 Hari</span>
                            </div>

                            <a href="detail_mobil.php?id=<?php echo $data1['no_pol'];?>" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
         <?php } ?>

        </div>

    </div>
</div>

<div class="container apartment__owner">
    <div class="apartment__owner-avatar-wrap">
        <img src="rental/<?php echo $data['foto_rental'];?>" alt="" class="apartment__owner-avatar" width="170" height="170">
    </div>
    <div class="apartment__owner-info">
        <div class="apartment__owner-info-name"><?php echo $data['nama_rental'];?></div>
        <div class="apartment__owner-info-location"><?php echo $data['alamat'];?></div>

        <div class="apartment__owner-info-actions-wrap">
            <ul class="apartment__owner-info-actions list-unstyled">

                <li>
                    Lakukan Pemesanan Sekarang Dengan Menghubungi
                </li>
                <li>
                    No Hp</a> &ndash; <?php echo $data['no_hp_rental'];?>
                </li>
            </ul>

        </div>
    </div>
    <div class="apartment__owner-actions">
        <a href="#" class="btn btn-primary btn-lg">Pesan Sekarang</a>

    </div>
</div>
<?php }?>
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

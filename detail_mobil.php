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
<div class="apartment">
    <div class="apartment__wrap">
      <?php $id=$_GET['id'];
        include 'share/db.php';
      $query = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where no_pol='$id' ");
      while($data = mysqli_fetch_array($query)){
      ?>
        <h1 class="apartment__name"><?php echo $data['merek']?></h1>
        <div class="apartment__location">Tahun: <?php echo $data['tahun_pembuatan']?></div>

        <div class="apartment__price">
            Rp.<?php echo $data['harga_sewa']?>/Hari <a href="" class="apartment__price-offer"></a>
        </div>

    </div>
    <div class="apartment__image-slider">
        <ul id="apartment-image-slider">
            <li data-thumb="mobil/<?php echo $data['foto_depan']?>">
                <img height="50px" src="mobil/<?php echo $data['foto_depan']?>" alt="">
            </li>
            <li data-thumb="mobil/<?php echo $data['foto_samping']?>">
                <img  height="50px" src="mobil/<?php echo $data['foto_samping']?>" alt="">
            </li>
            <li data-thumb="mobil/<?php echo $data['foto_belakang']?>">
                <img  height="50px" src="mobil/<?php echo $data['foto_belakang']?>" alt="">
            </li>
            <li data-thumb="mobil/<?php echo $data['foto_dalam1']?>">
                <img  height="50px" src="mobil/<?php echo $data['foto_dalam1']?>" alt="">
            </li>
            <li data-thumb="mobil/<?php echo $data['foto_dalam2']?>">
                <img  height="50px" src="mobil/<?php echo $data['foto_dalam2']?>" alt="">
            </li>

        </ul>
    </div>
</div>
<div class="apartment__about">
    <div class="container">
        <div class="apartment__about-wrap">

            <ul class="apartment__about-amenity">
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-info-solid apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Merek: <?php echo $data['merek']?></span>
                        <span>Jenis: <?php echo $data['jenis']?></span>
                        <span>Tipe: <?php echo $data['tipe']?></span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-bed apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Kapasitas Penumpang: <?php echo $data['kapasitas_penumpang']?></span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-map-point-v2 apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Bahan Bakar : <?php echo $data['bahan_bakar']?></span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-wallet apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Harga Sewa: Rp.<?php echo $data['harga_sewa']?>/Hari</span>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="apartment__full-description">
    <div class="container">
        <p>
          <?php echo $data['fasilitas']?>
        </p>

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

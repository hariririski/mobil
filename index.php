<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Home</title>

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



<link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="css/vendors/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendors/nouislider/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="css/vendors/nouislider/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="vendors/owl-carousel/assets/owl.carousel.min.css">


    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">


<?php include"share/menu.php";?>
<div class="hero-carousel">
    <div class="owl-carousel owl-theme hero-carousel__items">
        <div class="item hero-carousel__item">
            <img src="images/hero/properties.png" height="460" alt="">
            <div class="hero-carousel__item-info">
                <div class="container">
                    <h2 class="hero-carousel__item-heading">Tempat Terbaik Temukan Mobil Rental</h2>


                    <a href="cari_mobil.php"><div class="btn btn-outline-secondary hero-carousel__item-read-more">Temukan Mobil</div></a>
                </div>
            </div>
        </div>
        <div class="item hero-carousel__item">
            <img src="images/hero/properties.png" height="460" alt="">
            <div class="hero-carousel__item-info">
                <div class="container">
                    <h2 class="hero-carousel__item-heading">Informasi Rental Terlengkap Di Banda Aceh</h2>



                </div>
            </div>
        </div>
    </div>
</div>


<form class="filter-properties">
    <div class="container">
        <h2 class="filter-properties__heading">Temukan Rental Terbaik</h2>
        <div id="filter-properties-price-range-slider" class="filter-properties__price-range-slider range-slider-default-shadow range-slider-default-shadow-sm"></div>
    </div>
</form>
<div class="listing-properties">
    <div class="container">
        <h2 class="listing-properties__heading">Rental Terbaru</h2>

        <div class="row">
          <?php
          include 'share/db.php';
          $query = mysqli_query($con,"select * from rental order by tanggal_daftar DESC limit 6");
          while($data = mysqli_fetch_array($query)){
          ?>

            <div class="col-lg-4">
                <div class="listing-properties__item">
                    <div class="listing-properties__image">
                        <img height="226px" width="370px" src="rental/<?php echo $data['foto_rental'];?>" alt="" class="embed-respo/nsive">
                        <div class="listing-properties__price">
                            <span class="listing-properties__price-amount"><?php echo $data['nama_rental'];?></span>

                        </div>
                    </div>
                    <div class="listing-properties__title">Tanggal Bergabung :<?php echo $data['tanggal_daftar'];?></div>
                    <div class="listing-properties__meta">
                        <span class="listing-properties__meta-item">
                          <img src="data/mobil.png" width="15%">
                          <?php
                          $query2 = mysqli_query($con,"SELECT COUNT(no_pol)as jumlah from mobil WHERE id_rental='1'");
                          while($data2 = mysqli_fetch_array($query2)){
                          ?>

                          <span class="amount"><?php echo $data2['jumlah'];?> Unit</span>

                      <?php } ?>

                        </span>

                    </div>
                    <a href="detail_rental.php?id=<?php echo $data['id_rental'];?>" class="btn btn-outline-primary listing-properties__view-details">View Details</a>
                </div>
            </div>
            <?php
          }
            ?>


        </div>

    </div>
</div>
<div class="choose-us-default">
    <div class="container">
        <h2 class="choose-us-default__heading">Kenapa Memilih Kami</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="choose-us-default__item">
                    <h5 class="choose-us-default__item-heading">Rental Terpercaya</h5>
                    <span class="choose-us-default__item-icon iconfont-user-outline"></span>
                    <div class="choose-us-default__item-description">
                        Hanya Rental Terpercaya Dan Resmi Yang Kami Tampilkan
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="choose-us-default__item">
                    <h5 class="choose-us-default__item-heading">Pelayanan Prima</h5>
                    <span class="choose-us-default__item-icon iconfont-hands-key-outline"></span>
                    <div class="choose-us-default__item-description">
                        Kami Dan Rental Berkomitmen Memberikan Pelayanan Prima
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="choose-us-default__item">
                    <h5 class="choose-us-default__item-heading">Mudah Mencari Mobil</h5>
                    <span class="choose-us-default__item-icon iconfont-magnifier"></span>
                    <div class="choose-us-default__item-description">
                        Mudah Mencari Mobil Sesuai Dengan Pilih Anda
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="recent-news">
    <div class="container">
        <h2 class="recent-news__heading">Mobil Terbaru</h2>

        <div class="row">
          <?php
          include 'share/db.php';
          $query = mysqli_query($con,"select * from mobil inner join rental on rental.id_rental=mobil.id_rental order by tanggal_post DESC limit 3");
          while($data = mysqli_fetch_array($query)){
          ?>
            <div class="col-lg-4">
                <div class="recent-news__item">
                    <img height="240px" src="mobil/<?php echo $data['foto_samping'];?>" alt="" class="recent-news__image embed-responsive">
                    <a href="detail_mobil.php?id=<?php echo $data['no_pol'];?>" class="recent-news__title"><?php echo $data['merek'];?></a>
                    <div class="recent-news__meta">
                        Posting Dari  <a href="#"><?php echo $data['nama_rental'];?></a> <?php echo $data['tanggal_post'];?>
                    </div>


                    <a href="detail_mobil.php?id=<?php echo $data['no_pol'];?>" class="btn btn-outline-primary btn-lg recent-news__read-more-btn">Read more</a>
                </div>
            </div>
            <?php
          }
            ?>

        </div>
    </div>
</div>
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

<script src="vendors/select2/js/select2.min.js"></script>
<script src="vendors/nouislider/nouislider.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/properties.js"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Cari Mobil</title>

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


    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">



<?php include"share/menu.php";?>
<div class="hero-travel-trips">
    <div class="container">
        <h2 class="hero-travel-trips__heading">Cari Mobil</h2>
        <form action="#" class="hero-travel-trips__form">
            <div class="form-control-inline-icon inline-icon-left hero-travel-trips__search-input">
                <span class="icon iconfont-left iconfont-search-v2"></span>
                <?php
                $cari=$_GET['cari'];
                if($cari=='semua'){
                ?>
                    <input type="text" name="cari" class="form-control" placeholder="Cari Berdasarkan Merek, Tipe, Jenis Mobil, Tahun, Bahan Bakar">
                <?php
                }else if($cari!='semua'){
                ?>
                    <input type="text" name="cari" value="<?php echo $cari;?>" class="form-control" placeholder="Cari Berdasarkan Merek, Tipe, Jenis Mobil, Tahun, Bahan Bakar">
                <?php
                }
                ?>
            </div>






            <button type="button" class="btn btn-primary hero-travel-trips__search-btn">Temukan</button>
        </form>
    </div>
</div>







<div class="listing-travel-trips">
    <div class="container">
        <div class="row">
          <?php
          include 'share/db.php';
          $halaman = 8; //batasan halaman
          $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
          $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
          $cari=$_GET['cari'];
          if($cari=='semua'){
            $query = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental LIMIT $mulai, $halaman");
            $sql = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental");
          }else if($cari!='semua'){
            $query = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental WHERE rental.status=1 and mobil.merek LIKE '%$cari%' or mobil.tipe LIKE '%$cari%' or mobil.jenis LIKE '%$cari%' or mobil.tahun_pembuatan LIKE '%$cari%' or mobil.bahan_bakar LIKE '%$cari%' order by mobil.harga_sewa ASC LIMIT $mulai, $halaman");
            $sql = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental WHERE rental.status=1 and mobil.merek LIKE '%$cari%' or mobil.tipe LIKE '%$cari%' or mobil.jenis LIKE '%$cari%' or mobil.tahun_pembuatan LIKE '%$cari%' or mobil.bahan_bakar LIKE '%$cari%' order by mobil.harga_sewa ASC");
          }
          $total = mysqli_num_rows($sql);
          if($total==0&&$cari!="semua"){
            echo $total;
            echo'
            <div class="alert col-lg-12 alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="alert-heading">Maaf!!</h5>
                <p>Mobil Yang Anda Cari Tidak Ditemukan.</p>
                <hr>
                <p class="mb-0">Kembali Untuk Melihat Semua  Mobil, Silahkan Klik Kembali  <a href="cari_mobil.php?cari=semua" class="alert-link">Kembali</a></p>
            </div>

            ';
          }
          $pages = ceil($total/$halaman);
          while($data = mysqli_fetch_array($query)){


          ?>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image" >
                        <center><img height="160px"  width="270px" src="mobil/<?php echo $data['foto_samping'];?>" alt="" ></center>
                        <div class="listing-travel-trips__item-title">
                            <span><?php echo $data['merek'];?></span>
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
                              <?php echo $data['nama_rental'];?>
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
                                <?php echo $data['merek'];?>
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
                                <?php echo $data['jenis'];?>
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
                                <?php echo $data['tipe'];?>
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
                                <?php echo $data['bahan_bakar'];?>
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
                                <?php echo $data['jenis'];?>
                              </td>
                            </tr>

                          </table>



                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Harga Sewa</span>
                                <span class="value">Rp.<?php echo $data['harga_sewa'];?> </span>
                            </div>
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Waktu</span>
                                <span class="value">1 Hari</span>
                            </div>

                            <a href="detail_mobil.php?id=<?php echo $data['no_pol'];?>" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
         <?php } ?>

        </div>

        <nav class="listings-pagination listings-travel-trips-pagination d-flex justify-content-center">
            <ul class="pagination">
              <?php for ($i=1; $i<=$pages ; $i++){ ?>
                <li class="page-item <?php if($_GET["halaman"]==$i){echo "active"; }?>"><a  href="?cari=<?php echo $cari; ?>&&halaman=<?php echo $i; ?>" class="page-link" ><?php echo $i; ?></a></li>
               <?php } ?>
            </ul>
        </nav>

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
<script src="js/travel-trips.js"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Rental</title>

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
        <h2 class="hero-travel-trips__heading">Cari Rental</h2>
        <form action="rental.php" method="GET" class="hero-travel-trips__form">
            <div class="form-control-inline-icon inline-icon-left hero-travel-trips__search-input">
                <span class="icon iconfont-left iconfont-search-v2"></span>
                <?php
                $cari=$_GET['cari'];
                if($cari=='semua'){
                ?>
                    <input type="text" name="cari" class="form-control" placeholder="Contoh: CV. Mobil Pratama">
                <?php
                }else if($cari!='semua'){
                ?>
                    <input type="text" name="cari" value="<?php echo $cari;?>" class="form-control" placeholder="Contoh: CV. Mobil Pratama">
                <?php
                }
                ?>
            </div>






            <button type="submit" class="btn btn-primary hero-travel-trips__search-btn">Temukan</button>
        </form>
    </div>
</div>







<div class="listing-travel-trips">
    <div class="container">
        <div class="row col-lg-12">
          <?php
          include 'share/db.php';
          $halaman = 8; //batasan halaman
          $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
          $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
          $cari=$_GET['cari'];
          if($cari=='semua'){
            $query = mysqli_query($con,"select * from rental where status='1' LIMIT $mulai, $halaman");
            $sql = mysqli_query($con,"select * from rental where status='1'");
          }else if($cari!='semua'){
            $query = mysqli_query($con,"select * from rental where status='1' and  nama_rental LIKE '%$cari%' or alamat like '%$cari%' LIMIT $mulai, $halaman");
            $sql = mysqli_query($con,"select * from rental where status='1' and nama_rental LIKE '%$cari%' or alamat like '%$cari%'  ");

          }
          $total = mysqli_num_rows($sql);
          if($total==0){
            echo'
            <div class="alert col-lg-12 alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="alert-heading">Maaf!!</h5>
                <p>Rental Yang Anda Cari Tidak Ditemukan.</p>
                <hr>
                <p class="mb-0">Kembali Untuk Melihat Semua Rentak Mobil, Silahkan Klik Kembali  <a href="rental.php?cari=semua" class="alert-link">Kembali</a></p>
            </div>

            ';
          }
          $pages = ceil($total/$halaman);
          while($data = mysqli_fetch_array($query)){


          ?>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image" >
                        <center><img height="160px" width="255px" src="rental/<?php echo $data['foto_rental'];?>" alt="" ></center>
                        <div class="listing-travel-trips__item-title">
                            <span><?php echo $data['nama_rental'];?></span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                          <table width="100%" border="0">
                            <tr>
                              <td width="40%">
                                Nama
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
                                Alamat
                              </td>
                              <td>
                                :
                              </td>
                              <td>
                                <?php echo $data['alamat'];?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                No HP
                              </td>
                              <td>
                                :
                              </td>
                              <td>
                                <?php echo $data['no_hp_rental'];?>
                              </td>
                            </tr>

                          </table>



                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Unit Mobil</span>
                                <?php
                                $query2 = mysqli_query($con,"SELECT COUNT(no_pol)as jumlah from mobil WHERE id_rental=".$data['id_rental']."");
                                while($data2 = mysqli_fetch_array($query2)){
                                ?>
                                <span class="value"><?php echo $data2['jumlah'];?> Unit</span>
                            </div>
                            <?php } ?>
                            <a href="detail_rental.php?id=<?php echo $data['id_rental'];?>" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
          }

            ?>
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

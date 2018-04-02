
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Profil Costumer</title>

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
<?php
// if((empty($_SESSION['coustumer']))){
//   echo '<script type="text/javascript">window.location = "index.php"</script>';
// }
?>
  <?php
  include 'share/db.php';
  $id=$_SESSION['costumer'];
  $query = mysqli_query($con,"select * from costumer where username='$id'");
  while($data = mysqli_fetch_array($query)){


  ?>

<form action="proses/edit_profil.php?id=<?php echo $data['id_costumer']?>" method="post" enctype="multipart/form-data" class="post-job">
    <div class="container">
      <?php if( $data['verifikasi']==0){?>
      <div class="alert alert-warning alert-solid-warning" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Warning!</strong> Akun Anda Belum Aktif....
            </div>
      <?php }else if($data['verifikasi']==2){?>
        <div class="alert alert-warning alert-solid-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  <strong>Warning!</strong> Data Pada Akun Anda Gagal Di Verifikasi
              </div>
          <?php }?>
        <div class="row">
            <div class="col-lg-9">
                <p class="post-job__description">Data Profil</p>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nama</label>
                                    <input type="text" name="nama_rental" value="<?php echo $data['nama']?>" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__description" class="d-flex justify-content-between">Alamat<span class="icon iconfont-help-outline"></span></label>
                                    <textarea id="post-job__description" class="form-control"  name="alamat" placeholder="Alamat " rows="5"><?php echo $data['alamat']?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nomor Hp</label>
                                    <input type="number" name="no_hp" value="<?php echo $data['no_hp']?>" class="form-control" placeholder="Nama Rental Anda">
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto KTP</label>
                                    <input type="file" name="foto_rental"  class="form-control" placeholder="">
                                    <img src="penyewa/<?php echo $data['foto_ktp']?>" width="30%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Diri Anda + KTP</label>
                                    <input type="file" name="foto_rental"  class="form-control" placeholder="">
                                    <img src="penyewa/<?php echo $data['foto_ktp_orang']?>" width="30%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <button type="submit"class="btn btn-primary btn-block post-job__submit-button">Perbaharui</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
<?php  }?>
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
<script src="js/post-job.js"></script>


</body>
</html>

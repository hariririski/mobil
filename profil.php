<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Profil Rental</title>

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
  include 'share/db.php';
  $id=$_GET['id'];
  $query = mysqli_query($con,"select * from rental where username='$id'");
  while($data = mysqli_fetch_array($query)){


  ?>

<form action="proses/edit_profil.php?id=<?php echo $data['id_rental']?>" method="post" enctype="multipart/form-data" class="post-job">
    <div class="container">


        <div class="row">
            <div class="col-lg-9">
                <p class="post-job__description">Data Profil</p>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nama Rental Mobil</label>
                                    <input type="text" name="nama_rental" value="<?php echo $data['nama_rental']?>" class="form-control" placeholder="Nama Rental Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__description" class="d-flex justify-content-between">Alamat Rental Anda<span class="icon iconfont-help-outline"></span></label>
                                    <textarea id="post-job__description" class="form-control"  placeholder="Alamat Rental Anda" rows="5"><?php echo $data['alamat']?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nomor Hp Rental Mobil</label>
                                    <input type="number" name="nama_rental" value="<?php echo $data['no_hp_rental']?>" class="form-control" placeholder="Nama Rental Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">No KTP Pemilik Rental</label>
                                    <input type="number" name="nik" value="<?php echo $data['nik']?>"  class="form-control" placeholder="NIK">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nama Pemilik Rental</label>
                                    <input type="text" name="nama_pemilik_rental" value="<?php echo $data['nama_pemilik']?>"  class="form-control" placeholder="Nama Pemilik Rental Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">No Hp Pemilik Rental</label>
                                    <input type="number" value="<?php echo $data['no_hp_pemilik']?>" name="no_hp_pemilik"  class="form-control" placeholder="Nomor Hp Pemilik Rental">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Rental</label>
                                    <input type="file" name="foto_rental"  class="form-control" placeholder="">
                                    <img src="rental/<?php echo $data['foto_rental']?>" width="30%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <button class="btn btn-primary btn-block post-job__submit-button">Daftar</button>
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

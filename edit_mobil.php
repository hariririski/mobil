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
  $query1 = mysqli_query($con,"select * from mobil where no_pol='$id'");
  while($data= mysqli_fetch_array($query1)){


?>
<form action="proses/tambah_mobil.php?id=<?php echo $data['id_rental'];?>" method="POST" enctype="multipart/form-data" class="post-job">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <p class="post-job__description">Tambah Mobil</p>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nomor Polisi</label>
                                    <input type="text" name="no_polisi" value="<?php echo $data['no_pol'];?>" class="form-control" required placeholder="No Polisi">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Merek</label>
                                    <input type="text" name="merek" value="<?php echo $data['merek'];?>" class="form-control" required placeholder="Merek Mobil">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Tipe</label>
                                    <input type="text" name="tipe" value="<?php echo $data['tipe'];?>" class="form-control" required placeholder="Tipe Mobil">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Jenis Mobil</label>
                                    <input type="text" name="jenis" value="<?php echo $data['jenis'];?>" class="form-control" required placeholder="Jenis Mobil">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Tahun Pembuatan</label>
                                    <input type="number" name="tahun_pembuatan" value="<?php echo $data['tahun_pembuatan'];?>" class="form-control" required placeholder="Tahun Pembuatan">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Kapasitas Peumpang</label>
                                    <input type="text" name="kapasitas_penumpang" value="<?php echo $data['kapasitas_penumpang'];?>" class="form-control" required placeholder="Kapasitas Penumbang">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Bakan Bakar</label>
                                    <input type="text" name="bahan_bakar" value="<?php echo $data['bahan_bakar'];?>" class="form-control" required placeholder="Bahan Bakar">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Harga Sewa</label>
                                    <input type="number" name="harga_sewa" value="<?php echo $data['harga_sewa'];?>" class="form-control" required placeholder="Harga Sewa">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__description" class="d-flex justify-content-between">Fasititas Mobil<span class="icon iconfont-help-outline"></span></label>
                                    <textarea id="post-job__description"  class="form-control" required  name="fasilitas" placeholder="Fasilitas Mobil" rows="5"><?php echo $data['fasilitas'];?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Depan</label>
                                    <input type="file" name="foto_depan"  class="form-control" required placeholder="">
                                    <img src="mobil/<?php echo $data['foto_depan']?>" width="30%">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Belakang</label>
                                    <input type="file" name="foto_belakang"  class="form-control" required placeholder="">
                                    <img src="mobil/<?php echo $data['foto_belakang']?>" width="30%">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Samping</label>
                                    <input type="file" name="foto_samping"  class="form-control" required placeholder="">
                                    <img src="mobil/<?php echo $data['foto_samping']?>" width="30%">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Belakang</label>
                                    <input type="file" name="foto_depan"  class="form-control" required placeholder="">
                                    <img src="mobil/<?php echo $data['foto_belakang']?>" width="30%">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Interior Mobil</label>
                                    <input type="file" name="foto_dalam1"  class="form-control" required placeholder="">
                                    <img src="mobil/<?php echo $data['foto_dalam1']?>" width="30%">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Interior Mobil</label>
                                    <input type="file" name="foto_dalam2"  class="form-control" required placeholder="">
                                    <img src="mobil/<?php echo $data['foto_dalam2']?>" width="30%">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block post-job__submit-button">Perbaharui Data Mobil</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
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

<script src="vendors/select2/js/select2.min.js"></script>
<script src="js/post-job.js"></script>


</body>
</html>

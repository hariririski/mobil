<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>invoice</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconfont/styles.css">

    <link rel="stylesheet" type="text/css" href="css/style.min.css">



</head>
<!-- BEGIN HEAD -->
<body >
  <?php
  //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING|E_ALL));
  include"share/menu.php";
  $id=$_GET['id'];?>
  <iframe class="animated fadeInDown wow" src="frame.php?id=<?php echo $id;?>" width="100%" height="615px" scrolling="no" frameborder="0"></iframe>


  <?php
  include 'share/db.php';
  $query = mysqli_query($con,"SELECT *from pesan WHERE pesan.invoice='$id' ");
  while($data = mysqli_fetch_array($query)){


  ?>
<div class="container">
    <label >Konfirmasi Pembayaran</label>
    <div class="col-lg-7">
      <div class="form-group row">
          <label for="example-text-input-with-left-button" class="col-5 col-form-label">Status Pembayaran</label>
          <div class="col-7">
              <div class="dropdown">
                  <button class="btn btn-<?php if($data['verifikasi_pembayaran']==0){echo"warning";}else if($data['verifikasi_pembayaran']==1){echo"info";}if($data['verifikasi_pembayaran']==2){echo"success";}if($data['verifikasi_pembayaran']==3){echo"danger";} ?> btn-block " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php if($data['verifikasi_pembayaran']==0){echo"Belum Melakukan Pembayaran";}else if($data['verifikasi_pembayaran']==1){echo"Pembayaran Belum Di Verifikasi";}if($data['verifikasi_pembayaran']==2){echo"Pembayaran Berhasil";}if($data['verifikasi_pembayaran']==3){echo"Pembayaran Gagal";} ?>
                  </button>

              </div>
          </div>

      </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-5 col-form-label">Bank Pengirim</label>
            <div class="col-7">
                <input class="form-control" value="<?php echo $data['bank_pengirim'];?>" type="text"  id="example-text-input" >

            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-5 col-form-label">NO Rekening Pengirim</label>
            <div class="col-7">
                <input class="form-control" type="text" value="<?php echo $data['rek_pengirim'];?>"  id="example-text-input" >

            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-5 col-form-label">Nominal</label>
            <div class="col-7">
                <input class="form-control" type="text" value="<?php echo $data['nominal'];?>"  id="example-text-input" >

            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-5 col-form-label">Bukti Pembayaran</label>
            <div class="col-7">
                <img src="bukti_pembayaran/<?php echo $data['bukti_pembayaran'];?>"">

            </div>
        </div>
    </div>
      <?php if($data['verifikasi_pembayaran']!=2){?>
    <div class="form-group row">
      <div class="col-lg-3">
        <div class="dropdown">
            <a href="proses/pembayaran_tidak.php?invoice=<?php echo $data['invoice'];?>"><button class="btn btn-danger btn-block " type="submit" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Verifikasi Gagal
            </button>
          </a>

        </div>
      </div>
        <div class="col-lg-3">
            <div class="dropdown">
              <a href="proses/pembayaran_ya.php?invoice=<?php echo $data['invoice'];?>">
                <button class="btn btn-success btn-block " type="submit" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Verifikasi Berhasil
                </button>
              </a>
            </div>
        </div>

    </div>
  <?php }?>

</div>

<?php }?>
<br>
<br>
<br>
<?php include"share/footer.php";?>


<!-- <script src="vendors/jquery/jquery.min.js"></script> -->
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

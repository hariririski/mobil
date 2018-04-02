
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

    <style type="text/css">
    .card-block {
    padding: 2px 2px;
    font-size: 12px;
}
  div{
  -moz-border-radius-topleft: 4px; -webkit-border-top-left-radius: 4px; -khtml-border-top-left-radius: 4px; border-top-left-radius: 4px;
  -moz-border-radius-topright: 4px; -webkit-border-top-right-radius: 4px; -khtml-border-top-right-radius: 4px; border-top-right-radius: 4px;
  -moz-border-radius-bottomleft: 4px; -webkit-border-bottom-left-radius: 4px; -khtml-border-bottom-left-radius: 4px; border-bottom-left-radius: 4px;
  -moz-border-radius-bottomright: 4px; -webkit-border-bottom-right-radius: 4px; -khtml-border-bottom-right-radius: 4px; border-bottom-right-radius: 4px;
  }
  body{
  font-family:Arial, Helvetica, sans-serif;
  font-size:11px;
  }
  .hari{
  float:left;
  padding:7px;
  width:65px;
  text-align:center;
  margin:2px;
  background:#0CF;
  background-image:-webkit-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:-moz-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:-o-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:-ms-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
}
  .tgl{
  float:left;
  padding:7px;
  width:65px;
  text-align:center;
  margin:2px;
  background:#CCC;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(27%, #ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(#ffffff, #ffffff 27%, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #ffffff 27%, #e6e6e6);
  background-image: -ms-linear-gradient(#ffffff, #ffffff 27%, #e6e6e6);
  background-image: -o-linear-gradient(#ffffff, #ffffff 27%, #e6e6e6);
  background-image: linear-gradient(#ffffff, #ffffff 27%, #e6e6e6);
  }
  .tgl:hover{
  background-image: -khtml-gradient(linear, left top, left bottom, from(#049cdb), to(#0064cd));
  background-image: -moz-linear-gradient(top, #049cdb, #0064cd);
  background-image: -ms-linear-gradient(top, #049cdb, #0064cd);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #049cdb), color-stop(100%, #0064cd));
  background-image: -webkit-linear-gradient(top, #049cdb, #0064cd);
  background-image: -o-linear-gradient(top, #049cdb, #0064cd);
  background-image: linear-gradient(top, #049cdb, #0064cd);
  color:#FFF;
  }
  .float_habis{
  padding:1px;
  text-align:center;
  }
  .tgl_blank{
  float:left;
  padding:7px;
  width:65px;
  text-align:center;
  margin:2px;
  background:#F8F8F8;
  color:#CCC;
  }

  .tgl_skrng{
  float:left;
  padding:7px;
  width:65px;
  text-align:center;
  margin:2px;
  background:#FC0;
  }

  .sedang{
  float:left;
  padding:7px;
  width:65px;
  text-align:center;
  margin:2px;
  background:#ff0505;
  }

  .blokbaris{
  padding:7px;
  text-align:center;
  margin:2px;
  }
</style>
</head>
<!-- BEGIN HEAD -->
<body class="">
  <?php include"share/menu.php";?>

  <?php
  kalender(4,2018);
  kalender(5,2018);

function kalender($bulan,$tahun){
          $sewa[0]="4-4-2018";
          $sewa[1]="2-4-2018";
          $sewa[2]="11-4-2018";
          $sewa[3]="24-4-2018";
          $sewa[4]="10-4-2018";

          $nama_bulan[1]="Januari";
          $nama_bulan[2]="February";
          $nama_bulan[3]="Maret";
          $nama_bulan[4]="April";
          $nama_bulan[5]="Mei";
          $nama_bulan[6]="Juni";
          $nama_bulan[7]="Juli";
          $nama_bulan[8]="Agustus";
          $nama_bulan[9]="September";
          $nama_bulan[10]="Oktober";
          $nama_bulan[11]="November";
          $nama_bulan[12]="Desember";

          $now = getdate(time());

          $time = mktime(0,0,0, $bulan, 1, $tahun);
          $date = getdate($time);
          $dayTotal = cal_days_in_month(0, $bulan, $tahun);
          //Print the calendar header with the month name.
          print'
          <div class="col-lg-12">
          <div class="col-lg-5">
          <div class="card card-outline-info mb-3 ">
            <div class="card-header bg-info">' . $nama_bulan[$bulan] . '</div>
          <div class="card-block">';
          print '<div class=blokbaris>';
          $hari=array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
          for ($i = 0; $i < 7; $i++) {
          print "<div class='hari'>$hari[$i]</div>";
          }
          print '<div class=float_habis>&nbsp;</div></div>';

          for ($i = 0; $i < 6; $i++) {
              print '<div class=blokbaris>';
              for ($j = 1; $j <= 7; $j++) {
                  $dayNum = $j + $i*7 - $date['wday'];
                  //Print a cell with the day number in it.  If it is today, highlight it.
                  print '<div';
                        $ya=0;
                        for($a=0;$a<count($sewa);$a++){
                          $tanggal=$dayNum."-".$bulan."-".$tahun;
                          if($tanggal == $sewa[$a]){
                          echo' class=sedang>';
                          $ya=1;
                          break;
                          }
                        }
                  if($ya==0){
                      echo ' class=tgl>';
                  }
                  if($dayNum<=0){
                      print "&nbsp;";
                  }else{
                     print "$dayNum";
                  }

                  print '</div>';
              }
              print '<div class=float_habis>&nbsp;</div></div>';
              if ($dayNum >= $dayTotal && $i != 6)
              break;
          }
          print'</div>';
          print'
          </div>
      </div>
      </div>
          ';
          echo "<br>";
  }
  ?>

<?php
// if((empty($_SESSION['coustumer']))){
//   echo '<script type="text/javascript">window.location = "index.php"</script>';
// }
?>
  <?php
  // include 'share/db.php';
  // $id=$_SESSION['costumer'];
  // $query = mysqli_query($con,"select * from costumer where username='$id'");
  // while($data = mysqli_fetch_array($query)){


  ?>


<?php  //}?>



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

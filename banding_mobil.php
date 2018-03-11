<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Bandingkan Mobil</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconfont/styles.css">
    <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendors/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">


    <link rel="stylesheet" href="data/dist2/bootstrap2.css">
    <link rel="stylesheet" href="data/dist2/css/bootstrap-select.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js" defer></script>
    <script src="data/dist2/js/bootstrap-select.js" defer></script>


</head>
<!-- BEGIN HEAD -->
<body >



<?php include"share/menu.php";?>


<div>

<div class="hero-travel-trips">
  <form action="banding_mobil.php" method="GET">
    <div class="container">
        <h2 class="hero-travel-trips__heading">Bandingkan Mobil</h2>

          <div class="col-lg-3">
            <select id="basic" name="mobil1" class="selectpicker show-tick form-control" data-live-search="true">
              <?php
              include 'share/db.php';
              if(empty($_GET['mobil1'])){
              ?>
              <option value="">Pilih Mobil</option>
              <?php
              }else{
                $no_polisi1=$_GET['mobil1'];
                $cari1 = mysqli_query($con,"select * from mobil where no_pol='$no_polisi1' ");
                while($data_cari = mysqli_fetch_array($cari1)){
              ?>
              <option value="<?php echo $data_cari['no_pol']?>"><?php echo $data_cari['merek']?></option>
              <?php
                }
              }
              ?>
              <?php

              $query = mysqli_query($con,"select * from rental where status='1' ");
              while($data = mysqli_fetch_array($query)){
              ?>
              <optgroup label="<?php echo $data['nama_rental'];?>" data-subtext="Rental">
                <?php
                include 'share/db.php';
                $id_rental=$data['id_rental'];
                $query2 = mysqli_query($con,"select * from mobil where id_rental='$id_rental' ");
                while($data2 = mysqli_fetch_array($query2)){
                ?>
                <option value="<?php echo $data2['no_pol']?>"><?php echo $data2['merek'];?></option>
                <?php
                  }
                ?>
              </optgroup>
              <?php
                }
              ?>


            </select>
          </div>

          <div class="col-lg-3">
            <select id="basic" name="mobil2" class="selectpicker show-tick form-control" data-live-search="true">
              <?php

              if(empty($_GET['mobil2'])){
              ?>
              <option value="">Pilih Mobil</option>
              <?php
              }else{
                $no_polisi2=$_GET['mobil2'];
                $cari2 = mysqli_query($con,"select * from mobil where no_pol='$no_polisi2' ");
                while($data_cari2 = mysqli_fetch_array($cari2)){
              ?>
              <option value="<?php echo $data_cari2['no_pol']?>"><?php echo $data_cari2['merek']?></option>
              <?php
                }
              }
              ?>
              <?php

              $query = mysqli_query($con,"select * from rental where status='1' ");
              while($data = mysqli_fetch_array($query)){
              ?>
              <optgroup label="<?php echo $data['nama_rental'];?>" data-subtext="Rental">
                <?php
                include 'share/db.php';
                $id_rental=$data['id_rental'];
                $query2 = mysqli_query($con,"select * from mobil where id_rental='$id_rental' ");
                while($data2 = mysqli_fetch_array($query2)){
                ?>
                <option value="<?php echo $data2['no_pol']?>"><?php echo $data2['merek'];?></option>
                <?php
                  }
                ?>
              </optgroup>
              <?php
                }
              ?>


            </select>
          </div>

          <div class="col-lg-3">
            <select id="basic" name="mobil3" class="selectpicker show-tick form-control" data-live-search="true">
              <?php
              if(empty($_GET['mobil3'])){
              ?>
              <option value="">Pilih Mobil</option>
              <?php
              }else{
                $no_polisi3=$_GET['mobil3'];
                $cari3 = mysqli_query($con,"select * from mobil where no_pol='$no_polisi3' ");
                while($data_cari3 = mysqli_fetch_array($cari3)){
              ?>
              <option value="<?php echo $data_cari3['no_pol']?>"><?php echo $data_cari3['merek']?></option>
              <?php
                }
              }
              ?>
              <?php
              include 'share/db.php';
              $query = mysqli_query($con,"select * from rental where status='1' ");
              while($data = mysqli_fetch_array($query)){
              ?>
              <optgroup label="<?php echo $data['nama_rental'];?>" data-subtext="Rental">
                <?php
                include 'share/db.php';
                $id_rental=$data['id_rental'];
                $query2 = mysqli_query($con,"select * from mobil where id_rental='$id_rental' ");
                while($data2 = mysqli_fetch_array($query2)){
                ?>
                <option value="<?php echo $data2['no_pol']?>"><?php echo $data2['merek'];?></option>
                <?php
                  }
                ?>
              </optgroup>
              <?php
                }
              ?>


            </select>
          </div>

          <div class="col-lg-3">
            <button type="submit" class="btn btn-primary col-lg-12 ">Bandingkan</button>
          </div>
    </div>
  </form>
</div>


<div class="container">
<br>

  <?php
  if((empty($_GET['mobil1']))&&(empty($_GET['mobil2']))&&(empty($_GET['mobil3']))){
  ?>

  <?php
  }else{
  ?>
  <div class="card card-outline-primary mb-3">
  <div class="card-block">
    <div class="container">
      <br>
      <?php
      if((isset($_GET['mobil1']))||(isset($_GET['mobil2']))||(isset($_GET['mobil3']))){
        $nopol1=$_GET['mobil1'];
        $nopol2=$_GET['mobil2'];
        $nopol3=$_GET['mobil3'];
      ?>
      <div class="col-lg-12">
      <table class="table table-striped">
        <tbody>
          <tr>
              <th>#</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <th width="27%"><?php echo $data_bandingkan1['nama_rental']?></th>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Foto Mobil</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><img width ="100%" src="mobil/<?php echo $data_bandingkan1['foto_depan']?>"></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Harga Sewa</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['harga_sewa']?>/Hari</td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Merek</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['merek']?></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Tipe</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['tipe']?></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Jenis</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['jenis']?></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Tahun Pembuatan</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['tahun_pembuatan']?></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Bahan Bakar</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['bahan_bakar']?></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Kapasitas Penumbang</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['kapasitas_penumpang']?></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Fasilitas</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><?php echo $data_bandingkan1['fasilitas']?></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Foto Belakang</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><img width ="100%" src="mobil/<?php echo $data_bandingkan1['foto_belakang']?>"></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Foto Samping</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><img width ="100%" src="mobil/<?php echo $data_bandingkan1['foto_samping']?>"></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Foto Interior 1</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><img width ="100%" src="mobil/<?php echo $data_bandingkan1['foto_dalam1']?>"></td>
                        <?php
                          }
                        ?>
          </tr>
          <tr>
              <th>Foto Interior 2</th>

                        <?php
                          $bandingkan1 = mysqli_query($con,"select * from mobil left join rental on rental.id_rental=mobil.id_rental where mobil.no_pol='$nopol1' or mobil.no_pol='$nopol2' or mobil.no_pol='$nopol3' ");
                          while($data_bandingkan1= mysqli_fetch_array($bandingkan1)){
                        ?>
                                    <td><img width ="100%" src="mobil/<?php echo $data_bandingkan1['foto_dalam2']?>"></td>
                        <?php
                          }
                        ?>
          </tr>
        </tbody>
      </table>
        </div>
        <?php
        }
        ?>
    </div>
  </div>
  </div>
  <?php
  }
  ?>

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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>


</body>
</html>

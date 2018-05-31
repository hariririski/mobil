<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Cek Ketersediaan</title>

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

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <script src='vendors/lib/jquery.min.js'></script>
    <link rel="stylesheet" href="data/bootstrap-datetimepicker.min.css">
    <!-- <link rel="stylesheet" href="data/bootstrap.min.css"> -->
    <link rel="stylesheet" href="data/bootstrapValidator.min.css">
    <script src="data/bootstrapValidator.min.js"></script>
    <script src="data/moment.min.js"></script>
    <script src="data/bootstrap-datetimepicker.min.js"></script>
    <script>
    var bindDateRangeValidation = function (f, s, e) {
        if(!(f instanceof jQuery)){
    			console.log("Not passing a jQuery object");
        }

        var jqForm = f,
            startDateId = s,
            endDateId = e;

        var checkDateRange = function (startDate, endDate) {
            var isValid = (startDate != "" && endDate != "") ? startDate <= endDate : true;
            return isValid;
        }

        var bindValidator = function () {
            var bstpValidate = jqForm.data('bootstrapValidator');
            var validateFields = {
                startDate: {
                    validators: {
                        notEmpty: { message: 'This field is required.' },
                        callback: {
                            message: 'Start Date must less than or equal to End Date.',
                            callback: function (startDate, validator, $field) {
                                return checkDateRange(startDate, $('#' + endDateId).val())
                            }
                        }
                    }
                },
                endDate: {
                    validators: {
                        notEmpty: { message: 'This field is required.' },
                        callback: {
                            message: 'End Date must greater than or equal to Start Date.',
                            callback: function (endDate, validator, $field) {
                                return checkDateRange($('#' + startDateId).val(), endDate);
                            }
                        }
                    }
                },
              	customize: {
                    validators: {
                        customize: { message: 'customize.' }
                    }
                }
            }
            if (!bstpValidate) {
                jqForm.bootstrapValidator({
                    excluded: [':disabled'],
                })
            }

            jqForm.bootstrapValidator('addField', startDateId, validateFields.startDate);
            jqForm.bootstrapValidator('addField', endDateId, validateFields.endDate);

        };

        var hookValidatorEvt = function () {
            var dateBlur = function (e, bundleDateId, action) {
                jqForm.bootstrapValidator('revalidateField', e.target.id);
            }

            $('#' + startDateId).on("dp.change dp.update blur", function (e) {
                $('#' + endDateId).data("DateTimePicker").setMinDate(e.date);
                dateBlur(e, endDateId);
            });

            $('#' + endDateId).on("dp.change dp.update blur", function (e) {
                $('#' + startDateId).data("DateTimePicker").setMaxDate(e.date);
                dateBlur(e, startDateId);
            });
        }

        bindValidator();
        hookValidatorEvt();
    };


    $(function () {
        var sd = new Date(), ed = new Date();

        $('#startDate').datetimepicker({
          pickTime: false,
          format: "YYYY/MM/DD",
          defaultDate: sd,
          minDate:'#startDate',

        });


        $('#endDate').datetimepicker({
          pickTime: false,
          format: "YYYY/MM/DD",
          defaultDate: '#startDate',
          minDate: '#startDate',
        });

        //passing 1.jquery form object, 2.start date dom Id, 3.end date dom Id
        bindDateRangeValidation($("#form"), 'startDate', 'endDate');
    });
    </script>


</head>
<!-- BEGIN HEAD -->
<body >
  <?php
  //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING|E_ALL));
  include"share/menu.php";
  ?>
<hr>
  <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="job-overview__body">
                      <div class="job-overview__body-figure">
                        <iframe  src="kalender.php?id=<?php echo $_GET['id']?>" width="100%" height="615px" scrolling="no" frameborder="0"></iframe>

                      </div>

                  </div>
              </div>
              <div class="col-lg-4">
                <?php
                $harga_sewa=0;
                $id=$_GET['id'];
                include 'share/db.php';
              $perintah="select * from mobil Left join rental on rental.id_rental=mobil.id_rental where  no_pol='$id'";
                $query = mysqli_query($con,$perintah);
                while($data = mysqli_fetch_array($query)){
                $harga_sewa=$data['harga_sewa'];

                ?>
                  <div class="job-overview__company">
                      <a href="detail_mobil.php?id=<?php echo $data['no_pol'];?>" class="job-overview__company-name">
                      <img src="mobil/<?php echo $data['foto_samping'];?>" alt="" class="job-overview__company-logo">
                      <div class="job-overview__company-info">
                        <?php echo $data['merek'];?>
                          <!-- <a href="#" class="job-overview__company-name"><?php echo $data['jenis'];?></a> -->
                      </a>
                      </div>
                  </div>

                  <div class="job-overview__details">
                      <ul class="job-overview__details-body list-unstyled">
                      <form action="ketersediaan.php?id=<?php echo $data['no_pol'];?>" method="GET">
                          <li class="job-overview__details-body-item">
                              <span class="icon iconfont-calendar-solid job-overview__details-body-item-icon"></span>
                              <span class="job-overview__details-body-item-type">Mulai:</span>
                              <input  class="form-control" hidden required  name="id" value="<?php echo $data['no_pol'];?>" type="text" class="form-control" />
                              <input  class="form-control" required id="startDate" <?php if(isset($_GET['start'])){echo "value='".$_GET['start']."'";}?>required name="start" type="text" class="form-control" />

                          </li>
                          <li class="job-overview__details-body-item">
                              <span class="icon iconfont-map-point job-overview__details-body-item-icon"></span>
                              <span class="job-overview__details-body-item-type">Sampai:</span>
                              <input class="form-control" required id="endDate" <?php if(isset($_GET['end'])){echo "value='".$_GET['end']."'";}?> required name="end" type="text" class="form-control" />
                          </li>

                          <li class="job-overview__details-body-item">

                              <button type="submit" name="cek" value='1' class="btn btn-warning btn-xm">Cek</button>

                          </li>
                      </form>
                      <?php }?>
                          <?php if(isset($_GET["cek"])& $_GET["cek"]=1){  ?>
                            <?php
                            $start=$_GET['start'];

                            $start = explode('/',$start);
                            $start1=$start[0]."-".$start[1]."-".$start[2];
                            $end=$_GET['end'];

                            $end= explode('/',$end);
                            $end1=$end[0]."-".$end[1]."-".$end[2];
                            $id=$_GET['id'];
                            $i=0;
                            $cek="select * from pesan where (month(tanggal_mulai)='$start[1]' or month(tanggal_mulai)='$end[1]' or year(tanggal_mulai)='$end[0]' or year(tanggal_selesai)='$end[0]') and  no_pol='$id'";
                            $query1 = mysqli_query($con,$cek);
                            $query2 = mysqli_query($con,$cek);
                            $rows = mysqli_num_rows($query1);
                            $semua;
                            while($data1 = mysqli_fetch_array($query1)){

                            for($data1['tanggal_mulai'];$data1['tanggal_mulai']<=$data1['tanggal_selesai'];){
                              $i++;
                            $semua[$i]=$data1['tanggal_mulai']; //print tanggal
                            $data1['tanggal_mulai'] = date('Y-m-d', strtotime('+1 days', strtotime($data1['tanggal_mulai']))); //operasi penjumlahan tanggal sebanyak 6 hari


                          }

                            }
                            //print_r($semua);
                            $a=0;
                            $start2=$start1;
                            for($start2;$start2<=$end1;){
                            $hasil=array_search($start2, $semua);
                              $start2= date('Y-m-d', strtotime('+1 days', strtotime($start2)));
                              if($hasil!=0){
                              $a++;
                              }
                            }
                           $a;
                            if($a==0){

                              $date1=date_create($start1);
                               $date2=date_create($end1);
                              if($date2<$date1){
                                echo "<script>alert('Maaf Tanggal Salah')</script>";
                               echo '<script type="text/javascript">window.location = "ketersediaan.php?id='.$id.'"</script>';


                              }
                              $perbedaan=date_diff($date1,$date2);
                              $perbedaan=$perbedaan->format("%R%a");
                              $perbedaan++;
                            ?>

                            <li class="job-overview__details-body-item">
                                <span class="icon iconfont-calendar-solid job-overview__details-body-item-icon"></span>
                                <span class="job-overview__details-body-item-type">Jumlah Hari:</span>
                                <span class="job-overview__details-body-item-type"><?php echo $perbedaan;?> / Hari</span>

                            </li>
                            <li class="job-overview__details-body-item">
                                <span class="icon iconfont-calendar-solid job-overview__details-body-item-icon"></span>
                                <span class="job-overview__details-body-item-type">Harga/Hari:</span>
                                <span class="job-overview__details-body-item-type">Rp.<?php echo $harga_sewa;?></span>

                            </li>
                            <li class="job-overview__details-body-item">
                                <span class="icon iconfont-map-point job-overview__details-body-item-icon"></span>
                                <span class="job-overview__details-body-item-type">Total Harga:</span>
                                <span class="job-overview__details-body-item-type">Rp.<?php echo $harga_sewa*$perbedaan;?></span>

                            </li>

                    <?php
                      if(isset($_SESSION['costumer'])){
                    ?>
                          <center>
                            <a href="proses/pesan.php?id=<?php echo $id;?>&start=<?php echo $start1;?>&end=<?php echo $end1;?>&harga=<?php echo $harga_sewa;?>">
                              <button type="submit" class="btn btn-success btn-lg">Pesan</button>
                            </a>
                          </center>
                    <?php
                      }else{
                    ?>
                    <div class="alert alert-warning" role="alert">
                        <strong>Warning!</strong> Silahkan Login Dahulu
                    </div>
                    <?php
                      }
                    ?>

                        <?php
                          }else{
                          echo "<script>alert('Mobil Sudah Dipesan Pada Tanggal Tersebut')</script>";
                          echo "<script>window.location ='ketersediaan.php?id=$id'</script>";
                        }?>
                        <?php }?>

                      </ul>
                  </div>
              </div>
          </div>
      </div>





















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

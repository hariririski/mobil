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
    <!-- END THEME STYLES -->
	<link href='vendors/fullcalendar.min.css' rel='stylesheet' />
	<link href='vendors/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='vendors/lib/moment.min.js'></script>
	<script src='vendors/lib/jquery.min.js'></script>
	<script src='vendors/fullcalendar.min.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>

    <script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listMonth'
      },
      defaultDate: '<?php echo date("Y-m-d")?>',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      events: [

        <?php
        $id=$_GET['id'];
        include 'share/db.php';
        $sql="select * from pesan where no_pol='$id' and tanggal_mulai>='".date('Y-m-d')."'";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
          $tanggal_selesai=date('Y-m-d', strtotime('+1 days', strtotime($data['tanggal_selesai'])));
        ?>
        {

          start: '<?php echo $data['tanggal_mulai']?>',
          end: '<?php echo $tanggal_selesai?>',
          overlap: true,
          rendering: 'background',
          color: '#ff0000'
        },
        <?php } ?>
        {

        }
      ]
    });

  });

</script>
<style>



  #calendar {
    max-width: 900px;
    margin: 0 auto;
    padding: 30px;
  }

</style>


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
      maxDate: ed
    });

    $('#endDate').datetimepicker({
      pickTime: false,
      format: "YYYY/MM/DD",
      defaultDate: ed,
      minDate: sd
    });

    //passing 1.jquery form object, 2.start date dom Id, 3.end date dom Id
    bindDateRangeValidation($("#form"), 'startDate', 'endDate');
});
</script>

</head>
<!-- BEGIN HEAD -->
<body >
  <?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING|E_ALL));
  include"share/menu.php";?>
  <div class="apartment__full-description">
    <div class="container">
        <p>
        Jadwal Ketersediaan Mobil</p>

    </div>
</div>
<div class="container">
<div class="row">
<br>
<br>
   <div id='calendar'></div>
<div class="row ">
<div class="container">
  <br>
  <?php
  $harga_sewa=0;
  $query = mysqli_query($con,"select * from mobil where no_pol='$id'");
  while($data = mysqli_fetch_array($query)){
  $harga_sewa=$data['harga_sewa'];

  ?>

    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="listing-travel-trips__item">
            <div class="listing-travel-trips__item-image" >
                <center><img height="160px"  width="255px" src="mobil/<?php echo $data['foto_samping'];?>" alt="" ></center>
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


                </div>
            </div>
        </div>
    </div>
 <?php } ?>

  <form id="form" action="proses_pesan.php"name="form" class="form-inline">

          <div class="col-lg-5">
            <div class="col-lg-6">
                <label for="startDate"><h4>Tanggal Mulai</h4></label>
            </div>
            <div class="col-lg-6">
                <input  class="form-control"id="startDate" name="startDate" type="text" class="form-control" />
            </div>
          </div>
          <div class="col-lg-5">
            <div class="col-lg-4">
                <label for="endDate"><h4>Sampai </h4></label>
            </div>
            <div class="col-lg-6">
                <input class="form-control" id="endDate" name="endDate" type="text" class="form-control" />
            </div>
          </div>
          <div class="col-lg-2">
          <button type="submit" class="btn btn-warning btn-lg">Cek</button>
          </div>

  </form>

  <br>
  <br>
  <br>
  <div id="form" action="proses_pesan.php"name="form" class="form-inline">
          <div class="col-lg-5">
            <div class="col-lg-6">
                <label for="startDate"><h4>Jumlah Hari</h4></label>
            </div>
            <div class="col-lg-6">
                <input  class="form-control" readonly name="startDate" type="text" class="form-control" />
            </div>
          </div>
          <div class="col-lg-5">
            <div class="col-lg-4">
                <label for="endDate"><h4>Harga </h4></label>
            </div>
            <div class="col-lg-6">
                <input class="form-control" readonly value="<?php echo $harga_sewa;?>" name="endDate" type="text" class="form-control" />
            </div>
          </div>
          <div class="col-lg-5">
            <div class="col-lg-6">
                <label for="endDate"><h4> Total Harga </h4></label>
            </div>
            <div class="col-lg-6">
                <input class="form-control" readonly name="endDate" type="text" class="form-control" />
            </div>
          </div>

  </div>
  <br>
  <br>
  <center>
    <button type="submit" class="btn btn-success btn-lg">Pesan</button>
    <button type="submit" class="btn btn-warning btn-lg">Batal</button>
  </center>
  <br>
  <br>
  <br>
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

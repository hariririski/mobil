
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Data Pemesanan Mobil</title>

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
    <!-- DataTables CSS -->
       <link href="data/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

       <!-- DataTables Responsive CSS -->
       <link href="data/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

       <link href="data/dist/css/sb-admin-2.css" rel="stylesheet">
       <link href="data/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
      <link href="data/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
if((empty($_SESSION['rental']))){
  echo '<script type="text/javascript">window.location = "index.php"</script>';
}
?>
  <div class="choose-us-default">
    <div class="container">
        <h4 >Data Pemesanan Mobil</h4>
    </div>
</div>


<div class="container">
  <div class="col-lg-12">
              <!-- <div class="col-lg-12">
                  <h1 class="page-header">Tables</h1>
              </div> -->
              <!-- /.col-lg-12 -->
              <br>
          </div>
          <!-- /.row -->
          <div class="col-lg-12">
              <div class="col-lg-12">
                <form action="mpdf/laporan.php" method="GET">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="post-job__email">Dari Tanggal</label>
                            <input type="date" name="dari" class="form-control" required >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="post-job__email">Sampai Tanggal</label>
                            <input type="date" name="sampai" class="form-control" required >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="post-job__email">&nbsp</label><br>
                          <button type="submit"  class="btn btn-info btn-md ">Cetak Report Pdf</button>
                        </div>
                    </div>
                </div>
              </form>
                  <div class="card card-outline-primary mb-3">
                      <div class="card-header bg-primary">
                          Data Pesanan Mobil
                      </div>
                      <!-- /.panel-heading -->

                      <!-- /.panel-heading -->
                      <?php
                      include 'share/db.php';
                      $i=0;
                      $id_rental;
                      $id=$_SESSION['rental'];
                      $query1 = mysqli_query($con,"select * from rental where username='$id'");
                      while($data1 = mysqli_fetch_array($query1)){
                        $id_rental= $data1['id_rental'];
                      }
                      ?>
                    <div class="card-block">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>NO</th>
                                      <th>No Pol</th>
                                      <th>Merek</th>
                                      <th>Tipe</th>
                                      <th>Tanggal Mulai</th>
                                      <th>Tanggal Selesai</th>
                                      <th>Status</th>
                                      <th>Detail</th>
                                      <th>Cetak</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php

                                $query = mysqli_query($con,"select * from pesan left join mobil on pesan.no_pol=mobil.no_pol left join rental on rental.id_rental=mobil.id_rental where rental.id_rental='$id_rental' ");
                                while($data = mysqli_fetch_array($query)){
                                  $i++;

                                ?>

                                  <tr class="odd gradeX">
                                      <td class="center"><?php echo $i;?></td>
                                      <td><?php echo $data['no_pol'];?></td>
                                      <td><?php echo $data['merek'];?></td>
                                      <td><?php echo $data['tipe'];?></td>
                                      <td><?php echo $data['tanggal_mulai'];?></td>
                                      <td><?php echo $data['tanggal_selesai'];?></td>
                                      <?php if ($data['verifikasi_pembayaran']==1 ) {
                                      ?>
                                      <td><span class="badge badge-pill badge-warning badge-sm">Proses</span></td>
                                      <?php }else if ($data['verifikasi_pembayaran']==2){ ?>
                                      <td><span class="badge badge-pill badge-success badge-sm">Selesai</span></td>
                                    <?php }else if ($data['verifikasi_pembayaran']==3 ){ ?>
                                      <td><span class="badge badge-pill badge-danger badge-sm">Batal</span></td>
                                    <?php }else{?>
                                      <td><span class="badge badge-pill badge-info badge-sm">Belum</span></td>
                                    <?php }?>
                                      <td class="center"><a href="invoice_admin.php?id=<?php echo $data['invoice'];?>"><button type="button" class="btn btn-info btn-xs">Detail</button></a></td>
                                      <?php if ($data['verifikasi_pembayaran']==2) {
                                      ?>
                                      <td class="center"><a href="mpdf/ktp.php?id=<?php echo $data['invoice'];?>&&id2=<?php echo $data['id_costumer'];?>"><button type="button" class="btn btn-success btn-xs">Cetak</button></a></td>
                                      <?php }else{ ?>
                                        <td class="center"><button type="button" disabled class="btn btn-warning btn-xs">Cetak</button></td>
                                      <?php } ?>
                                  </tr>
                                  <?php  }?>

                              </tbody>
                          </table>
                          <!-- /.table-responsive -->

                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
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
<script src="js/post-job.js"></script>
<script src="data/vendor/jquery/jquery.min.js"></script>



    <!-- Metis Menu Plugin JavaScript -->
    <script src="data/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="data/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="data/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="data/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="data/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>
</html>

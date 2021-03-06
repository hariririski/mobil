<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Verifikasi</title>

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
if((empty($_SESSION['login']))){
  echo '<script type="text/javascript">window.location = "index.php"</script>';
}
?>

  <div class="choose-us-default">
    <div class="container">
        <h4 >Data Rental</h4>
    </div>
</div>


<div class="container">
<br>
<div class="col-lg-12">
    <div class="col-lg-12">
        <div class="card card-outline-warning mb-3">
            <div class="card-header bg-warning">
                Data Rental Belum Verifikasi
            </div>
            <!-- /.panel-heading -->
            <div class="card-block">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Rental</th>
                            <th>Alamat</th>
                            <th>Pemilik</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      include 'share/db.php';
                      $i=0;
                      $query = mysqli_query($con,"select * from rental where status='0' ");
                      while($data = mysqli_fetch_array($query)){
                        $i++;

                      ?>

                        <tr class="odd gradeX">
                            <td class="center"><?php echo $i;?></td>
                            <td><?php echo $data['nama_rental'];?></td>
                            <td><?php echo $data['alamat'];?></td>
                            <td><?php echo $data['nama_pemilik'];?></td>
                            <td class="center"><a href="detail_rental.php?id=<?php echo $data['id_rental'];?>&&status=<?php echo $data['status'];?>"><button type="button" class="btn btn-warning btn-xs">Detail</button></td>
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

    <!-- Bootstrap Core JavaScript -->


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
        $('#dataTables-example2').DataTable({
            responsive: true
        });
    });
    </script>

</body>
</html>

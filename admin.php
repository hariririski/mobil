<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Login</title>

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
    <script>
        html,
      body {
      overflow:hidden
      }
    </script>
</head>
<!-- BEGIN HEAD -->
<body class="">



<?php include"share/menu.php"?>
<div class="page-auth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">



                <div class="row justify-content-center">
                    <div class="col-lg-8">


                        <div class="tab-content">
                            <div class="tab-pane active" id="page-auth__candiate-tab" role="tabpanel">
                                <form action="proses/proses_login.php" method="post" class="page-auth__form form-controls-flat">
                                        <center><h3 >Login</h3></center>

                                    <div class="form-group">
                                        <label for="employee-username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Username
                                        </label>
                                        <input type="text" class="form-control" name="username" id="employee-username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-email" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-lock color-primary"></span> Password
                                        </label>
                                        <input type="password" class="form-control" name="password" id="employee-email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-primary btn-md btn-block">Masuk</button>
                                            </div>
                                        </div>

                                          Belum Mempunyai Akun? <a href="daftar_rental.php">Daftar Sebagai Rental</a>
                                        Atau <a href="daftar_penyewa.php"> Penyewa</a>
                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>

    </div>
</div>
<?php //include"share/footer.php";?>

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


</body>
</html>

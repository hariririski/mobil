<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Kontak</title>

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



<link rel="stylesheet" type="text/css" href="vendors/leaflet/leaflet.css">


    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">



<?php include"share/menu.php";?>
<div id="page-contact-map" class="page-contact__map"></div>
<div class="container">
    <form class="page-contact__form">
        <h2 class="page-contact__form-heading">Hubungi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <h4 >No Hp :</h4>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                  0852-0987-0123
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <h4 >Email :</h4>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    sirenbil@gmail.com
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <h4 >Alamat :</h4>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                  JL. Sri Ratu Safiatuddin No.1 Simpang Lima, Banda Aceh, Peunayong, Kuta Alam, Banda Aceh City, Aceh 13430
                </div>
            </div>

        </div>

    </form>
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

<script src="vendors/leaflet/leaflet.js"></script>
<script src="vendors/leaflet/leaflet-html-icon.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.3&sensor=false"></script>
<script src="http://matchingnotes.com/javascripts/leaflet-google.js"></script>
<script src="js/contact.js"></script>
</body>
</html>

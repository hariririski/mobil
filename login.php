<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>DirectoryHub - Multipurpose Directory &amp; Listings HTML Template</title>

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
</head>
<!-- BEGIN HEAD -->
<body class="">



<?php include"share/menu.php"?>
<div class="page-auth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="page-auth__heading">Login</h1>


                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <ul class="nav nav-tabs page-auth__tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#page-auth__candiate-tab" role="tab">
                                    <span class="icon iconfont-user"></span> Rental
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page-auth__employeer-tab" role="tab">
                                    <span class="icon iconfont-bag"></span> Admin
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="page-auth__candiate-tab" role="tabpanel">
                                <form action="#" class="page-auth__form form-controls-flat">
                                    <h5 class="page-auth__form-heading">Rental Mobil</h5>

                                    <div class="form-group">
                                        <label for="username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Username
                                        </label>
                                        <input type="text" class="form-control" id="username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-envelope color-primary"></span> E-mail
                                        </label>
                                        <input type="email" class="form-control" id="email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone-number" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="captcha">Type code below</label>
                                                <input type="text" class="form-control" id="captcha" placeholder="">
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="images/misc/captcha.png" alt="" width="112" height="42" class="page-auth__form-captcha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Create account</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group page-auth__form-extras">
                                        Already have an account? <a href="#">Login Now</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="page-auth__employeer-tab" role="tabpanel">
                                <form action="#" class="page-auth__form form-controls-flat">
                                    <h5 class="page-auth__form-heading">Admin</h5>

                                    <div class="form-group">
                                        <label for="employee-username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Username
                                        </label>
                                        <input type="text" class="form-control" id="employee-username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-email" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-envelope color-primary"></span> E-mail
                                        </label>
                                        <input type="email" class="form-control" id="employee-email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="company-name">Company Name</label>
                                        <input type="text" class="form-control" id="company-name" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-phone-number">Phone Number</label>
                                        <input type="text" class="form-control" id="employee-phone-number" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="employee-captcha">Type code below</label>
                                                <input type="text" class="form-control" id="employee-captcha" placeholder="">
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="images/misc/captcha.png" alt="" width="112" height="42" class="page-auth__form-captcha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Create account</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group page-auth__form-extras">
                                        Already have an account? <a href="#">Login Now</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="social-auth page-auth--social-auth">
                            <h5 class="social-auth__heading">Signup / Sign in with</h5>

                            <div class="social-auth__links">
                                <a href="#">
                                    <img src="images/social/google-plus-lg.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="images/social/twitter-lg.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="images/social/facebook-lg.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="images/social/linkedin-lg.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


</body>
</html>

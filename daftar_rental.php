<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Daftar Rental Mobil</title>

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
</head>
<!-- BEGIN HEAD -->
<body class="">



<?php include"share/menu.php";?>
<form action="proses/daftar.php" method="post" enctype="multipart/form-data" class="post-job">
    <div class="container">
        <h3 class="post-job__heading">Gabung Bersama Kami</h3>

        <div class="row">
            <div class="col-lg-9">
                <p class="post-job__description">Posting Mobil Rental Kamu, Gratis!</p>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nama Rental Mobil</label>
                                    <input type="text" name="nama_rental"  class="form-control" placeholder="Nama Rental Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__description" class="d-flex justify-content-between">Alamat Rental Anda<span class="icon iconfont-help-outline"></span></label>
                                    <textarea id="post-job__description" name="alamat" class="form-control" placeholder="Alamat Rental Anda" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nomor Hp Rental Mobil</label>
                                    <input type="number"  name="no_hp_rental" class="form-control" placeholder="No Hp Rental Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">No KTP Pemilik Rental</label>
                                    <input type="number" name="nik"  name="nik"class="form-control" placeholder="NIK">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nama Pemilik Rental</label>
                                    <input type="text" name="nama_pemilik_rental"  name="nama_pemilik"class="form-control" placeholder="Nama Pemilik Rental Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">No Hp Pemilik Rental</label>
                                    <input type="number" name="no_hp_pemilik"  class="form-control" placeholder="Nomor Hp Pemilik Rental">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Nama Pemilik Rekening </label>
                                    <input type="text"  name="pemilik_rekening"  class="form-control" placeholder="Nama Pemilik Rekening">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Bank</label>
                                    <input type="text"  name="bank"  class="form-control" placeholder="Bank">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">No Rekening</label>
                                    <input type="number" name="rekening"  class="form-control" placeholder="No Rekening">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Username</label>
                                    <input type="text" name="username"  class="form-control" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="post-job__email">Password</label>
                                    <input type="password" name="password"  class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                    <label for="post-job__email">Foto Rental</label>
                                    <input type="file" name="foto_rental"  class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <button class="btn btn-primary btn-block post-job__submit-button">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <p class="post-job__useful-tips-heading">Tata Cara Mendaftar</p>

                <ul class="list-unstyled post-job__useful-tips-items">
                    <li class="post-job__useful-tip">
                        <span class="point">1.</span> Isikan Data Dengan Benar
                    </li>
                    <li class="post-job__useful-tip">
                        <span class="point">2.</span> Upload Data Yang Diperlukan, Seperti Foto Rental Mobil dan Selelah Data Lengkap Klik Daftar
                    </li>
                    <li class="post-job__useful-tip">
                        <span class="point">3.</span> Admin Akan Menverifikasi Akun Anda
                    </li>
                    <li class="post-job__useful-tip">
                        <span class="point">4.</span> Apabilan Data Yang Diberikan Benar, Akun Akan Di Aktifkan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</form>
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

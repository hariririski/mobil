<?php
session_start(); // Memulai Session
?>
<?php
if(isset($_SESSION['rental'])){
?><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php
}
?>
<div class="header-default">
    <div class="header-topbar">
        <div class="container">
            <div class="header-topbar__contact-info">
                <div class="header-topbar__contact-info-item">
                    <span class="title">No HP/WA:</span>
                    <span class="value">0852-0987-0123</span>
                </div>
                <div class="header-topbar__contact-info-item">
                    <span class="title">Email: </span>
                    <span class="value">sirenbil@gmail.com</span>
                </div>
            </div>

        </div>
    </div>
    <div id="header-menu" class="header-default__menu">
        <div class="container">
            <nav class="navbar navbar-toggleable-lg">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#header-default-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Si<span class="colored">Renbil</span></a>
                <div id="header-default-menu" class="collapse navbar-collapse">
                    <div class="header-default__menu-collapse">
                        <ul class="nav navbar-nav">
                          <?php
                          if(isset($_SESSION['login'])==0&&isset($_SESSION['rental'])==0){

                          ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link "  href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                </div>
                            </li>

                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link "  href="rental.php?cari=semua" role="button" aria-haspopup="true" aria-expanded="false">Rental Mobil</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                    </div>
                                </li> -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link "  href="cari_mobil.php?cari=semua" role="button" aria-haspopup="true" aria-expanded="false">Cari Mobil</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link "  href="banding_mobil.php" role="button" aria-haspopup="true" aria-expanded="false">Bandingkan Mobil</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link "  href="kontak.php" role="button" aria-haspopup="true" aria-expanded="false">Kontak</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                    </div>
                                </li>
                  <?php
                }
                  ?>
                  <?php
                  if(isset($_SESSION['costumer'])){
                  ?>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                        <a class="dropdown-item" href="profil.php">Profile</a>
                                        <a class="dropdown-item" href="data_pesanan.php">Data Pesanan</a>
                                        <a class="dropdown-item" href="ubah_password.php">Ubah Password</a>


                                    </div>
                                </li>

                  <?php
                }
                  ?>
              <?php
              if((isset($_SESSION['login']))||(isset($_SESSION['rental']))){
              ?>
              <?php
              if(isset($_SESSION['rental'])){
              ?>
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link "   href="profil.php"role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div> -->
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link "  href="data_mobil.php" role="button" aria-haspopup="true" aria-expanded="false">Data Mobil</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link "  href="pesanan_mobil.php" role="button" aria-haspopup="true" aria-expanded="false">Pemesanan Mobil</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link "  href="tambah_mobil.php" role="button" aria-haspopup="true" aria-expanded="false">Tambah Mobil</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div>
              </li>
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link "  href="ubah_password.php" role="button" aria-haspopup="true" aria-expanded="false">Perbaharui Password</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div> -->
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                      <a class="dropdown-item" href="profil.php">Profile</a>
                      <a class="dropdown-item" href="ubah_password.php">Ubah Password</a>


                  </div>
              </li>
              <?php } ?>
              <?php
              if(isset($_SESSION['login'])){
              ?>
              <li class="nav-item dropdown">
                  <a class="nav-link "  href="a_data_rental.php" role="button" aria-haspopup="true" aria-expanded="false">Data Rental Mobil</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link "  href="a_verifikasi_rental.php" role="button" aria-haspopup="true" aria-expanded="false">Verifikasi Rental Mobil</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link "  href="a_verifikasi_costumer.php" role="button" aria-haspopup="true" aria-expanded="false">Verifikasi Costumer</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link "  href="a_user.php" role="button" aria-haspopup="true" aria-expanded="false">User</a>
                  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
              </div>
              </li>

              <?php } ?>
              <?php } ?>



                </ul>
                <?php
                if(isset($_SESSION['rental'])){
                ?>

                <div class="header-default__dropdowns">
                  <font color="red"><h6 class="count"></h6></font>
                        <div class="nav-item dropdown header-default__langs">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                                <span><img src="data/notif.png" width="50%"alt="">  </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut" style="">
                                <div class="header-default__langs-block">
                                    <h6 class="header-default__langs-heading">Rental Mobil Terbaru</h6>

                                    <div class="header-default__langs-lists">
                                        <ul class="list-unstyled">

                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                        <?php
                      }
                        ?>




                <?php
                if((isset($_SESSION['login']))||(isset($_SESSION['rental']))||(isset($_SESSION['costumer']))){
                ?>
                        <div class="header-default__menu-links">
                            <a href="proses/logout.php" class="btn btn-outline-primary">
                                <span class="text">Logout</span>
                            </a>
                        </div>
                <?php
                }else{
                ?>
                        <div class="header-default__menu-links">
                            <a href="login.php" class="btn btn-outline-primary">
                                <span class="text">Login</span>
                            </a>
                        </div>

                <?php
                }
                ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<?php
if(isset($_SESSION['rental'])){
?>
<script>
$(document).ready(function(){

 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"share/fetch.php?id_rental=<?php if(isset($_SESSION['id_rental'])){echo $_SESSION['id_rental'];}?>",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.list-unstyled').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }

 load_unseen_notification();



 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });

 setInterval(function(){
  load_unseen_notification();;
 }, 5000);

});
</script>
<?php
}
?>

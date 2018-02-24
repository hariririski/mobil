<?php
session_start(); // Memulai Session
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

                            <li class="nav-item dropdown">
                                <a class="nav-link "  href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                </div>

                                <li class="nav-item dropdown">
                                    <a class="nav-link "  href="rental.php" role="button" aria-haspopup="true" aria-expanded="false">Rental Mobil</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link "  href="cari_mobil.php" role="button" aria-haspopup="true" aria-expanded="false">Cari Mobil</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                </div>

                                <li class="nav-item dropdown">
                                    <a class="nav-link "  href="banding_mobil.php" role="button" aria-haspopup="true" aria-expanded="false">Bandingkan Mobil</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                    </div>

                                <li class="nav-item dropdown">
                                    <a class="nav-link "  href="kontak.php" role="button" aria-haspopup="true" aria-expanded="false">Kontak</a>
                                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">

                                    </div>

              <?php
              if((isset($_SESSION['login']))||(isset($_SESSION['rental']))){
              ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                  <?php
                                  if(isset($_SESSION['rental'])){
                                  ?>
                                    <a class="dropdown-item" href="profil.php?id=<?php echo $_SESSION['rental']?>">Profile</a>
                                    <a class="dropdown-item" href="blog.html">Data Mobil</a>
                                    <a class="dropdown-item" href="blog.html">Tambah Mobil</a>
                                    <a class="dropdown-item" href="blog.html">Ubah Password</a>
                                  <?php } ?>
                                  <?php
                                  if(isset($_SESSION['login'])){
                                  ?>
                                    <a class="dropdown-item" href="blog.html">Data Rental Mobil</a>
                                    <a class="dropdown-item" href="blog-post.html">User</a>

                                  <?php } ?>
                                </div>
                            </li>

              <?php
            }
              ?>
                </ul>

                <?php
                if((isset($_SESSION['login']))||(isset($_SESSION['rental']))){
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

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style.css">
<style>
.slide:nth-child(1) .slide__bg {
  left: 0;
  background-image: url("2.jpg");
}
.slide:nth-child(2) .slide__bg {
  left: -50%;
  background-image: url("1.jpg");
}
.slide__text {
  position: absolute;
  width: 25%;
  bottom: 15%;
  left: 4%;
  color:#000;
  transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  will-change: transform, opacity;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  opacity: 0;
}

</style>

</head>

<body>

  <div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
    <div class="slide slide-0 active">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 0,0 250,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-desc">Selamat Datang di SIRENBIL</h2>
          <p class="slide__text-desc">SIRENBIL adalah perusahaan yang bergerak dibidang jasa Rental atau Penyewaan mobil. Disini kami menyediakan kendaraan  personal dengan kualitas terbaik.</p>

        </div>
      </div>
    </div>
    <div class="slide slide-1 ">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 0,0 250,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading"></h2>
          <p class="slide__text-desc">Melayani Rental Harian, Mingguan dan Bulanan</p>

        </div>
      </div>
    </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>

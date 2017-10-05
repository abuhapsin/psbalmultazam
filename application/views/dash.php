<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>New Age - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/simple-line-icons/css/simple-line-icons.css");?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/timeline.css");?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link href="<?php echo base_url("assets/device-mockups/device-mockups.min.css");?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url("assets/css/new-age.css");?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url("assets/img/badge-psb.svg");?>" width="50%" alt=""></a>
      <button class="navbar-toggler navbar-toggler-right" stype="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#daftar">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#procedure">Prosedur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead">
    <section id="login">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-6 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5 twhite">Saatnya menjadi pribadi yang lebih baik bersama <strong> Al-Multazam </strong> </h1>
              <a href="#daftar" class="btn btn-outline btn-xl js-scroll-trigger">Daftar Sekarang</a>
            </div>

          </div>
          <div class="col-lg-6 my-auto">
            <div class="device-container">
              <div class="card" style="width: 25rem;">

                <div class="card-body">
                  <img src="<?php echo base_url("assets/img/almultazam-psb.svg");?>" width="100%" alt="">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Login Bermasalah!</strong> Perikasa nama pengguna dan kata sandi anda
                  </div>
                  <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pengguna">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Katasandi">
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-xl js-scroll-trigger">Masuk</button>
                    <button type="button" class="btn btn-outline-warning btn-xl js-scroll-trigger">Bantuan</button>
                  </form>
                </div>

              </div>
              <span class="twhite">In Association with  </span> <a class="badge-link" href="#"><img src="<?php echo base_url("assets/img/logo-nizam.svg");?>" width="100rm" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>
  <section class="" id="daftar">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Daftar Sekarang !</h2>
          <p>Saatnya menjadi pribadi yang lebih baik bersama Al-multazam </p>
          <form>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="col-form-label">NISN</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                <a href="http://nisn.data.kemdikbud.go.id/page/data" class="badge badge-success"><i class="icon-link"></i> Cari NISN</a>
              </div>
              <div class="form-group col-md-8">
                <label for="inputPassword4" class="col-form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                <small id="namaHelp" name="nama_lengkap" class="form-text text-muted">Isi sesuai Akte Kelahiran & KK </small>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
               <label for="inputPassword4" class="col-form-label">Jenis Kelamin</label>
               <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-outline-dark">
                  <input type="radio" name="jk" id="jk" autocomplete="off" checked> Laki - laki
                </label>
                <label class="btn btn-outline-dark">
                  <input type="radio" name="jk" id="jk" autocomplete="off"> Perempuan
                </label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2" class="col-form-label">Tempat Lahir</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Tempat Lahir">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputAddress2" class="col-form-label">Tanggal Lahir</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
            </div>
            <div class="form-group col-md-4">
              <label for="inputAddress2" class="col-form-label">No Telepon</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="No Telepon">
            </div>
            <div class="form-group col-md-4">
              <label for="inputAddress2" class="col-form-label">Email</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Email">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="inputAddress2" class="col-form-label">Alamat</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Alamat">
            </div>
            <div class="form-group col-md-2">
              <label for="inputAddress2" class="col-form-label">Rt</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Rt">
            </div>
            <div class="form-group col-md-2">
              <label for="inputAddress2" class="col-form-label">Rw</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Rw">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress2" class="col-form-label">Ayah</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Nama Ayah">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress2" class="col-form-label">Ibu</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Nama Ibu">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword4" class="col-form-label">Jenjang Pendidikan di Al-Multazam</label>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-outline-dark">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked>SMPIT
                </label>
                <label class="btn btn-outline-dark">
                  <input type="radio" name="options" id="option3" autocomplete="off">SMAIT
                </label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputState" class="col-form-label">Sumber Informasi</label>
              <select id="inputState" class="form-control">
                <option>Keluarga</option>
                <option>Saudara</option>
                <option>Teman</option>
                <option>Sekolah</option>
                <option>Brosur</option>
                <option>Internet</option>
                <option>Iklan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
          </div>
          <button type="submit" class="btn btn-outline-success btn-xl">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="cta timeline"  id="procedure">
      <div class="cta-content">
        <div class="container">
           <h1 class="twhite">Prosedur Pendaftaran</h1>
    <p class="leader twhite">Alur Pendaftaran Santri Baru Al-Multazam</p>
    <div class="demo-card-wrapper">
      <div class="demo-card demo-left">
        <div class="head">
          <div class="number-box">
            <span>01</span>
          </div>
          <h2><span class="small">Subtitle</span> Technology</h2>
        </div>
        <div class="body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.
            <img src="<?php echo base_url("assets/img/registering.png");?>" width="256px"/>
          </div>
        </p>

      </div>


      <div class="demo-card demo-right">
        <div class="head">
          <div class="number-box">
            <span>02</span>
          </div>
          <h2><span class="small">Subtitle</span> Confidence</h2>
        </div>
        <div class="body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.
            <img src="<?php echo base_url("assets/img/emailsmsnotif.png");?>" width="256px"/>
          </p>
        </div>
      </div>

      <div class="demo-card demo-left">
        <div class="head">
          <div class="number-box">
            <span>03</span>
          </div>
          <h2><span class="small">Subtitle</span> Adaptation</h2>
        </div>
        <div class="body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.
            <img src="<?php echo base_url("assets/img/formdata.png");?>" width="256px"/>
          </p>
        </div>
      </div>

      <div class="demo-card demo-card--step4">
        <div class="head">
          <div class="number-box">
            <span>04</span>
          </div>
          <h2><span class="small">Subtitle</span> Consistency</h2>
        </div>
        <div class="body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
          <img src="http://placehold.it/1000x500" alt="Graphic">
        </div>
      </div>

      <div class="demo-card demo-card--step5">
        <div class="head">
          <div class="number-box">
            <span>05</span>
          </div>
          <h2><span class="small">Subtitle</span> Conversion</h2>
        </div>
        <div class="body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
          <img src="http://placehold.it/1000x500" alt="Graphic">
        </div>
      </div>
    </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>
<!--
      <svg width="100%" height="100%" viewBox="100 100 100 100">
    <defs>
      <filter id="blur">
        <feGaussianBlur in="SourceGraphic" stdDeviation="1" />
      </filter>
    </defs>
    <image filter="url(#blur)" xlink:href="<?php //echo base_url("assets/img/DSC_2350.jpg");?>" x="0" y="0" height="300px" width="450px" />
  </svg>
<section class="features" id="features">
  <div class="container">
    <div class="section-heading text-center">
      <h2>Unlimited Features, Unlimited Fun</h2>
      <p class="text-muted">Check out what you can do with this app theme!</p>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-4 my-auto">
        <div class="device-container">
          <div class="device-mockup iphone6_plus portrait white">
            <div class="device">
              <div class="screen">
                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                <!--<img src="<?php //echo base_url("assets/img/demo-screen-1.jpg");?>" class="img-fluid" alt="">
              </div>
              <div class="button">
                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
              <!--</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 my-auto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-screen-smartphone text-primary"></i>
                <h3>Device Mockups</h3>
                <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-camera text-primary"></i>
                <h3>Flexible Use</h3>
                <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-present text-primary"></i>
                <h3>Free to Use</h3>
                <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-lock-open text-primary"></i>
                <h3>Open Source</h3>
                <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cta">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section class="cta">
  <div class="cta-content">
    <div class="container">
      <h2>Stop waiting.<br>Start building.</h2>
      <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
    </div>
  </div>
  <div class="overlay"></div>
</section>-->
<section class="contact bg-primary" id="contact">
  <div class="container">
    <h2>We
      <i class="fa fa-heart"></i>
    new friends!</h2>
    <ul class="list-inline list-social">
      <li class="list-inline-item social-twitter">
        <a href="#">
          <i class="fa fa-twitter"></i>
        </a>
      </li>
      <li class="list-inline-item social-facebook">
        <a href="#">
          <i class="fa fa-facebook"></i>
        </a>
      </li>
      <li class="list-inline-item social-google-plus">
        <a href="#">
          <i class="fa fa-google-plus"></i>
        </a>
      </li>
    </ul>
  </div>
</section>
<footer>
  <div class="container">
    <p>&copy; 2017 PSB AL-Multazam</p>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="#">Privacy</a>
      </li>
      <li class="list-inline-item">
        <a href="#">Terms</a>
      </li>
      <li class="list-inline-item">
        <a href="#">FAQ</a>
      </li>
    </ul>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js");?>"></script>
<script src="<?php echo base_url("assets/vendor/popper/popper.min.js");?>"></script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url("assets/vendor/jquery-easing/jquery.easing.min.js");?>"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url("assets/js/new-age.min.js");?>"></script>
<!--timeline-->
<script src="<?php echo base_url("assets/js/timeline.js");?>"></script>

</body>

</html>

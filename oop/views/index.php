<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Luthfi CV</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="luthficv/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!-- Libraries CSS Files -->
  <link href="luthficv/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="luthficv/lib/animate/animate.min.css" rel="stylesheet">
  <link href="luthficv/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="luthficv/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="luthficv/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="luthficv/css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <?php
  include_once '../../oop/config/Database.php';
  include_once '../../oop/models/User.php';
  include_once '../../oop/models/Sekolah.php';
  include_once '../../oop/models/Skill.php';
  // include_once '../../config/Database.php';
  // include_once '../../models/User.php';
  // include_once '../../models/Sekolah.php';
  // include_once '../../models/Skill.php';

  $database = new Database();
  $db = $database->getConnection();

  // TD_user 
  $query = new User($db);
  $query->id_user = $_GET['id_user'];
  $query->getUserId();
  // var_dump($listuser);

  // TD_sekolah
  $querysekolah = new sekolah($db);
  $querysekolah->id_user = $_GET['id_user'];
  $listsekolah = $querysekolah->getSekolahId();


  $querysekolah = new sekolah($db);
  $querysekolah->id_user = $_GET['id_user'];
  $querysekolah->getSekolahId();
  // var_dump($listsekolah);
  // $user_sekolah = ($listsekolah);

  // TD_skill
  $queryskill = new Skill($db);
  $queryskill->id_user = $_GET['id_user'];
  $listskill = $queryskill->getskillId();

  $queryskill = new Skill($db);
  $queryskill->id_user = $_GET['id_user'];
  $queryskill->getSkillId();
  // var_dump($listskill);

  ?>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">CV<?php echo $query->fullname; ?></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Insert Data CV
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="../views/user/user.php" target="_blank">Data User</a></li>
            <li><a class="dropdown-item" href="../views/sekolah/sekolah.php" target="_blank">Data Sekolah</a></li>
            <li><a class="dropdown-item" href="../views/skill/skill.php" target="_blank">Data Skill</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(luthficv/img/post-3.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4"><?php echo $query->fullname; ?></h1>
          <p class="intro-subtitle"><span class="text-slider-items"><?php echo $query->job; ?></span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="luthficv/img/luthfi.jpg" id_user="1" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span><?php echo $query->fullname; ?></span></p>
                      <p><span class="title-s">Profile: </span> <span><?php echo $query->job; ?></span></p>
                      <p><span class="title-s">Email: </span> <span><?php echo $query->email; ?></span></p>
                      <p><span class="title-s">Phone: </span> <span><?php echo $query->no_telepon; ?></span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skill</p>
                  <?php foreach ($listskill as $key => $user_skill) { ?>
                    <span><b><?php echo $user_skill['skill']; ?></b></span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="lead">Nilai = <?php echo $user_skill['nilai']; ?>&emsp; | &emsp;&emsp; | &emsp;Lembaga = <?php echo $user_skill['lembaga']; ?></p>
                  <?php } ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    Selamat datang di website CV, Saya <b><?php echo $query->fullname; ?> </b>, individu bersemangat dengan hasrat belajar dan berkembang.

                    Pendidikan saya membentuk dasar pengetahuan dari SD hingga SMA, dan sekarang saya menjelajahi berbagai bidang, dari pengembangan perangkat lunak hingga seni kreatif
                    Di sela-sela waktu, saya Sebagai <b><?php echo $query->job; ?></b>, menyeimbangkan kehidupan pribadi dan profesional. Tujuan saya di sini adalah berbagi pengalaman.
                  </p>
                  <p class="lead"><b>Saya Pernah Sekolah di</b></p>
                  <?php foreach ($listsekolah as $key => $user_sekolah) { ?>
                    <p class="lead">
                      <?php echo $user_sekolah['sekolah']; ?>&emsp; Tahun <?php echo $user_sekolah['tahun']; ?>
                    </p>
                  <?php } ?>
                  <p class="lead">
                    Terima kasih sudah berkunjung!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(luthficv/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                    <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Saya sangat antusias untuk terhubung dan berinteraksi dengan Anda. Saya berharap dapat mendengar kabar dari Anda segera!
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-telephone"></span> <?php echo $query->no_telepon; ?></li>
                      <li><span class="ion-email"></span> <?php echo $query->email; ?></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-whatsapp"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong><?php echo $query->fullname; ?></strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="luthficv/lib/jquery/jquery.min.js"></script>
  <script src="luthficv/lib/jquery/jquery-migrate.min.js"></script>
  <script src="luthficv/lib/popper/popper.min.js"></script>
  <script src="luthficv/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="luthficv/lib/easing/easing.min.js"></script>
  <script src="luthficv/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="luthficv/lib/counterup/jquery.counterup.js"></script>
  <script src="luthficv/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="luthficv/lib/lightbox/js/lightbox.min.js"></script>
  <script src="luthficv/lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="luthficv/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="luthficv/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<?php
require_once('bdd.php');


$sql = "SELECT id, title, keterangan, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OBYEK WISATA MALINO</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/jogjakublack.png">
<style>
.btn {
  background-color: gray;
  color: #FA4;
  font-size: 13px;
  font-weight: 600;
  border: 0;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  display: inline-block;
  text-transform: uppercase;
  opacity:0.8;
}
  </style>
</head>

<body>
<!-- header  -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">OBYEK WISATA MALINO</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php">Beranda</a></li>

          <li><a href="artikel.php">Wisata Alam  </a></li>
          <li><a href="artikel1.php">Wisata Buatan </a></li>
          <li><a href="artikel2.php">Wisata Kuliner </a></li>

          <li><a href="galeri.php">Galeri  </a></li>

           <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <p><a class="navbar-brand"><img src="images/wisatamalino.png" class="img-responsive" style="width: 1400px; margin-top: -130px;"></a></p>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header  --> 
<!-- intro  -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>SELAMAT DATANG</h3>
      <p>Sebuah website yang menyajikan objek - objek wisata sekitar Malino yang cocok bagi Anda yang bingung mencari tempat wisata di sekitar Malino</p>    </div>
  </div>
</section>
<!-- intro  --> 
<!-- services  -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="row">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kategori</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="artikel.php">Wisata Alam</a>
                                </li>
                                <li><a href="artikel1.php">Wisata Buatan</a>
                                </li>
                                <li><a href="artikel2.php">Wisata Kuliner</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
<!-- Footer  -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <br>
        <br>
<p>Obyek Wisata Malino. Made by Muh. Ridho Rahmatullah
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 
  
<!-- Footer --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>
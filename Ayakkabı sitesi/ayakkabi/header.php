<?php ob_start(); session_start(); error_reporting(0);   // kullanıcı giriş için session başlattık 

include'admin/netting/baglan.php'; // sql e bağlantı yaptık ve  header.php dosyasını tüm sayfalara include yani dahil ettik

$ayarsor=$db->prepare("SELECT * FROM ayar"); // ayar tablosundan bilgileri çekmek için sorgu yazdık
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



$kurumsalsor=$db->prepare("SELECT * FROM kurumsal "); // kurumsal tablosundan bilgileri çekmek için sorgu yazdık
$kurumsalsor->execute();
$kurumsalcek=$kurumsalsor->fetch(PDO::FETCH_ASSOC);


$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail"); // session ile kullanıcı giriş yapıp yapmadığını kontrol etmek için sorgu yazdık
$kullanicisor->execute(array(
'mail' => $_SESSION['userkullanici_mail']));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC); 



 ?><!DOCTYPE html>
<html lang="tr">
    <head>
    <title><?php echo $ayarcek['ayar_title']; ?></title> <!-- ayar tablosundan title  satırını çektik  -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
		<!--bootstrap-->
			 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="js/simpleCart.min.js"></script>
		<!--default-js-->
			<script src="js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
			<script src="js/bootstrap.min.js"></script>
		<!--script-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php"><?php echo $ayarcek['ayar_firma']; ?></a> <!-- ayar tablosundan firma adını  çektik  -->
                    </div>
                    <div class="login-bars">

<?php if (isset($_SESSION['userkullanici_mail'])) { ?> <!-- eğer session varsa yani kullanıcı giriş yapmışsa bu alanın böyle olmasını belirttik  -->
<a class="btn btn-default log-bar" href="hesabim.php" role="button">Hesabım</a>
<a class="btn btn-default log-bar" href="guvenli-cikis.php" role="button">Güvenli Çıkış</a>
    <?php } else { ?> <!-- kullanıcı giriş yapmamışsada böyle olmasını belirttik  -->
 <a class="btn btn-default log-bar" href="uye-kayit.php" role="button">Üye Kayıt</a>
                        <a class="btn btn-default log-bar" href="uye-giris.php" role="button">Giriş Yap</a>
        <?php } ?>

 
 
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
 <li><a href="index.php">Anasayfa</a></li>       
     <li><a href="urunler.php?cinsiyet=1">Erkek</a></li> <!-- get ile urunler.php ye  cinsiyet değeri gönderik    -->
      <li><a href="urunler.php?cinsiyet=2">Kadın</a></li> 
      <li><a href="urunler.php">Tüm Modeller</a></li> 
      <li><a href="iletisim.php">İletişim</a></li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                      
                        <div class="clearfix"></div>
                    </nav>
                    
                        <div class="clearfix"></div>
                    </div>
                   
                </div>
                  
            </div>
        </div>
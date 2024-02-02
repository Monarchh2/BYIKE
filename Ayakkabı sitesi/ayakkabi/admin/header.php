 <?php
 
ob_start();
session_start();
error_reporting(0);
 include'netting/baglan.php'; 

$adminsor=$db->prepare("SELECT * FROM admin where admin_mail=:mail");
$adminsor->execute(array(
'mail' =>$_SESSION['admin_mail']
));


$say=$adminsor->rowcount();
$say=$admincek=$adminsor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {
  header("Location:login.php?durum=izinsiz");
  exit;
}

$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
'id' =>0
));

$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$genelsor=$db->prepare("SELECT * FROM genel where id=:id");
$genelsor->execute(array(
'id' =>0
));

$genelcek=$genelsor->fetch(PDO::FETCH_ASSOC);

$kurumsalsor=$db->prepare("SELECT * FROM kurumsal where kurumsal_id=:id");
$kurumsalsor->execute(array(
'id' =>0
));

$kurumsalcek=$kurumsalsor->fetch(PDO::FETCH_ASSOC);

$bilgisor=$db->prepare("SELECT * FROM bilgi where bilgi_id=:id");
$bilgisor->execute(array(
'id' =>0
));

$bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);

$resim1sor=$db->prepare("SELECT * FROM resim1");
$resim1sor->execute();

$resim1cek=$resim1sor->fetch(PDO::FETCH_ASSOC);

$resim2sor=$db->prepare("SELECT * FROM resim2");
$resim2sor->execute();

$resim2cek=$resim2sor->fetch(PDO::FETCH_ASSOC);

$resim3sor=$db->prepare("SELECT * FROM resim3");
$resim3sor->execute();

$resim3cek=$resim3sor->fetch(PDO::FETCH_ASSOC);

$resim4sor=$db->prepare("SELECT * FROM resim4");
$resim4sor->execute();

$resim4cek=$resim4sor->fetch(PDO::FETCH_ASSOC);

$resim5sor=$db->prepare("SELECT * FROM resim5");
$resim5sor->execute();

$resim5cek=$resim5sor->fetch(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Admin Paneli</title>
 
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
 
    <link href="css/style.css" rel="stylesheet">

    <link href="plugins/bower_components/footable/css/footable.core.css" rel="stylesheet"><!-- urun ekle -->

    <link href="plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" /> 
    <link href="css/colors/purple.css" id="theme" rel="stylesheet">
 
</head>

<body class="fix-header"> 
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> 
    <div id="wrapper"> 
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part"> 
                    <a class="logo" href="index.php"> <b>
                <img src="plugins/images/admin-logo.png" alt="home" class="dark-logo" /> <img src="plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <span class="hidden-xs">
                      <img src="plugins/images/admin-text.png" alt="home" class="dark-logo" /> <img src="plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
          
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><img src="less/menu.png"></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <img src="plugins/images/gmail.png">
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                 <?php 

$iletisimsor=$db->prepare("SELECT * FROM iletisim order by iletisim_id DESC  ");
$iletisimsor->execute();

$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);

 ?>
                                <div class="drop-title">Üyelerden gelen mesajlar (<?php $sayi=$iletisimsor->rowCount();

echo  $sayi; 

                    ?>)
                                
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                         <?php

$iletisimsor=$db->prepare("SELECT * FROM iletisim order by iletisim_id DESC ");
$iletisimsor->execute();

 while($iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC)) {?>
                                    
                                        <div class="mail-contnet">
                                            <h5><?php echo $iletisimcek['ad_soyad'];?></h5> <span class="mail-desc"><?php echo $iletisimcek['mesaj']; ?></span> <span class="time"><?php echo $iletisimcek['tarih']; ?></span> </div> 
                                        <?php } ?>
                                    </a>
                             
                              
                               
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="mesajlar.php"> <strong>Tüm mesajları gör</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul> 
                    </li>
    
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Ara..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $admincek['ad']; ?> <?php echo $admincek['soyad']; ?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="plugins/images/users/varun.jpg" alt="user" /></div>
                                    <div class="u-text">
                                        <h4><?php echo $admincek['ad']; ?> <?php echo $admincek['soyad']; ?></h4>
                                        <a href="profil-guncelle.php" class="btn btn-rounded btn-danger btn-sm">Profilimi Güncelle</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                           
                            <li><a href="admin-duzenle.php">  Şifre Güncelle</a></li> 
                            <li><a href="mesajlar.php">  Mesajlar</a></li>  
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php">  Güvenli Çıkış</a></li>
                        </ul>
 
                    </li>
     
                </ul>
            </div>
 
        </nav>
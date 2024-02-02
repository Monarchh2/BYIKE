<?php include'header.php'; $siparissor=$db->prepare("SELECT * FROM siparis");
$siparissor->execute();
$sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC);

$kullanicimsor=$db->prepare("SELECT * FROM kullanici where kullanici_yetki=:kullanici_yetki");
$kullanicimsor->execute(array(
'kullanici_yetki' =>1
));
 $kack=$kullanicimsor->rowCount();

$ussor=$db->prepare("SELECT * FROM urun");
$ussor->execute();

$kacu=$ussor->rowCount();

  ?>
<?php include'sidebar.php'; ?>
  
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">yönetici paneli</h4> </div>
    
                </div>
 
                <div class="row">
 
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">MESAJLAR</h3>
                            <ul class="list-inline two-part">
                                <li><a href="mesajlar.php"><img src="plugins/images/mesaj.png"></a></li>
                                <li class="text-right"><span class="counter"><?php $sayi=$iletisimsor->rowCount();

echo  $sayi; 

                    ?></span></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">ÜRÜNLER</h3>
                            <ul class="list-inline two-part">
                                <li><a href="urun.php"><img src="plugins/images/urun.png"></a></li>
                                <li class="text-right"><span class=""><?php echo $kacu; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Extra-component -->
                <!-- ============================================================== -->
                <div class="row">
 
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">  ÜRÜN YÖNETİMİ</h3>
                            <div class="stats-row">

                                <div class="stat-item">
                                <b><h6><a href="urun-ekle.php">YENİ ÜRÜN EKLE</a></h6></b></div>
                                <div class="stat-item">
                                <b><h6><a href="urun.php">ÜRÜN GÜNCELLE</a></h6></b></div>
                                
                                
                                 
                            </div>
                            <div id="sparkline8"></div>
                        </div>
              <div class="white-box">
                            <h3 class="box-title">  AYARLAR</h3>
                            <div class="stats-row">

                                <div class="stat-item">
                                <b><h6><a href="genel-ayarlar.php">GENEL AYARLAR</a></h6></b></div>
                                <div class="stat-item">
                                <b><h6><a href="iletisim-ayar.php">İLETİŞİM AYARLARI</a></h6></b></div>
                              
                          
                                 
                            </div>
                            <div id="sparkline8"></div>
                        </div>

              <div class="white-box">
                            <h3 class="box-title">SLİDER  AYARLARI</h3>
                            <div class="stats-row">

                                <div class="stat-item">
                                <b><h6><a href="slider-ekle.php">SLİDER EKLE</a></h6></b></div>
                                <div class="stat-item">
                                <b><h6><a href="slider.php">SLİDER DÜZENLE</a></h6></b></div>
                            
                          
                                 
                            </div>
                            <div id="sparkline8"></div>
                        </div>


              <div class="white-box">
                            <h3 class="box-title">KURUMSAL</h3>
                            <div class="stats-row">

                                <div class="stat-item">
                                <b><h6><a href="hakkimizda.php">HAKKIMIZDA</a></h6></b></div>
                                 
                            
                          
                                 
                            </div>
                            <div id="sparkline8"></div>
                        </div>


           


                    </div>
                </div>
      
       
            </div>
       <?php include'footer.php'; ?>
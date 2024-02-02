<?php include'header.php'; 
$iletisimsor=$db->prepare("SELECT * FROM iletisim order by iletisim_id DESC");
$iletisimsor->execute(); ?>
<?php include'sidebar.php'; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">GELEN MESAJLAR</h4>
                                 <?php if ($_GET['sil']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Kullanıcılardan Gelen Mesajlar</p>
                            <?php } ?> </div>
   
                </div>
                <!-- row -->
                <div class="row">
<?php 

while ($iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC)) {?>
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
 
                                <div class="col-lg-12 col-md-9 col-sm-8 col-xs-12 mail_listing">
                                    <div class="media m-b-30 p-t-20">
                                        <h4 class="font-bold m-t-0">Mesaj Detayı</h4>
                                        <hr>
            
                                        <div class="media-body"> <span class="media-meta pull-right"><?php echo $iletisimcek['tarih']; ?></span>
                                            <h4 class="text-danger m-0"><?php echo $iletisimcek['ad_soyad']; ?>  </h4> <small class="text-muted">Email: <?php echo $iletisimcek['mail']; ?></small><br>
                                            <small class="text-muted">Telefon : <?php echo $iletisimcek['gsm']; ?></small> </div>
                                    </div>
                                    <p><?php echo $iletisimcek['mesaj']; ?></p>
                                    <hr>
                                    <h4><a href="netting/islem-admin.php?iletisim_id=<?php echo $iletisimcek['iletisim_id']; ?>&iletisimsil=ok"><button type="button" class="btn btn-info btn-sm m-r-5">Mesajı Sil</button></a></h4>
               
                          
                                </div>
                            </div>
                        </div>
                    </div>


<?php } ?>



                </div>
       
 
            </div>
         <?php include'footer.php'; ?>
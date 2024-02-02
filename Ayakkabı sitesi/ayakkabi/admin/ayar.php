<?php include'header.php'; ?>
<?php include'sidebar.php';


$genelsor=$db->prepare("SELECT * FROM genel where id=:id");
$genelsor->execute(array(
'id' =>0
));

$genelcek=$genelsor->fetch(PDO::FETCH_ASSOC);


 ?>
        <div id="page-wrapper">
            <div>
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">AYARLAR</h3>
                             <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } elseif ($_GET['durum']=="uzanti") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Sadece Jpg,Png ve Gif Formatında Resim Ekleyebilirsiniz !!!</p>
                            <?php } elseif ($_GET['durum']=="dosyabuyuk") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Resim Boyutu Çok Büyük !!!</p>
                            <?php } elseif ($_GET['durum']=="sec") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Ödeme Yöntemlerinden En az 1 Tane Seçili Olmalıdır</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Ayarları Güncelleyin</p>
                            <?php } ?>  <hr>
                            <form data-toggle="validator" action="netting/islem-admin.php" method="POST" >

 
<div class="form-group">
             <div style="display: none;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3 class="box-title m-b-0">ÜRÜN / HİZMET FİYAT BİLGİSİ</h3>
 
                                      <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['fiyat']=="1") {
                                                echo "checked";
                                            } ?> name="fiyat" id="radio1" value="1"   >
                                            <label for="radio1"> Ürün / Hizmet Fiyatı Gösterilsin </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['fiyat']=="0") {
                                                echo "checked";
                                            } ?> name="fiyat" id="radio2" value="0">
                                            <label for="radio2"> Ürün / Hizmet Fiyatı Gösterilmesin   </label>
                                        </div>           
                     </div>



             <div style="margin-top: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3 class="box-title m-b-0">SATIŞ BİLGİSİ</h3>
 
                                      <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['satis']=="1") {
                                                echo "checked";
                                            } ?> name="satis" id="radio3" value="1" checked>
                                            <label for="radio3"> Ürün / Hizmet Satışı Yapılsın </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['satis']=="0") {
                                                echo "checked";
                                            } ?> name="satis" id="radio4" value="0">
                                            <label for="radio4"> Satış Yapılmasın Sadece Ürün / Hizmet Tanıtımı Yapılsın   </label>
                                        </div>           
                     </div>


             <div style="margin-top: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3 class="box-title m-b-0">ÜYE SATIŞ BİLGİSİ</h3>
 
                                      <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['uye']=="1") {
                                                echo "checked";
                                            } ?> name="uye" id="radio5" value="1" checked>
                                            <label for="radio5"> Satın Alma için Üyelik Mecburi olsun </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['uye']=="0") {
                                                echo "checked";
                                            } ?> name="uye" id="radio6" value="0">
                                            <label for="radio6">Üye Olmadan Satın Alınabilsin   </label>
                                        </div>           
                     </div>


             <div style="margin-top: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3 class="box-title m-b-0">YORUM BİLGİSİ</h3>
 
                                      <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['yorum']=="1") {
                                                echo "checked";
                                            } ?> name="yorum" id="radio7" value="1" checked>
                                            <label for="radio7"> Üyeler Ürün/Hizmet'e Yorum Yapabilsin </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['yorum']=="0") {
                                                echo "checked";
                                            } ?> name="yorum" id="radio8" value="0">
                                            <label for="radio8">Üyeler Ürün/Hizmet'e Yorum Yapamasın </label>
                                        </div>           
                     </div>



             <div style="margin-top: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3 class="box-title m-b-0">KREDİ KARTI İLE SATIŞ</h3>
 
                                      <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['kart']=="1") {
                                                echo "checked";
                                            } ?> name="kart" id="radio8" value="1" checked>
                                            <label for="radio8"> Kredi / Banka Kart ile Satış Yapılabilsin </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['kart']=="0") {
                                                echo "checked";
                                            } ?> name="kart" id="radio9" value="0">
                                            <label for="radio9">Kredi / Banka Kart ile Satış Yapılamasın  </label>
                                        </div>           
                     </div>



             <div style="margin-top: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3 class="box-title m-b-0">KAPIDA ÖDEME</h3>
 
                                      <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['kapida']=="1") {
                                                echo "checked";
                                            } ?> name="kapida" id="radio10" value="1" checked>
                                            <label for="radio10"> Kapıda Ödeme Seçilebilsin </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['kapida']=="0") {
                                                echo "checked";
                                            } ?> name="kapida" id="radio11" value="0">
                                            <label for="radio11">Kapıda Ödeme Seçilemesin  </label>
                                        </div>           
                     </div>


             <div style="margin-top: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3 class="box-title m-b-0">HAVALE / EFT</h3>
 
                                      <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['eft']=="1") {
                                                echo "checked";
                                            } ?> name="eft" id="radio12" value="1" checked>
                                            <label for="radio12"> Havale / Eft ile Ödeme Aktif </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" <?php if ($genelcek['eft']=="0") {
                                                echo "checked";
                                            } ?> name="eft" id="radio13" value="0">
                                            <label for="radio13">Havale / Eft ile Ödeme Pasif  </label>
                                        </div>           
                     </div>











</div>

 
 

 

 
    
 


 
 
 
 

 
 
                                <div  class="form-group">
                                    <button style="margin-top: 40px;" type="submit" name="ayargun" class="btn btn-primary">Ayarları Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
               
                </div>
   
            </div> 
 <?php include'footer.php'; ?>
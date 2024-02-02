<?php include'header.php'; ?>
<?php include'sidebar.php'; ?>
        <div id="page-wrapper">
            <div  >
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">GENEL AYARLAR</h3>
 <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } elseif ($_GET['durum']=="uzanti") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Sadece Png   Formatında Logo Ekleyebilirsiniz !!!</p>
                            <?php } elseif ($_GET['durum']=="dosyabuyuk") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Resim Boyutu Çok Büyük !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Genel Ayarları Güncelleyin</p>
                            <?php } ?> <hr><br>
                            <form data-toggle="validator" action="netting/islem-admin.php" method="POST"  >
 
 



<div class="form-group">
<label for="ad" class="control-label">Firma Adı</label>
<input type="text" class="form-control" id="ad" required="required" name="ayar_firma" value="<?php echo $ayarcek['ayar_firma']; ?>"> 
<div class="help-block with-errors"></div>
</div>

  


<label for="fiyat" class="control-label">Site Başlığı (Title)</label>
<div class="row">
<div class="form-group col-sm-12">
<input type="text" data-toggle="validator"   class="form-control" id="fiyat" required="required" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">
  </div>
 
</div>

                     

 
 
 

 
 
                                <div class="form-group">
                                    <button   name="genelayarkaydet" class="btn btn-primary">Ayarları Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
               
                </div>
  
            </div>
         <?php include'footer.php'; ?>
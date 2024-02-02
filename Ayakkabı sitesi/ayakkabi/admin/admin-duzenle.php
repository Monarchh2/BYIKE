<?php include'header.php'; ?>
<?php include'sidebar.php'; ?>
        <div id="page-wrapper">
            <div  >
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">ŞİFRE DEĞİŞİKLİĞİ</h3>
 <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } elseif ($_GET['durum']=="eslesmiyor") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Girilen Şifreler Eşleşmiyor !!!</p>
                            <?php }     else { ?>
                                <p class="text-muted m-b-30">Şifrenizi Güncelleyin</p>
                            <?php } ?> <hr><br>
                            <form data-toggle="validator" action="netting/islem-admin.php" method="POST"  >
 
 
 



<div class="form-group">
<label for="ad" class="control-label">Yeni Şifreniz</label>
<input type="password"   placeholder="Yeni Şifrenizi girin" name="sifre1" required="required" class="form-control"> 
<div class="help-block with-errors"></div>
</div>

  


<label for="fiyat" class="control-label">Yeni Şifreniz (Tekrar Girin)</label>
<div class="row">
<div class="form-group col-sm-12">
<input type="password"   placeholder="Yeni şifrenizi tekrar girin" name="sifre2" class="form-control">
  </div>
</div>



 
 
                                <div class="form-group">
                                    <button type="submit"  name="adminguncelle" class="btn btn-primary">Şifremi Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
               
                </div>
  
            </div>
         <?php include'footer.php'; ?>
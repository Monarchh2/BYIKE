<?php include'header.php'; ?>
<?php include'sidebar.php'; ?>
        <div id="page-wrapper">
            <div  >
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">PROFİLİNİZ</h3>
 <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php }     else { ?>
                                <p class="text-muted m-b-30">Profilinizi Güncelleyin</p>
                            <?php } ?> <hr><br>
                            <form data-toggle="validator" action="netting/islem-admin.php" method="POST"  >
 
 
 



<div class="form-group">
<label for="ad" class="control-label">Adınız</label>
<input type="text" class="form-control" id="ad" required="required" name="ad" value="<?php echo $admincek['ad']; ?>"> 
<div class="help-block with-errors"></div>
</div>

  


<label for="fiyat" class="control-label">Soyadınız</label>
<div class="row">
<div class="form-group col-sm-12">
<input type="text" data-toggle="validator"   class="form-control" id="fiyat" required="required" name="soyad" value="<?php echo $admincek['soyad']; ?>">
  </div>
</div>

<div class="form-group">
    <label for="fiyat" class="control-label">Kullanıcı Adı</label>
    <input type="text" data-toggle="validator"   class="form-control" id="fiyat" required="required" name="admin_mail" value="<?php echo $admincek['admin_mail']; ?>">
    <div class="help-block with-errors"></div>
</div>

 
 
                                <div class="form-group">
                                    <button type="submit"  name="profilll" class="btn btn-primary">Bilgileri Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
               
                </div>
  
            </div>
         <?php include'footer.php'; ?>
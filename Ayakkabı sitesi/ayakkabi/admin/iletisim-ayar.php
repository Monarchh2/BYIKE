<?php include'header.php'; ?>
<?php include'sidebar.php'; ?>
        <div id="page-wrapper">
            <div  >
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">İLETİŞİM AYARLARI</h3>
                            <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">İletişim Ayarlarını Güncelleyin</p>
                            <?php } ?> <hr><br>
                            <form data-toggle="validator" action="netting/islem-admin.php" method="POST">

 
 

<div class="form-group">
<label style="width: 90px;" for="ad" class="control-label">Sabit Telefon  </label>

<?php if ($ayarcek['durum_tel']=="0") { ?>
 <input type="checkbox"  class="js-switch" name="durum_tel" data-color="#6164c1" data-size="small"  />
<?php } else { ?>
<input type="checkbox" checked class="js-switch" name="durum_tel" data-color="#6164c1" data-size="small"  />
<?php } ?>

<input type="text" name="ayar_tel" required="required" value="<?php echo $ayarcek['ayar_tel']; ?>" data-mask="(9999) 999-99-99" class="form-control"> </div>

<div class="form-group">
<label style="width: 90px;" for="ad" class="control-label">Cep Telefonu  </label>

<?php if ($ayarcek['durum_gsm']=="0") { ?>
 <input type="checkbox"  class="js-switch" name="durum_gsm" data-color="#6164c1" data-size="small"  />
<?php } else { ?>
<input type="checkbox" checked class="js-switch" name="durum_gsm" data-color="#6164c1" data-size="small"  />
<?php } ?>

<input type="text" name="ayar_gsm" required="required" value="<?php echo $ayarcek['ayar_gsm']; ?>" data-mask="(9999) 999-99-99" class="form-control"> </div>

 

  


<label for="fiyat" class="control-label">E-Posta Adresi</label>
<div class="row">
<div class="form-group col-sm-12">
<input type="email"     class="form-control" name="ayar_mail" required="required"  value="<?php echo $ayarcek['ayar_mail']; ?>"  >
  </div>
 
</div>

<label for="fiyat" class="control-label">Adres İL/İLÇE</label>
<div class="row">
<div class="form-group col-sm-6">
<input type="text" data-toggle="validator"   class="form-control" id="fiyat" name="ayar_il" required="required" value="<?php echo $ayarcek['ayar_il']; ?>">
<div class="help-block with-errors"></div> </div>
<div class="form-group col-sm-6">
<input type="text" data-toggle="validator"   class="form-control" id="fiyat" name="ayar_ilce" required="required"   value="<?php echo $ayarcek['ayar_ilce']; ?>">
<div class="help-block with-errors"></div> </div>
</div>

<label for="fiyat" class="control-label">Açık Adres</label>
<div class="row">
<div class="form-group col-sm-12">
<input type="text" name="ayar_adres" required="required"    class="form-control"   value="<?php echo $ayarcek['ayar_adres']; ?>"  >
  </div>
 
</div>

         <div class="form-group">
                                    <button type="submit" name="iletisimayarkaydet" class="btn btn-primary">İletişim Ayarlarını Güncelle</button>
                                </div>
                            </form>

</div>

 
 
                        </div>
                    </div>
               
                </div>
  
            </div>

         <?php include'footer.php'; ?><script src="js/mask.js"></script>
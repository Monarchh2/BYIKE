<?php include'header.php';
$slidersor=$db->prepare("SELECT * FROM slider where slider_id=:id");
$slidersor->execute(array(
'id' =>$_GET['slider_id']
));

$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC); ?>
<?php include'sidebar.php' ?>
        <div id="page-wrapper">
            <div>
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">SLİDER DÜZENLE</h3>
                             <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } elseif ($_GET['durum']=="uzanti") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Sadece Jpg,Png ve Gif Formatında Resim Ekleyebilirsiniz !!!</p>
                            <?php } elseif ($_GET['durum']=="dosyabuyuk") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Resim Boyutu Çok Büyük !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Slider Güncelle</p>
                            <?php } ?>  <hr><br>
<form data-toggle="validator" action="netting/islem-admin.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">
<input type="hidden" name="eskiyol" value="<?php echo $slidercek['slider_resimyol']; ?>">
<div class="form-group">


<div class="form-group"> 
<img style="width: 190px; height: 60px;" src="../<?php echo $slidercek['slider_resimyol']; ?>"> 
<div class="help-block with-errors"></div>
</div>

<div class="switchery-demo m-b-30">
<label for="ad" class="control-label">YAYIN DURUMU &nbsp;&nbsp;&nbsp;&nbsp; Pasif &nbsp; </label> 
<?php if ($slidercek['slider_durum']=="1") { ?>
   <input type="checkbox" name="slider_durum" checked="checked" class="js-switch" data-color="#6164c1" data-size="small"  />
<?php } else { ?>
<input type="checkbox" name="slider_durum"  class="js-switch" data-color="#6164c1" data-size="small"  />
<?php } ?>      

<label for="ad" class="control-label"> &nbsp; Aktif </label></div>

<label class="control-label ">Slider Resimi</label>
<div class="fileinput fileinput-new input-group" data-provides="fileinput">
<div class="form-control" data-trigger="fileinput"> 
<i class="glyphicon glyphicon-file fileinput-exists"></i>
<span class="fileinput-filename"></span>
</div>
<span class="input-group-addon btn btn-default btn-file">
<span class="fileinput-new">Dosya Seç</span>
<span class="fileinput-exists">Değiştir</span>
<input type="file" name="slider_resimyol" > </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a> 
<div class="help-block with-errors"></div></div>
</div>



<div class="form-group">
<label for="ad" class="control-label">Slider Ana Başlık</label>
<input type="text" name="slider_anabaslik" class="form-control" id="ad" value="<?php echo $slidercek['slider_anabaslik']; ?>" required> 
<div class="help-block with-errors"></div>
</div>

<div class="form-group">
<label for="ad" class="control-label">Slider Alt Başlık</label>
<input type="text" name="slider_baslik" class="form-control" id="ad" value="<?php echo $slidercek['slider_baslik']; ?>" required> 
<div class="help-block with-errors"></div>
</div>

 
                           
 


<div class="form-group">
<label for="ad" class="control-label">Slider Sıra No</label>
<input type="number" class="form-control" id="ad" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>" required> 
<div class="help-block with-errors"></div>
</div>

 
 

 
 
                                <div class="form-group">
                                    <button type="submit" name="asguncelle" class="btn btn-primary">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
               
                </div>
   
            </div> 
 <?php include'footer.php'; ?>
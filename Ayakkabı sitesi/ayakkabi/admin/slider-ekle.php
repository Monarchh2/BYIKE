<?php include'header.php'; ?>
<?php include'sidebar.php' ?>
        <div id="page-wrapper">
            <div>
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">SLİDER EKLE</h3>
                             <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } elseif ($_GET['durum']=="uzanti") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Sadece Jpg,Png ve Gif Formatında Resim Ekleyebilirsiniz !!!</p>
                            <?php } elseif ($_GET['durum']=="dosyabuyuk") { ?>
                                <p style="color: red;" class="text-muted m-b-30">Resim Boyutu Çok Büyük !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Yeni Slider Ekleyin</p>
                            <?php } ?>  <hr><br>
                            <form data-toggle="validator" action="netting/islem-admin.php" method="POST" enctype="multipart/form-data">

 
<div class="form-group">
<div class="switchery-demo m-b-30">
<label for="ad" class="control-label">YAYIN DURUMU &nbsp;&nbsp;&nbsp;&nbsp; Pasif &nbsp; </label>       
<input type="checkbox" name="slider_durum" checked class="js-switch" data-color="#6164c1" data-size="small"  />
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
<input type="file" name="slider_resimyol" required="required"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a> 
<div class="help-block with-errors"></div></div>
</div>



<div class="form-group">
<label for="ad" class="control-label">Slider Ana Başlık</label>
<input type="text" name="slider_anabaslik" class="form-control" id="ad" placeholder=" Ana başlık girin" required> 
<div class="help-block with-errors"></div>
</div>

<div class="form-group">
<label for="ad" class="control-label">Slider Alt Başlık</label>
<input type="text" name="slider_baslik" class="form-control" id="ad" placeholder="Başlık girin" required> 
<div class="help-block with-errors"></div>
</div>

 
 


<div class="form-group">
<label for="ad" class="control-label">Slider Sıra No</label>
<input type="number" class="form-control" id="ad" name="slider_sira" placeholder="slider sıra girin" required> 
<div class="help-block with-errors"></div>
</div>

 
 

 
 
                                <div class="form-group">
                                    <button type="submit" name="anasliderekle" class="btn btn-primary">Kaydet  </button>
                                </div>
                            </form>
                        </div>
                    </div>
               
                </div>
   
            </div> 
 <?php include'footer.php'; ?>
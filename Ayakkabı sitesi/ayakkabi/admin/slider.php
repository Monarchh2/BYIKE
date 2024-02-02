<?php include'header.php';
$slidersor=$db->prepare("SELECT * FROM slider order by slider_id ASC");
$slidersor->execute(); ?>
<?php include'sidebar.php' ?>
        <div id="page-wrapper">
            <div>
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">SLİDER</h3>
                           <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Kayıtlı Sliderler</p>
                            <?php } ?> <hr><br>
          

 
<div class="form-group">



<div class="scrollable">

                                <div class="table-responsive">
                                    <table   class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                            
                                                <th>SLİDE</th>
                                                  <th>DURUM</th>
                                                <th>SIRA</th>   
                                                <th>İŞLEM</th>
                                            </tr>
                                        </thead>
                                        <tbody>


      <?php 

while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {?>
<input type="hidden" name="eski_yol" value="<?php echo $slidercek['slider_resimyol'] ?>">

                                            <tr>
                                            
                                                <td>
                                                   <img  src="../<?php echo $slidercek['slider_resimyol']; ?>"  /> 
                                                </td>
                                                

<td>
    <?php if ($slidercek['slider_durum']=="1") { ?>
        <span class="label label-success">Aktif</span>
    <?php } else { ?>
        <span class="label label-danger">Pasif</span>
    <?php } ?>
</td>
 
                                                <td><?php echo $slidercek['slider_sira']; ?></td>   
                                                <td><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>" class="label label-table label-success">DÜZENLE</a> <a href="netting/islem-admin.php?slider_id=<?php echo $slidercek['slider_id']; ?>&eski_yol=../<?php echo $slidercek['slider_resimyol'] ?>&anaslidersil=ok" class="label label-table label-danger"> SİL</a></td>
                                            </tr>


<?php } ?>

                       
                  
                                        </tbody>
                           
                                    </table>
                                </div>
                            
</div>


 
</div>

 
 
 
                        </div>
                    </div>
               
                </div>
   
            </div> 
 <?php include'footer.php'; ?>
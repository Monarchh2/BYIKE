 <?php include'header.php'; 
 $urunsor=$db->prepare("SELECT * FROM urun");
$urunsor->execute(); ?>
<?php include'sidebar.php'; ?>
        <div id="page-wrapper">
            <div  >
 
                <div class="row">
                    <div class="col-sm-12">
      
                       


<div class="row">
    
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">ÜRÜNLAR</h3>
                             <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">  Kayıtlı ÜRÜNlar</p>
                            <?php } ?> <hr><br>
                            <label class="form-inline">Göster 
                                <select id="demo-show-entries" class="form-control input-sm">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select> Adet </label>
                            <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny" data-page-size="5">
                                <thead>
                                    <tr>
                                        <th data-toggle="true"> ÜRÜN</th> 
                                        <th> MODEL </th>
                                        <th data-hide="phone"> İŞLEM </th>
                                        <th data-hide="all"> FİYAT </th>
                                        <th data-hide="all"> DURUM </th>

                                    </tr>
                                </thead>
                                <tbody>

 <?php while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {  ?>
                                    <tr>
                                        <td><?php echo $uruncek['baslik']; ?></td> 
                                        <td><img width="100" src="../<?php echo $uruncek['urun_resimyol']; ?>"></td>
                                        <td>
  


                                            <a href="urun-duzenle.php?id=<?php echo $uruncek['id']; ?>" class="label label-table label-success">DÜZENLE</a> 



                                            <a href="netting/islem-admin.php?urunsil=ok&urun_id=<?php echo $uruncek['id']; ?>" class="label label-table label-danger"> SİL</a> 

                                        </td>
                                        <td><?php echo $uruncek['fiyat']; ?> TL</td>
                                        <td>
<?php if ($uruncek['durum']=="1") { ?>
     <span class="label label-table label-info">Yayında</span>
<?php } else { ?>
    <span class="label label-table label-danger">Pasif</span>
<?php } ?>

                                           </td>
                                    </tr> 
                                <?php } ?>

       


                  
                  
                
                         
               
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <div class="text-right">
                                                <ul class="pagination pagination-split m-t-30"> </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                
</div>

                        </div>
                 
               
                </div>

            </div>
      <?php include'footer.php'; ?>
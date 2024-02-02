<?php include'header.php'; ?>
<?php include'sidebar.php' ?>

    <link rel="stylesheet" href="plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
        <div id="page-wrapper">
            <div>
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">HAKKIMIZDA</h3>
                            <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Lütfen Bilgileri Doldurun</p>
                            <?php } ?> <hr><br>
                            <form data-toggle="validator" action="netting/islem-admin.php" method="post">

 
                  
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" rows="15"  name="hakkimizda"><?php echo $kurumsalcek['hakkimizda']; ?></textarea>
                                </div>
               


 
 

 
 
                                <div class="form-group">
                                    <button type="submit" name="hakkimizdakaydet" class="btn btn-primary">Bilgileri Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
               
                </div>
   
            </div>

 <?php include'footer.php'; ?><script src="plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
        <script>
    $(document).ready(function() {
        $('.textarea_editor').wysihtml5();
    });
    </script>
<?php include'header.php'; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">ANASAYFA</a></li>
                    <li class="active">ÜYE GİRİŞİ</li>
                </ol>
            </div>
        </div>
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log"> 
                             <div class="strip"></div>
                         <?php if ($_GET['durum']=="basarisizgiris") { ?>
                             <p style="color: red">Kullanıcı Adınız veya şifreniz Hatalı</p>
                         <?php } else { ?>
                                <p>Üye Değilmisin ?  <a href="uye-kayit.php">Kayıt ol</a></p>
                         <?php } ?>     
                             
                             <form action="admin/netting/islem-admin.php" method="POST" >
                                 <h5>Email Adresiniz</h5>	
                                 <input type="text" name="kullanici_mail">
                                 <h5>Şifreniz</h5>
                                 <input type="password" name="kullanici_password"><br>					
                                 <input type="submit" name="uyegirisi" value="Giriş Yap">

                             </form> 
                    </div>
                    <div class="col-md-6 login-right"> 
                            <div class="strip"></div>
                            <p>Sezon indirimlerinden haberdar olmak  ve fırsatları kaçırmamak için hemen kayıt olun</p>
                            <a href="uye-kayit.php" class="button">Yeni Üyelik</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<?php include'footer.php'; ?>
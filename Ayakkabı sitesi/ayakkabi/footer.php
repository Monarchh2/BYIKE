<div class="footer-grid">
            <div class="container">
                <div class="col-md-2 re-ft-grd">
                    <h3>Kategoriler</h3>
                    <ul class="categories">
                        <li><a href="urunler.php?cinsiyet=1">Erkek</a></li>
                        <li><a href="urunler.php?cinsiyet=2">Kadın</a></li>
                        <li><a href="urunler.php">Tüm Modeller</a></li> 
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <h3>Kurumsal</h3>
                    <ul class="shot-links">
                        <li><a href="hakkimizda.php">Hakkımızda</a></li> 
                        <li><a href="uye-kayit.php">Üye Kayıt</a></li>
                        <li><a href="uye-giris.php">Üye Giriş</a></li>
                        <li><a href="iletisim.php">İletişim</a></li> 
                    </ul>
                </div>
                <div class="col-md-6 re-ft-grd">
                    <h3>Bize Ulasın</h3>
                    <ul class="social">
                        <li><a href="iletisim.php" class="fb"><?php echo $ayarcek['ayar_tel']; ?></a></li>
                        <li><a href="iletisim.php" class="twt"><?php echo $ayarcek['ayar_mail']; ?></a></li>
                        <li><a href="iletisim.php" class="gpls">müşteri hizmetleri</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="index.php" class="ft-log"><?php echo $ayarcek['ayar_firma']; ?></a>
                        </div>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>&copy;   2021 <?php echo $ayarcek['ayar_firma']; ?> Tüm Hakları Saklıdır  </p>
                </div>
            </div>
        </div>
    </body>
</html>
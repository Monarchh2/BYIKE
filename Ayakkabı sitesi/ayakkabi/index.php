<?php include'header.php';  include'slider.php';  ?> <!-- slider.php bu sayfaya dahil ettik (include ettik)  -->

        <div class="feel-fall">
            <div class="container">
                <div class="pull-left fal-box">
                    <div class=" fall-left">
                        <h3>İLHAM AL</h3>
                        <img src="images/f-l.png" alt="/" class="img-responsive fl-img-wid">
                        <p>Dünyadaki her sporcu için ilham ve yenilik</p>
                        <span class="fel-fal-bar"></span>
                    </div>
                </div>
                <div class="pull-right fel-box">
                    <div class="feel-right">
                        <h3>HİSSET</h3>
                        <img src="images/f-r.png" alt="/" class="img-responsive fl-img-wid">
                        <p>Dünyadaki her sporcu için ilham ve yenilik</p>
                        <span class="fel-fal-bar2"></span>
                    </div>
                </div>
            <div class="clearfix"></div>
            </div>
        </div>
        <div class="shop-grid">
            <div class="container">


<?php 

 
$urunsor=$db->prepare("SELECT * FROM urun limit 6 ");
$urunsor->execute();  
while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { ?>



                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                     <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="<?php echo $uruncek['urun_resimyol']; ?>" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3><?php echo $uruncek['baslik']; ?></h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="urun.php?id=<?php echo $uruncek['id']; ?>" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price"><?php echo $uruncek['fiyat']; ?> TL</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <a href="urun.php?id=<?php echo $uruncek['id']; ?>">Hemen Satın Al</a>
                    </div>
                </div>
      <?php } ?>
        <div class="clearfix"></div>
            </div>
        </div>
        <div class="sub-news">
            <div class="container">
                <form>
                    <h3>Haber Bülteni</h3>
                <input type="text" class="sub-email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Adresiniz';}">
                <a class="btn btn-default subs-btn" href="#" role="button">KAYIT OL</a>
                </form>
            </div>
        </div>
        <?php include'footer.php'; ?>
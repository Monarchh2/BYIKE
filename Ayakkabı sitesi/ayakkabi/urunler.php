<?php include'header.php'; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">ANASAYFA</a></li>
                    <li class="active">MODELLER</li>
                </ol>
            </div>
        </div>
        <div class="products-gallery">
           <div class="container">
               <div class="col-md-9 grid-gallery">




<?php 


if (isset($_GET['cinsiyet'])) {
$urunsor=$db->prepare("SELECT * FROM urun where cinsiyet=:cinsiyet ");
$urunsor->execute(array('cinsiyet'=>$_GET['cinsiyet']));
} else {
$urunsor=$db->prepare("SELECT * FROM urun ");
$urunsor->execute(); 
}

 

while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { ?>


                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                         <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="<?php echo $uruncek['urun_resimyol']; ?>" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3><?php echo $uruncek['baslik']; ?> </h3>
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
               <div class="col-md-3 grid-details">
                    <div class="grid-addon">
                        <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Kategoriler</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort"><a style="color: gray" href="urunler.php?cinsiyet=1">ERKEK AYAKKABI MODELLERI</a></li> 
									<div class="clearfix"> </div>
							  </ul>
						 
					      </div>	

                             <div class="tab1">
                             <ul class="place">                             
                                 <li class="sort"><a style="color: gray" href="urunler.php?cinsiyet=2">KADIN AYAKKABI MODELLERI</a></li> 
                                    <div class="clearfix"> </div>
                              </ul>
                         
                          </div>					  
					 
				 						  
						 
						<!-- script -->					 
				 </section>
	  				 
		  	
                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
        </div>
        <?php include'footer.php'; ?>
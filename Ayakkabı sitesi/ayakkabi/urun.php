<?php include'header.php';

$urunsor=$db->prepare("SELECT * FROM urun where id=:id");
$urunsor->execute(array('id'=>$_GET['id']));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);


 ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">ANASAYFA</a></li> 
                    <li class="active"><?php echo $uruncek['baslik']; ?></li>
                </ol>
            </div>
        </div>
        <div class="showcase-grid">
            <div class="container">
                <div class="col-md-8 showcase">
                    <div class="flexslider">
                          <ul class="slides">
                            <li >
                                <div > <img style="width: 80%" src="<?php echo $uruncek['urun_resimyol']; ?>" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
           
                          </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 showcase">
                    <div class="showcase-rt-top">
                        <div class="pull-left shoe-name">
                            <h3><?php echo $uruncek['baslik']; ?> </h3>
                            <p>İlham Al Hisset</p>
                            <h4> <?php echo $uruncek['fiyat']; ?>  TL</h4>
                        </div>
                        <div class="pull-left rating-stars">
                            <ul>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="shocase-rt-bot">
                        <div class="float-qty-chart">
                        <ul>
                            <li class="qty">
                                <h3>Beden Seçin</h3>
                                <select class="form-control siz-chrt">
                                  <option>40</option>
                                  <option>41</option>
                                  <option>42</option>
                                  <option>43</option>
                                  <option>44</option> 
                                </select>
                            </li>
                            <li class="qty">
                                <h4>ADET</h4>
                                <select class="form-control qnty-chrt">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                </select>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        </div>
                        <ul>
                            <li class="ad-2-crt simpleCart_shelfItem">
                                <a class="btn item_add" href="#" role="button">Sepete Ekle</a>
                                <a class="btn" href="#" role="button">Satın Al</a>
                            </li>
                        </ul>
                    </div>
                    <div class="showcase-last">
                        <h3>Ürün Detayı</h3>
                        <ul>
 

<li>Orta kısımdaki ağ, bağcıkları sıktığında ayağını sıkıca sarar.</li>
<li>Nike React köpük hafif, esnek ve dayanıklıdır.Daha fazla köpük, </li>
<li>ağırlık yapmadan daha iyi yastıklama sağlar.</li>


                        </ul>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="specifications">
            <div class="container">
              <h3>Ürün Hakkında</h3> 
                <div class="detai-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills tab-nike" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Açıklama</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> Kargo</a></li>
                   
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                    <p><?php 
        
$a=$uruncek['detay'];
    $b=nl2br($a);
            echo $b; ?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                    <p> Siparişleriniz Aynı Gün Kargoda </p>    
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        The images represent actual product though color of the image and product may slightly differ.    
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="you-might-like">
            <div class="container">
                <h3 class="you-might">İlginizi Çekebilir</h3>




<?php 

$sor=$db->prepare("SELECT * FROM urun order by rand() limit 3 ");
$sor->execute();
while ($cek=$sor->fetch(PDO::FETCH_ASSOC)) { ?>




                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                     <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="<?php echo $cek['urun_resimyol']; ?>" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3><?php echo $cek['baslik']; ?></h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="urun.php?id=<?php echo $cek['id']; ?>" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price"><?php echo $cek['fiyat']; ?> TL</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <a href="urun.php?id=<?php echo $cek['id']; ?>">Hemen Satın Al</a>
                    </div>
                </div>

<?php } ?>



       
                <div class="clearfix"></div>
            </div>
        </div>
        
       <?php include'footer.php'; ?>
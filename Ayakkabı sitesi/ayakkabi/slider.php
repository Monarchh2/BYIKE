        <div class="header-end">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
         

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="./images/shoe3.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>Nike</h3>
                            <h4>Anı Yasa</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>


<?php 

$slidersor=$db->prepare("SELECT * FROM slider WHERE slider_durum=1 ORDER BY slider_sira ASC");
$slidersor->execute();
while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?>


                    <div class="item">
                      <img src="<?php echo $slidercek['slider_resimyol']; ?>" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3><?php echo $slidercek['slider_anabaslik']; ?></h3>
                            <h4><?php echo $slidercek['slider_baslik']; ?></h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>


<?php } ?>



          
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
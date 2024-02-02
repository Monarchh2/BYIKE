<?php include'header.php'; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">ANASAYFA</a></li>
                    <li class="active">İLETİSİM</li>
                </ol>
            </div>
        </div>
     <br><br><br>




        <div class="contact">
            <div class="container">
               <?php if (@$_GET['durum']=="ok") { ?> <!-- getten gelen değer ok ise böyle yaz diye belirttik  -->
<h3>Mesajınız Gönderildi</h3>
<?php } elseif (@$_GET['durum']=="no") { ?> <!-- getten gelen değer ok ise böyle yaz diye belirttik  -->
<h3 style="color: red">Hata Oluştu !!!</h3>
<?php } else { ?>
<h3>Bize Yazın</h3> <!-- hiçbir değer gelmezse de böyle yazmasını belirttik  -->
<?php } ?>
                <div class="contact-content">

 


<form action="admin/netting/islem-admin.php" method="POST"  > <!-- admin/netting/islem-admin.php  formdaki verileri post ettik   -->
                        <input type="text" class="textbox" placeholder=" Ad Soyad"  name="ad_soyad"><br>
                        <input type="email" class="textbox" placeholder="  E-Mail Adresiniz"  name="mail"><br>
                        <input type="number" class="textbox" placeholder=" Telefon Numaranız"  name="gsm">
                            <div class="clear"> </div>
                        <div>
                            <textarea placeholder="Mesajınız:" name="mesaj"  >Mesajınız</textarea><br>
                        </div>	
                       <div class="submit"> 
                        <button type="submit" name="iletisimgonder" class="btn btn-default cont-btn">MESAJI GÖNDER</button>
                          
                      </div>
                    </form>
             
                </div>
            </div>
        </div>
	 <br><br><br>
       <?php include'footer.php'; ?>
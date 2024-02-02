<?php include'header.php'; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Anasaya</a></li> 
                    <li class="active">ÜYE KAYDI</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>ÜYE KAYDI</h3> 
				<p>Üyeliğiniz varsa, <a href="uye-giris.php">Giriş yapın</a></p>
				 <form id="uyekayit" action="" method="post"   >
						<input type="hidden" name="kullanicikaydet">
					<ul>
						<li class="text-info">Adınız</li>
						<li><input type="text"   name="kullanici_ad"></li>
					</ul>
					<ul>
						<li class="text-info">Soyadınız </li>
						<li><input type="text"   name="kullanici_soyad"></li>
					 </ul>				 
					<ul>
						<li class="text-info">Email Adresiniz </li>
						<li><input type="text"   name="kullanici_mail"></li>
					</ul>

					<ul>
						<li class="text-info">Telefon Numaranız</li>
						<li><input type="text"   name="kullanici_gsm"></li>
					</ul>


					<ul>
						<li class="text-info">Şifreniz </li>
						<li><input type="password"   name="kullanici_password1"></li>
					</ul>
					<ul>
						<li class="text-info">Şifreniz Tekrar</li>
						<li><input type="password"     name="kullanici_password2"></li>
					</ul><br><br>
 <button style="background: black; padding: 5px 20px; border: none;color: white;" type="button" id="kayitgonder">KAYIT OL</button>			
					 <div style="color: red;   margin-top: 10px;" class="hata"></div>
					  <div style="  margin-top: 10px;" class="bas"></div>
				</form>
			</div>
		</div>
	</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $("#kayitgonder").click(function() {

        $.ajax({

type:"post",
url:"admin/netting/islem-admin.php",
data:$("#uyekayit").serialize(),
success:function(cevap) {

if(cevap==1) {
    $(".hata").delay(500).text("İşlem Başarısız");
    $(".hata").addClass("animated shake");
} if(cevap==2) {
    $(".hata").delay(500).text("Bu Email Adresi İle daha önce kayıt olunmuş");
    $(".hata").addClass("animated shake");
} if(cevap==3) {
    $(".hata").delay(500).text("Şifrenİz en az 6 Karakter Uzunluğunda olmalıdır");
    $(".hata").addClass("animated shake");
} if(cevap==4) {
    $(".hata").delay(500).text("Girilen Şifreler Eşleşmiyor");
    $(".hata").addClass("animated shake");
} if(cevap==5) {
    
    document.location.href = './';
} if(cevap==6) {
    $(".hata").delay(500).text("Lütfen Adınızı Girin");
    $(".hata").addClass("animated shake");
} if(cevap==7) {
    $(".hata").delay(500).text("Lütfen Soyadınızı Girin");
    $(".hata").addClass("animated shake");
} if(cevap==8) {
    $(".hata").delay(500).text("Lütfen Email Adresinizi Girin");
    $(".hata").addClass("animated shake");
} if(cevap==9) {
    $(".hata").delay(500).text("Lütfen Telefon Numaranızı Girin");
    $(".hata").addClass("animated shake");
}

}

        })
    })
</script> 


        <?php include'footer.php'; ?>
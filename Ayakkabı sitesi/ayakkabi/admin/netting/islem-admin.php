 <?php 
ob_start();
session_start(); 
error_reporting(0); 

include'baglan.php'; 
include'../fonksiyon.php';

$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array('id' =>0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

 

 
 
 

// İLETİŞİM AYAR GÜNCELLEME

if (isset($_POST['iletisimayarkaydet'])) {

if (isset($_POST['durum_tel'])) {
    $durum_tel=1;
} else {
    $durum_tel=0;
}

if (isset($_POST['durum_gsm'])) {
    $durum_gsm=1;
} else {
    $durum_gsm=0;
}

 

$ayar_tel=htmlspecialchars($_POST['ayar_tel']);
$ayar_gsm=htmlspecialchars($_POST['ayar_gsm']); 
$ayar_mail=htmlspecialchars($_POST['ayar_mail']);
$ayar_il=htmlspecialchars($_POST['ayar_il']);
$ayar_ilce=htmlspecialchars($_POST['ayar_ilce']);
$ayar_adres=htmlspecialchars($_POST['ayar_adres']);

    $ayarkaydet=$db->prepare("UPDATE ayar SET 

ayar_tel=:ayar_tel,
ayar_gsm=:ayar_gsm, 
ayar_mail=:ayar_mail,
ayar_il=:ayar_il,
ayar_ilce=:ayar_ilce,
ayar_adres=:ayar_adres,
durum_tel=:durum_tel,
durum_gsm=:durum_gsm 
WHERE ayar_id=0");

    $update=$ayarkaydet->execute(array(
'ayar_tel' => $ayar_tel,
'ayar_gsm' => $ayar_gsm, 
'ayar_mail' => $ayar_mail,
'ayar_il' => $ayar_il,
'ayar_ilce' => $ayar_ilce,
'ayar_adres' => $ayar_adres,
'durum_tel' => $durum_tel,
'durum_gsm' => $durum_gsm

    ));

    if ($update) {
        echo "<script>window.location = '../iletisim-ayar.php?durum=ok'</script>";
        
        
    } else {
        echo "<script>window.location = '../iletisim-ayar.php?durum=no'</script>";
        
    }
}         





// HAKKIMIZDA GÜNCELLEME ------------------------------------------------------------------------------------------------------------------

if (isset($_POST['hakkimizdakaydet'])) {
    $hakkimizda=$_POST['hakkimizda'];

    $ayarkaydet=$db->prepare("UPDATE kurumsal SET 

hakkimizda=:hakkimizda
WHERE kurumsal_id=0");

    $update=$ayarkaydet->execute(array(

'hakkimizda' => $hakkimizda
    ));  

    if ($update) {
        echo "<script>window.location = '../hakkimizda.php?durum=ok'</script>";
        
        
    } else {
        echo "<script>window.location = '../hakkimizda.php?durum=no'</script>";
        
        
    }
}      


   

    

 
 

 
 

 

 


 
 

 

 

// GENEL AYAR KAYDET ------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['genelayarkaydet'])) {

 


$ayar_title=htmlspecialchars($_POST['ayar_title']); 
$ayar_firma=htmlspecialchars($_POST['ayar_firma']);

    $ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_firma=:ayar_firma,
ayar_title=:ayar_title
WHERE ayar_id=0");

    $update=$ayarkaydet->execute(array(
'ayar_firma' => $ayar_firma,
'ayar_title' => $ayar_title
    ));

    if ($update) {

 

        echo "<script>window.location = '../genel-ayarlar.php?durum=ok'</script>";
        
        
    } else {
        echo "<script>window.location = '../genel-ayarlar.php?durum=no'</script>";
        
        
    }
}    

// SLİDER EKLEME -------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['anasliderekle'])) {

if (isset($_POST['slider_durum'])) {
    $slider_durum=1;
} else {
    $slider_durum=0;
}


         if ($_FILES['slider_resimyol']['size']>2097152) {
              echo "<script>window.location = '../slider-ekle.php?durum=dosyabuyuk'</script>";
              exit;
    

}
    $izinli_uzantilar=array('jpg','gif','png');
    
    $ext=strtolower(substr($_FILES['slider_resimyol']["name"], strpos($_FILES['slider_resimyol']["name"],'.')+1)); 
    if (in_array($ext, $izinli_uzantilar)=== false) {
         echo "<script>window.location = '../slider-ekle.php?durum=uzanti'</script>";
         exit;
    
    
    } 

        $uploads_dir = '../../slider';
        @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
        @$name = $_FILES['slider_resimyol']["name"];
        $say1=rand(100,200);
        $say2=rand(200,300);
        $say3=rand(300,400);
        $say=$say1.$say2.$say3;
        $resimgyol=substr($uploads_dir, 6)."/".$say.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$say$name");

         $slider_link=htmlspecialchars($_POST['slider_link']);
        $slider_baslik=htmlspecialchars($_POST['slider_baslik']);
        $slider_anabaslik=htmlspecialchars($_POST['slider_anabaslik']);
        $slider_buton=htmlspecialchars($_POST['slider_buton']);
        $slider_sira=htmlspecialchars($_POST['slider_sira']);


        $ekle=$db->prepare("INSERT INTO slider SET 

            
            slider_baslik=:slider_baslik, 
            slider_anabaslik=:slider_anabaslik, 
            slider_sira=:slider_sira,
            slider_durum=:slider_durum,                      
            slider_resimyol=:resimyol ");

        $insert=$ekle->execute(array(

            
            'slider_baslik' => $slider_baslik,
            'slider_anabaslik' => $slider_anabaslik, 
            'slider_sira' => $slider_sira,
            'slider_durum' => $slider_durum,
            'resimyol' => $resimgyol
        ));

        if ($insert) {

        
            echo "<script>window.location = '../slider-ekle.php?durum=ok'</script>";
            

        } else {
            echo "<script>window.location = '../slider-ekle.php?durum=no'</script>";
           

        }  }       


//  SLİDER SİLME -----------------------------------------------------------------------------------------------------------------------------------------------

            if ($_GET['anaslidersil']=="ok") {

                                $sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
                                $kontrol=$sil->execute(array(
                                    'slider_id' => $_GET['slider_id']));

                                if ($kontrol) {

            $resimsilunlink=$_GET['eski_yol'];
            unlink("../$resimsilunlink");
                                    echo "<script>window.location = '../slider.php?sil=ok'</script>";
                                 
                                  

                                } else {
                                        echo "<script>window.location = '../slider.php?sil=no'</script>";
                                    
                                   
                                }
                            }

// SLİDER GÜNCELLEME ----------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['asguncelle'])) {

if (isset($_POST['slider_durum'])) {
    $slider_durum=1;
} else {
    $slider_durum=0;
}
$sid=$_POST['slider_id'];


if ($_FILES['slider_resimyol']['size']>0) {

     if ($_FILES['slider_resimyol']['size']>2097152) {
              echo "<script>window.location = '../slider-duzenle.php?durum=dosyabuyuk&slider_id=$sid'</script>";
              exit;
    

}
    $izinli_uzantilar=array('jpg','gif','png');
    
    $ext=strtolower(substr($_FILES['slider_resimyol']["name"], strpos($_FILES['slider_resimyol']["name"],'.')+1)); 
    if (in_array($ext, $izinli_uzantilar)=== false) {
         echo "<script>window.location = '../slider-duzenle.php?durum=uzanti&slider_id=$sid'</script>";
         exit;
    
    
    } 

        $uploads_dir = '../../slider';
        @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
        @$name = $_FILES['slider_resimyol']["name"];
        $say1=rand(100,200);
        $say2=rand(200,300);
        $say3=rand(300,400);
        $say=$say1.$say2.$say3;
        $resimgyol=substr($uploads_dir, 6)."/".$say.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$say$name");

$resimsilunlink=$_POST['eskiyol'];
            unlink("../../$resimsilunlink");


} else {
    $resimgyol=$_POST['eskiyol'];
}



 



$slider_id=$_POST['slider_id']; 
$slider_sira=htmlspecialchars($_POST['slider_sira']);
$slider_baslik=htmlspecialchars($_POST['slider_baslik']);
$slider_anabaslik=htmlspecialchars($_POST['slider_anabaslik']); 

    $ayarkaydet=$db->prepare("UPDATE slider SET 

 
slider_sira=:slider_sira,
slider_baslik=:slider_baslik,
slider_anabaslik=:slider_anabaslik, 
slider_durum=:slider_durum,
slider_resimyol=:slider_resimyol
WHERE slider_id={$_POST['slider_id']}");

    $update=$ayarkaydet->execute(array(
 
'slider_sira' => $slider_sira,
'slider_baslik' => $slider_baslik,
'slider_anabaslik' => $slider_anabaslik, 
'slider_durum' => $slider_durum,
'slider_resimyol' => $resimgyol

    ));

    if ($update) {
        echo "<script>window.location = '../slider-duzenle.php?slider_id=$slider_id&durum=ok'</script>";
       
       
    } else {
        echo "<script>window.location = '../slider-duzenle.php?slider_id=$slider_id&durum=no'</script>";
      
        
    }
}

// ARAÇ DÜZENLEME -------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['urunduzenle'])) {

 if (isset($_POST['durum'])) {
    $durum=1;
} else {
    $durum=0;
}

  if ($_FILES['urun_resimyol']['size']>0) {
    
    $ext=strtolower(substr($_FILES['urun_resimyol']["name"], strpos($_FILES['urun_resimyol']["name"],'.')+1)); 
 

        $uploads_dir = '../../galeri';
        @$tmp_name = $_FILES['urun_resimyol']["tmp_name"];
        @$name = $_FILES['urun_resimyol']["name"];
        $say=uniqid();
        $resimgyol=substr($uploads_dir, 6)."/".$say.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$say$name");

    } else {
        $resimgyol=$_POST['eskiyol'];
    }


    $ayarkaydet=$db->prepare("UPDATE urun SET 


durum=:durum,
baslik=:baslik,
fiyat=:fiyat,
cinsiyet=:cinsiyet, 
urun_resimyol=:urun_resimyol,
detay=:detay WHERE id={$_POST['id']}


");

    $update=$ayarkaydet->execute(array(

'durum' => $durum,
'baslik' => $_POST['baslik'],
'fiyat' => $_POST['fiyat'],
'cinsiyet' => $_POST['cinsiyet'],
'urun_resimyol' => $resimgyol,
'detay' => $_POST['detay']

    ));

    if ($update) {

echo "<script>window.location = '../urun.php?durum=ok'</script>";
       
        
    } else {
echo "<script>window.location = '../urun.php?durum=no'</script>";
        
    }
}


// ARAÇ EKLEME --------------------------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['urunekle'])) {
 if (isset($_POST['durum'])) {
    $durum=1;
} else {
    $durum=0;
}

  
    
    $ext=strtolower(substr($_FILES['urun_resimyol']["name"], strpos($_FILES['urun_resimyol']["name"],'.')+1)); 
 

        $uploads_dir = '../../galeri';
        @$tmp_name = $_FILES['urun_resimyol']["tmp_name"];
        @$name = $_FILES['urun_resimyol']["name"];
        $say=uniqid();
        $resimgyol=substr($uploads_dir, 6)."/".$say.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$say$name");


    $ayarkaydet=$db->prepare("INSERT INTO urun SET 


durum=:durum,
baslik=:baslik,
fiyat=:fiyat,
cinsiyet=:cinsiyet, 
urun_resimyol=:urun_resimyol,
detay=:detay


");

    $update=$ayarkaydet->execute(array(

'durum' => $durum,
'baslik' => $_POST['baslik'],
'fiyat' => $_POST['fiyat'],
'cinsiyet' => $_POST['cinsiyet'],
'urun_resimyol' => $resimgyol,
'detay' => $_POST['detay']

    ));

    if ($update) {
 

echo "<script>window.location = '../urun.php?durum=ok'</script>";
        
        
    } else {
echo "<script>window.location = '../urun.php?durum=no'</script>";
        
    }
}

// ARAÇ SİLME --------------------------------------------------------------------------------------------------------------------------------------------------------


   if ($_GET['urunsil']=="ok") {
$uid=$_GET['urun_id'];

                                $sil=$db->prepare("DELETE from urun where id=:id");
                                $kontrol=$sil->execute(array(
                                    'id' => $_GET['urun_id']));

                   if ($kontrol) {
 

                                            echo "<script>window.location = '../urun.php?durum=ok'</script>";
                                           
                                           

                                        } else {
                                            echo "<script>window.location = '../urun.php?durum=no'</script>";
                                            

                                        }
                            }

// MESAJ SİL---------------------------------------------------------------------------------------------------------------------------------------------------------


            if ($_GET['iletisimsil']=="ok") {

                                $sil=$db->prepare("DELETE from iletisim where iletisim_id=:iletisim_id");
                                $kontrol=$sil->execute(array(
                                    'iletisim_id' => $_GET['iletisim_id']));

                                if ($kontrol) {
                                    echo "<script>window.location = '../mesajlar.php?sil=ok'</script>";
                                    
                                    
                                } else {
                                    echo "<script>window.location = '../mesajlar.php?sil=no'</script>";
                                      
                                      
                                }

                            }   
  
         


// ADMİN GİRİŞ ------------------------------------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['admingiris'])) { 

$admin_mail=htmlspecialchars($_POST['admin_mail']);
$admin_sifre=htmlspecialchars($_POST['admin_sifre']);


$kullanicisor=$db->prepare("SELECT * FROM admin where admin_mail=:mail and admin_sifre=:password ");
$kullanicisor->execute(array(
'mail' =>$admin_mail,
'password' => $admin_sifre


));

$say=$kullanicisor->rowCount();

if ($say==1) {

$_SESSION['admin_mail']=$admin_mail;


echo "<script>window.location = '../index.php?durum=ok'</script>";
    
    
}
else {
    echo "<script>window.location = '../login.php?durum=no'</script>";
   
    
}

}

 
 


// ADMİN ŞİFRE DEĞİŞTİRME ---------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['adminguncelle'])) { 


    
$sifre1=trim($_POST['sifre1']);
$sifre2=trim($_POST['sifre2']);


    if ($sifre1==$sifre2) {

        $sifre=$sifre2;


$adminkaydet=$db->prepare("UPDATE admin set

                    admin_sifre=:admin_sifre

WHERE admin_id=0");

$insert=$adminkaydet->execute(array(


'admin_sifre' => $sifre
));

                if ($insert) {
echo "<script>window.location = '../admin-duzenle.php?durum=ok'</script>";
             
                    

                } } else {
echo "<script>window.location = '../admin-duzenle.php?durum=eslesmiyor'</script>";
   
                    
                }         

 

}  

 

 

                   
if (isset($_POST['iletisimgonder'])) {

    $ad_soyad=$_POST['ad_soyad'];
    $mail=$_POST['mail'];
    $gsm=$_POST['gsm'];
    $mesaj=$_POST['mesaj'];

 
 


    $ayarkaydet=$db->prepare("INSERT INTO iletisim SET 

ad_soyad=:ad_soyad,
mail=:mail,
gsm=:gsm,
mesaj=:mesaj
");

    $update=$ayarkaydet->execute(array(
'ad_soyad' => $_POST['ad_soyad'],
'mail' => $_POST['mail'],
'gsm' => $_POST['gsm'],
'mesaj' => $_POST['mesaj']

    ));

    if ($update) {
        echo "<script>window.location = '../../iletisim.php?durum=ok'</script>";
    
    } else {
        echo "<script>window.location = '../../iletisim.php?durum=no'</script>";
      
    }
}           

     if (isset($_POST['profilll'])) {
 
                                    $query = $db->prepare("UPDATE admin set 

                                        ad=:ad,
                                        soyad=:soyad,
                                        admin_mail=:admin_mail
                                   WHERE admin_id=0     ");

                                    $insert=$query->execute(array(

                                        'ad' => $_POST['ad'],
                                        'soyad' => $_POST['soyad'],
                                        'admin_mail' => $_POST['admin_mail']
                                    ));

                                    if ($insert) {
echo "<script>window.location = '../profil-guncelle.php?durum=ok'</script>";
                                      

                                    } else {

echo "<script>window.location = '../profil-guncelle.php?durum=no'</script>";

                                    }  }



if (isset($_POST['kullanicikaydet'])) {



   $kullanici_ad=htmlspecialchars($_POST['kullanici_ad']); 
   $kullanici_soyad=htmlspecialchars($_POST['kullanici_soyad']); 
   $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); 
   $kullanici_gsm=htmlspecialchars($_POST['kullanici_gsm']);
   $kullanici_password1=trim($_POST['kullanici_password1']);
   $kullanici_password2=trim($_POST['kullanici_password2']);


if (empty($kullanici_ad)) {
    echo "6";
    exit();
} 

if (empty($kullanici_soyad)) {
    echo "7";
    exit();
} 

if (empty($kullanici_mail)) {
    echo "8";
    exit();
}

   if (empty($kullanici_gsm)) {
    echo "9";
    exit();
}  

   







    if ($kullanici_password1==$kullanici_password2) {

        if (strlen($kullanici_password1)>=6) {          

// Başlangıç

            $kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail");
            $kullanicisor->execute(array(
                'mail' => $kullanici_mail
                ));

            //dönen satır sayısını belirtir
            $say=$kullanicisor->rowCount();

            if ($say==0) {

                //md5 fonksiyonu şifreyi md5 şifreli hale getirir.
                $password=md5($kullanici_password1);

                $kullanici_yetki=1;

            //Kullanıcı kayıt işlemi yapılıyor...
                $kullanicikaydet=$db->prepare("INSERT INTO kullanici SET
                    kullanici_ad=:kullanici_ad,
                    kullanici_soyad=:kullanici_soyad,
                    kullanici_gsm=:kullanici_gsm,
                    kullanici_mail=:kullanici_mail,
                    kullanici_password=:kullanici_password,
                    kullanici_yetki=:kullanici_yetki
                    ");
                $insert=$kullanicikaydet->execute(array(
                    'kullanici_ad' => $kullanici_ad,
                    'kullanici_soyad' => $kullanici_soyad,
                    'kullanici_gsm' => $kullanici_gsm,
                    'kullanici_mail' => $kullanici_mail,
                    'kullanici_password' => $password,
                    'kullanici_yetki' => $kullanici_yetki
                    ));

                if ($insert) {


        $_SESSION['userkullanici_mail']=$kullanici_mail;     

echo "5";

                 
                    

                } else {
                    echo "1";
                    
                    
                }

            } else {
                echo "2";
                
                
            }

        // Bitiş

        } else {
echo "3";
           
            
        }

    } else {
echo "4";
     
        
    }  

}      


if (isset($_POST['uyegirisi'])) {
    
    $gelen_url=$_POST['gelen_url'];
    $gelenurl=strlen($gelen_url);

    
    $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); 
   $kullanici_password=md5($_POST['kullanici_password']); 

    $kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail  and kullanici_password=:password ");
    $kullanicisor->execute(array(
        'mail' => $kullanici_mail,        
        'password' => $kullanici_password
       
        ));




    $say=$kullanicisor->rowCount();

    if ($say==1) {

        $_SESSION['userkullanici_mail']=$kullanici_mail;
        if ($gelenurl>2) {
            

            echo "<script>window.location = '$gelen_url'</script>";
            
        } else {

            echo "<script>window.location = '../../index.php'</script>";

        
             

    } } else {

        echo "<script>window.location = '../../uye-giris.php?durum=basarisizgiris'</script>";

        
        
    }

}


                                    
 ?>

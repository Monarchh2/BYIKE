<?php ob_start();
session_start();
set_time_limit(0);
error_reporting(0); 

include'baglan.php'; 
include'../fonksiyon.php';
include'class.php'; 

$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array('id' =>0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['odemee'])) {

$kullanici_id=$_POST['kullanici_id'];
$siparis_tip=$_POST['siparis_tip'];
$kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']);
$kullanici_cep=htmlspecialchars($_POST['kullanici_cep']);
$kullanici_adres=htmlspecialchars($_POST['kullanici_adres']);


    $ayarkaydet=$db->prepare("INSERT INTO siparis SET 

kullanici_id=:kullanici_id,
siparis_tip=:siparis_tip,
siparis_toplam=:siparis_toplam,
kullanici_adsoyad=:kullanici_adsoyad,
kullanici_cep=:kullanici_cep,
kullanici_adres=:kullanici_adres


");

    $update=$ayarkaydet->execute(array(
'kullanici_id' => $kullanici_id,
'siparis_tip' => $siparis_tip,
'siparis_toplam' => $_POST['siparis_toplam'],
'kullanici_adsoyad' => $kullanici_adsoyad,
'kullanici_cep' => $kullanici_cep,
'kullanici_adres' => $kullanici_adres



    ));

    if ($update) {
   
$siparis_id=$db->lastInsertId();

$kullanici_id=$kullanici_id;
$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
$sepetsor->execute(array(
'id' =>$kullanici_id
));

while ($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) { 

    $urun_id=$sepetcek['urun_id'];
    $urun_adet=$sepetcek['urun_adet'];
    $urun_beden=$sepetcek['urun_beden'];


$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(
'id' =>$urun_id
));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

$urun_fiyat=$uruncek['urun_fiyat'];
    

    $ayarkaydet=$db->prepare("INSERT INTO siparis_detay SET 

siparis_id=:siparis_id,
urun_id=:urun_id,
urun_adet=:urun_adet,
urun_beden=:urun_beden,
urun_fiyat=:urun_fiyat

");

$update=$ayarkaydet->execute(array(
'siparis_id' => $siparis_id,
'urun_id' => $urun_id,
'urun_adet' => $urun_adet,
'urun_beden' => $urun_beden,
'urun_fiyat' => $urun_fiyat
    ));
}

$sepetsorgu=$db->prepare("select * from sepet where kullanici_id=:kullanici_id");
$sepetsorgu->execute(array(

'kullanici_id' => $kullanici_id ));

 $sil=$db->prepare("DELETE from sepet");
                                $kontrol=$sil->execute();

                             if ($kontrol) {
                                echo "<script>window.location = '../../sipariiis.php?siparis_id=$siparis_id'</script>";
                                   
                                  

                            } else {
                                echo "<script>window.location = '../../siparislerim.php?durum=no'</script>";
                          
                             

                            }

    } 
} 

 ?>
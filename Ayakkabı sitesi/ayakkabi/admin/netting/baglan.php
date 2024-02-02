<?php 

try {

$db=new PDO("mysql:host=localhost;dbname=byike;charset=utf8",'root','mysql');//Bilgiler acana göre değiştiriliyor 



}


catch (PDOexpception $e) {

echo $e->getMessage();

}

 ?>

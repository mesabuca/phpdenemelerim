<?php


$p = new pdo('mysql:host=localhost;dbname=test', 'root', '123456');

if($p) {
   echo 'Bağlantı kuruldu.';

  }
 else {
   echo 'Bağlantı kurulamadı.';
}


?>

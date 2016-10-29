<html>
   <head>
      <title>Kayıt Al</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
 <?php
   include_once("phpmysqlcon.php");
   if ($_POST){

/*$record=$_POST["text"];*/
$record = htmlentities($_POST['text'], ENT_QUOTES, 'UTF-8');
$sql = "INSERT INTO record(content) VALUES (:metin)";
$query = $p->prepare($sql);
$sonuc = $query->execute(array(':metin'=>$record));

if ($sonuc) {
 echo "<u><b>Yazdığınız metin başarı ile kaydedilmiştir.</b></u><br>";
}

}
   ?>
   </body>
</html>

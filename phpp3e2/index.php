<?php
$nombre = 0;
$nombrea = 23;

while($nombre <=20){
  $result = ($nombre *$nombrea);
  $nombre++;
}
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title></title>
   </head>
   <body>
     <p><?= $result; ?></p>
   </body>
 </html>

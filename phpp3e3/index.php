<?php
$number = 100;
$numberA = 25;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>phpp3e3</title>
   </head>
   <body>
     <?php
     while($number > 10){
       $result = $number * $numberA; ?>
       <p><?= $result; ?></p>
       <?php $number--;
      } ?>

   </body>
 </html>

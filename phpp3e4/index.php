<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp3e4</title>
  </head>
  <body>
      <?php
      $number = 1;
      while($number < 10){ ?>
        <p><?= $number ?></p>
        <?php  $number += $number/2;
      }
      ?>
  </body>
</html>

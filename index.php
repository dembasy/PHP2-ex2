<?php
  $isEasy = false;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice</title>
  </head>
  <body>
    <p><?php
    if ($isEasy === true){
      echo 'Cest facile';
    } else {
      echo 'Cest difficile';
    }
    ?></p>
  </body>
</html>

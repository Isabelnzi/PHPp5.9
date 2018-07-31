<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>P5ex9</title>
  </head>
  <body>
    <p>
  <?php
  $departement = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise',
   '62' => 'Pas-de-Calais',' 80' => 'Somme');
  foreach($departement as  $element){
    echo $element.'<br />';
  }
 ?>
</p>
</body>

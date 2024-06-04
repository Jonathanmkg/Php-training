# Php-training
ITOTAFRICA


<?php

function convertion($taux,$montant){

    $solution= $taux *$montant;

     return $solution;
}
$taux= isset($_POST['taux']) ?$_POST['taux']:'1' ;
$montant=isset( $_POST['montant']) ?$_POST['montant']:'1';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>convertion dollars & francs</title>
</head>
<body>
    <h1>Convertissez vos dollars en francs en quelque clics</h1>
    <hr>
   <form action="" method="post">

   <input type="number"  name="taux"  required placeholder="Entrez le taux de change" value="2750">
    <input type="number" name="montant" required  placeholder="Entrez le montant en dollar">
    <button type="submit">Calculer</button>

   </form>
   <hr>
   <h4> argent en franc vaut: <span><?= convertion($taux,$montant) ?> fc</span> </h4>
   <br>
   <input type="submit" value="convert"
   
</body>
</html>

<?php

function convertdollarstofrancs($rate, $amount){
    $result= $rate * $amount;
    return $result;
}

function convertfrancstodollars($rate, $amount){
    $result= $amount / $rate;
    return $result;
}

$amount = $_POST["amount"] ?? null;
$rate = $_POST["rate"] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate</title>
</head>
<body>
   <h1>Rate exchange of dollars to francs congolais</h1>
   <form action="" method="post">
        <input type="number" name="amount" placeholder= "insert the value 1$ in fc" required>
        <input type="text" name="rate" placeholder="insert the amount in fc" required>
        <button type="submit">convert</button>
   </form> 

   <p>Your money in fc is <?= convertdollarstofrancs($rate, $amount) ?> FC</p>

   <h1>exchange of francs to dollars</h1>
   <form action= "" method="post">
        <input type="number" name="amount" placeholder= "insert the value 1$ in fc" required>
        <input type="text" name="rate" placeholder="insert the amount in fc" required>
        <button type="submit">convert</button>  
   </form>

   <p>Your amount in dollars is :<?= $rate == 0 ? "division by zero" : convertfrancstodollars($rate, $amount) ?> </p>
   
</body>
</html>
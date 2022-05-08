<?php

$price = 3;
$quantity = 6;

function calculate_total(int $price, int $quantity): int
{
    return $price * $quantity;
}

$total = calculate_total($price, $quantity);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type declarations</title>
</head>

<body>

    <h1>Tickets</h1>
    <p>Total $<?= $total ?></p>

</body>

</html>
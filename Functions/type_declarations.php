<?php

declare(strict_types=1); // if the types do not match an error message will be displayed

$price = 3;
$quantity = 6;


function calculate_total(int $price, int $quantity, int $discount = 0): int
{
    return $price * $quantity - $discount;
}

$total = calculate_total($price, $quantity, 3);

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
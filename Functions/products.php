<?php

$name = 'Taavi';
$greeting = 'Hello ' . $name;
$price = 3;


for ($i = 1; $i <= 10; $i++) {
    $arr[$i] = $i * $price;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <?= $greeting ?>

    <h1>Your products</h1>

    <?php foreach ($arr as $key => $price) { ?>

        <p>
            <?= $key ?> product<?= ($key === 1) ? '' : 's' ?> price is $<?= $price ?>
        </p>
    <?php } ?>

    <p></p>
</body>

</html>
<?php


function add($a, $b)
{
    $res = '';
    $res .= $a;
    $res .= ' + ' . $b . ' = ';

    $res .= $a + $b;
    echo $res;
    // echo "$a + $b = " . $a + $b;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?= add(2, 3) ?>
</body>

</html>
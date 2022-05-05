<?php
$intString = 1 + '3';
$intString2 = 1 + '2abc';
$intBool = 1 + true;
$intBool2 = 1 + false;
$concatenate = '1' . 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converting data types</title>
</head>


<body>
    <p>1 + '3' = <?= $intString ?></p>
    <p>1 + '2abc' = <?= $intString2 ?></p>
    <p>1 + true = <?= $intBool ?></p>
    <p>1 + false = <?= $intBool2 ?></p>
    <p>'1' . 2 = <?= $concatenate ?></p>

</body>

</html>
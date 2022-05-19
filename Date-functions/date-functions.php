<?php
$start = strtotime('May 19 2022');
// var_dump($start);
$end = mktime(0, 0, 0, 6, 1, 2022);

$start_date = date('l, d M Y', $start);
$end_date = date('l, d M Y', $end);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date functions</title>
</head>

<body>
    <p>Sale starts: <?= $start_date ?></p>
    <p>Sale ends: <?= $end_date ?></p>
</body>

</html>
<?php
// $start = strtotime('May 19 2022');
// var_dump($start);
// $end = mktime(0, 0, 0, 6, 1, 2022);

// $start_date = date('l, d M Y', $start);
// $end_date = date('l, d M Y', $end);


$start = new DateTime('2022-05-19 17:25');
$end = date_create_from_format('Y-m-d H:i', '2022-06-19 17:25');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date functions</title>
</head>

<body>
    <!-- <p>Sale starts: <?= $start_date ?></p>
    <p>Sale ends: <?= $end_date ?></p> -->
    <p>Sale starts: <?= $start->format('l, jS M Y H:i') ?></p>
    <p>Sale ends: <?= $end->format('l, jS M Y') ?> at <?= $end->format('H:i') ?></p>
</body>

</html>
<?php

$option = '';
$result = '';
$counter = 1;
$arr = [
    // 'greeting' => 'hello',
    // 'greeting2' => 'hello2',
    // 'greeting3' => 'hello3',
    'a', 'b', 'c'
];

// switch ($option) {
//     case 'a':
//         $result = 'a';
//         break;
//     case 'b':
//         $result = 'b';
//         break;
//     case 'c':
//         $result = 'c';
//         break;
//     default:
//         $result = 'No chars';
// }

// works with PHP 8 >
// $chars = match($option){
//     'a' => 'a',
//     'b' => 'b',
//     'c' => 'c',
//     default => 'No chars',
// }
// -----------------------------



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statements</title>
</head>

<body>
    <?php include 'header.php' ?>

    <?php

    // while loop
    // while ($counter < 10) {
    //     echo $counter;
    //     echo '<br>';
    //     $counter++;
    // }

    // foreach
    foreach ($arr as $key => $value) {
        echo "$key";
        echo '<br>';
        echo "$value";
        echo '<br>';
        echo "$key => $value";
        echo '<br>';
    }
    ?>
</body>

</html>
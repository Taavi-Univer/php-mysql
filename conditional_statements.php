<?php

$option = '';
$result = '';

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

$chars = match($option){
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    default => 'No chars',
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statements</title>
</head>

<body>
    <?= $chars ?>
</body>

</html>
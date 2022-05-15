<?php

declare(strict_types=1);

$age = '';
$message = '';

function is_number($number, int $min = 0, int $max = 100): bool
{
    return ($number >= $min and $number <= $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];
    $valid = is_number($age, 16, 65);

    if ($valid) {
        $message = 'Age is valid';
    } else {
        $message = 'You must be 16-65';
    }
}
?>
<?= $message ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form valid number</title>
</head>

<body>
    <form action="valid_number.php" method="POST">
        Age: <input type="text" name="age" size="3" value="<?= htmlspecialchars($age) ?>">
        <input type="submit" value="Save">
    </form>
</body>

</html>
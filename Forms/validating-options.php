<?php
$stars = '';
$message = '';
$star_ratings = [1, 2, 3, 4, 5, 6];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stars = $_POST('stars') ?? '';
    $valid = in_array($stars, $star_ratings);
    $message = $valid ? 'Thank you' : 'Select an option';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate options</title>

</head>

<body>
    <?= $message ?>

    <form action="validating-options.php" method="POST">
        Star rating:
        <?php foreach ($star_ratings as $option) { ?>
            <?= $option ?> <input type="radio" name="stars" value="<?= $option ?>" <?= ($stars == $option) ? 'checked' : '' ?>>
        <?php } ?>
    </form>
    <input type="submit" value="Save">
</body>

</html>
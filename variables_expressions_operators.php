<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Year</title>
</head>

<?php
$member = [
    ['firstName' => 'Taavi', 'age' => 41, 'country' => 'Estonia'],
    ['firstName' => 'Tru', 'age' => 42, 'country' => 'Estonia'],
    ['firstName' => 'Fal', 'age' => 43, 'country' => 'Estonia'],

];

// $member = array(
//     'name' => 'Taavi',
//     'age' => 41,
//     'country' => 'Estonia'
// );

$member['lastName'] = 'Univer';

$fName = 'Taavi';
$lName = 'Univer';

$name = '';
$name .= $fName;
$name .= " $lName";



?>

<body>


    <p>Date: <?php echo date('d M Y') ?></p>
    <p>First name: <?php echo $member[0]['firstName']; ?></p>

    <p>Last name: <?php echo $member['lastName']; ?></p>

    <p>Age: <?php echo $member[0]['age']; ?></p>
    <p>Country: <?php echo $member[0]['country']; ?></p>

    <p>------ get value with index -----------</p>
    <p>First Name: <?php echo $member[1]['firstName']; ?></p>

    <p>----- concatenated text -------</p>
    <p><?= 'first name' . ' last name' ?></p>
    <p>name: <?= "$fName $lName" ?></p>
    <p><?= $name ?></p>

    <p>boolean 'true' can be treated as: <?= true ?></p>
    <p>boolean 'false' will not display anything</p>

    <p>--- spaceship operator PHP7 -- <=> ----</p>
    <p>equal: <?= 1 <=> 1 ?></p>
    <p>left side is greater: <?= 1 <=> 0 ?></p>
    <p>right side is greater: <?= 0 <=> 1 ?></p>
</body>

</html>
<?php
include ('./data/movie.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div>
        <h1> Titolo: <?= $firstMovie->title ?> </h1>
        <h1> Lingua: <?= $firstMovie->language ?> </h1>
        <h1> Genere: <?= $firstMovie->genre ?> </h1>
        <h1> Anno: <?= $firstMovie->year ?> </h1>
    </div>
    <hr>
    <div>
        <h1> Titolo: <?= $secondMovie->title ?> </h1>
        <h1> Lingua: <?= $secondMovie->language ?> </h1>
        <h1> Genere: <?= $secondMovie->genre ?> </h1>
        <h1> Anno: <?= $secondMovie->year ?> </h1>
    </div>
</body>
</html>
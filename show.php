<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <title>Dream Computer</title>
</head>
<body>

<?php require_once 'classes/Builder.php'?>

    <div class="container">
        <h2><?php $cust->eventHandler();?> </h2>
    </div>

    <hr>

    <div class="container">
        <?php
            echo 'Your computer CPU is ' . '<strong>' . $computer->getCpu() . '</strong>' . '<br>';
            echo 'Your computer Mother-board is ' . '<strong>' . $computer->getMboard() . '</strong>' . '<br>';
            echo 'Your computer RAM is ' . '<strong>' . $computer->getRam() . '</strong>' . '<br>';

            echo 'Your computer HDD is ' . '<strong>' . $computer->getHdd() . '</strong>' . '<br>';
            echo 'Your computer Video Card is ' . '<strong>' . $computer->getVcard() . '</strong>' . '<br>';
        ?>
    </div>



</body>
</html>
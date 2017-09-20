<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My comp</title>
</head>
<body>

<?php require_once 'index.php'?>

    <?php

        var_dump($comp);

        foreach($comp as $c=>$v)
        {
            echo 'PC part: ' . $c . ', ' . 'Component: ' . $v . '<br>';
        }

    ?>

</body>
</html>
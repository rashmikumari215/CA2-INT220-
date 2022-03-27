<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $user = $_SESSION["username"];
    echo " <h2>The username is $user as retrieved by session !!!</h2><br>";
    ?>
</body>

</html>
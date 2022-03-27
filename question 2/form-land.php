nni<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
session_start();
?>
<?php
$cookie_name = "user";
$cookie_value = $_POST["fullname"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");
?>
<?php
$error = false;
if (isset($_POST["submit"])) {
    $full_name = $_POST["fullname"];
    if (!preg_match("/^[a-zA-z\s]+$/", $full_name)) {
        $Err = " Error :(  Only alphabets and whitespace are allowed.";
        $error = true;
        echo "<br><br>";
        echo $Err;
    } else {
        echo "<br>";
        echo "<h3>Your name is : $full_name</h3>";
    }

    $mobile = $_POST["phone"];
    if (!preg_match("/^[0-9]+$/", $mobile)) {
        $error = true;
        $Err = "<br>Only numeric value is allowed. <br>";
        echo $Err;
    } else {
        echo  "<h3>Your phone number is : $mobile </h3>";
    }



    if (!$error) {
        echo "<h3>You are logged in successfully !!! </h3>";
        $full_name = $_POST["fullname"];
        $email =  $_POST["email"];
        $mobile = $_POST["phone"];

        $_SESSION["username"]  = $full_name;
        echo "<h3>Your cookies and session are set !!!! </h3> ";
    } else {
        echo "<br> <br>We have not set your cookies and sessions. This is due to invalid information provided in the form !!!";
    }
}
?>

<?php

if (!$error) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <br>
        <form action="logged-out.php" method="post">
            <input type="submit" class="btn btn-primary"value="Log Out" name="submit">
        </form>
    </body>

    </html>
<?php
}
?>
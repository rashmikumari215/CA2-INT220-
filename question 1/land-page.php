
<?php
session_start();
?>
<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $age =  $_POST["age"];
    $password = $_POST["password"];

    if ($username == "rasmi123@gmail.com" && $password == "password") {
        echo " <h2><br>You are logged in successfully !!<h2> ";
        $_SESSION["username"]  = $username;
        echo "<h2>Your sessions are set !! </h2><br> ";
        require 'hyperlinks.php';
    } else {
        echo "<br><h2>Incorrect details <h2>";
        echo "<h2>Your sessions are not set <h2>";
        session_unset();
        session_destroy();
        require 'hyperlinks-2.php';
    }
}
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid mt-5">
    <div class="col-sm-5">
    <form action="land-page.php" method="post" class="form-group">
        <label for="username" class="form-label ">Enter User Name :</label>
        <input type="text" id="username" name="username" class="form-control" value=""><br>
        <label for="age" class="form-label">Enter Age :</label><br>
        <input type="number" id="age" name="age" value="" class="form-control"><br>
        <label for="password" class="form-label">Enter Password:</label>
        <input type="password" id="password" name="password" value="" class="form-control"><br>
        <input type="submit" value="LOG-IN" class="btn btn-primary" name="submit">
    </form>
</div>
</div>
</body>
</html>
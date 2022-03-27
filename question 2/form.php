<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="col-sm-5">
            <br>
    <form action="form-land.php" method="post" class="form-group">
        <label for="fullname" class="form-label"> Enter The Name:</label><br>
        <input type="text" id="fullname" class="form-control" name="fullname" value=""><br>
        <label for="phone" class="form-label">Enter The Phone No:</label><br>
        <input type="number" id="phone" class="form-control" name="phone" value=""><br>
        <label for="fname" class="form-label">Enter The Email:</label><br>
        <input type="text" id="email" class="form-control" name="email" value=""><br>
        <input type="submit" value="Submit" class="btn btn-primary" name="submit">
    </form>
</div>
</div>
</body>

</html>
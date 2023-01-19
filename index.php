<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script defer src="script.js"></script>

<body>
    <div class="login">
        <h1 class="text-center">Log In</h1>
        <span class="errors"></span>
        <form action="getdata.php" class="needs-validation" method="POST">
            <div class="form-group">
                <lable  class="form-label" for="text">Username</lable>
                <input class="form-control" type="text" id="username" name="user" id="validationCustom01" required >
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please Enter Your Username</div>
            </div>
            <div class="form-group">
                <lable class="form-label" for="password">Password</lable>
                <input class="form-control" type="password" id="password" name="pass" id="validationCustom02" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please Enter Your Password</div>
            </div>
            <div class="form-group">
                <button class="btn btn-success w-100" type="submit" id="sub" name="btn"  >Log In</button>
            </div>
        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>

<body>
    <div class="login">
        <h1 class="text-center">Log In</h1>
        <form action="getdata.php" class="needs-validation" method="POST">
            <div class="form-group was-validated">
                <lable class="form-label" for="text">Username</lable>
                <input class="form-control" type="text" id="username" name="user" required>
                <div class="invalid-feedback">
                    Please enter your username
                </div>
            </div>
            <div class="form-group  was-validated">
                <lable class="form-label" for="password">Password</lable>
                <input class="form-control" type="password" id="password" name="pass" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-success w-100" type="submit" id="sub" name="btn" value="Log In" required>
            </div>
        </form>
    </div>
</body>
</html>
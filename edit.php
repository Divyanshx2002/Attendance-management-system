<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="editprofile">
        <h1 class="text-center">Edit Profile</h1>

        <form action="" class="needs-validation" method="POST">
            <div class="form-group">
                <lable class="form-label" for="text">Name</lable>
                <input class="form-control" type="text" id="name" name="name" id="validationCustom06" required>
            </div>
            <div class="form-group">
                <lable class="form-label" for="text">Username</lable>
                <input class="form-control" type="text" id="userName" name="userName" id="validationCustom07" required>
            </div>
            <div class="form-group">
                <lable class="form-label" for="text">Password</lable>
                <input class="form-control" type="password" id="passWord" name="passWord" id="validationCustom08" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success w-100" type="submit" id="subBtn" name="subBtn">Submit</button>
            </div>
    </div>
</body>

</html>
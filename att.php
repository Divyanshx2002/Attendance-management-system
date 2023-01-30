<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<script defer src="opop.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<body>
    <?php
    $table = "";
    include 'connect.php';
    if (isset($_POST['dasboard-btn'])) {
        $sql = "INSERT INTO attrecord  (entrytime, exittime) VALUES  ( '" . $_POST['Entime'] . "', '" . $_POST['Extime'] . "')";
        if ($conn->query($sql) === TRUE) {
            $table = "Submission Successfull";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    } else {
    ?>
        <section class="bcccck">
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="fs-5 d-none d-sm-inline"><img src="img/qqqqqq.png" alt=""></span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li>
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Attendance</span> </a>
                                </li>
                                <div class="anc">
                                    <p id="playop"> Show attendance</a>

                                </div>
                            </ul>

                            <hr>
                            <div class="dropdown pb-4">
                                <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                    <span class="d-none d-sm-inline mx-1">Divyansh
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow ">
                                    <li>
                                        <button><a href="http://localhost/Attendance-management-system/logout.php">Logout</a></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col py-3">
                        <div class="attendance">

                            <div class="login" id="byebye">
                               <span><?php echo $table; ?></span>
                                <form action="" class="needs-validation" method="POST">
                                    <?php
                                    echo "Date : " . date("Y/m/d") . "<br>";
                                    ?>
                                    <div class="form-group">
                                        <lable class="form-label" for="enttime">Entry Time</lable>
                                        <input class="form-control" type="time" id="entry" name="Entime" required>
                                    </div>
                                    <div class="form-group">
                                        <lable class="form-label" for="exttime">Exit Time</lable>
                                        <input class="form-control" type="time" id="exit" name="Extime" required>
                                    </div>
                                    <div class="form-group" id="btttn">
                                        <button class="btn btn-success w-100" type="submit" id="sub" name="dasboard-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <script>
        let playbtn = document.querySelector('#playop');
        let formsec = document.querySelector('#byebye');

        playbtn.addEventListener('click', function() {
            formsec.style.display = "none";

            function showtable1() {
                let hidden = document.querySelector('.hidden-table');
                if (hidden.style.display === "none") {
                    hidden.style.display = "block";
                } else {
                    hidden.style.display = "none";
                }
            }
        });
    </script>
</body>

</html>
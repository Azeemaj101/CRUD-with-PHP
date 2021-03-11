<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/CRUD/css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand lin" href="#"><strong>FORM-CONFIRMATION</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-danger fw-bold lin" aria-current="page" href="/CRUD/index.php">ADMIN-PANEL</a>
                    <a class="nav-link text-success fw-bold lin" href="http://ajweb.tk/">AJ-PORTFOLIO-WEB</a>
                </div>
            </div>
        </div>
    </nav>
    </header>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $NAME = $_POST['name1'];
        $F_NAME  = $_POST['F_name'];
        $HEIGHT  = $_POST['height'];
        $EMAIL  = $_POST['email'];
        $AGR  = $_POST['age'];
        $GENDER  = $_POST['gender'];
        $HostName = "localhost";
        $UserName = "root";
        $Password = "";
        $My_DB = "GYM";
        $conn = mysqli_connect($HostName, $UserName, $Password);
        if ($conn) {
            $sql1 = "CREATE DATABASE `GYM`";
            mysqli_query($conn, $sql1);
            $conn = mysqli_connect($HostName, $UserName, $Password, $My_DB);
            if ($conn) {
                $sql2 = "CREATE TABLE `GYM_RECORD`(`FORM_NO` INT NOT NULL AUTO_INCREMENT,
                                           `NAME` VARCHAR(20) NOT NULL,
                                           `F_NAME` VARCHAR(20) NOT NULL,
                                           `AGE` INT NOT NULL,
                                           `EMAIL` VARCHAR(50) NOT NULL,
                                           `HEIGHT` DECIMAL(5,2) NOT NULL,
                                           `GENDER` VARCHAR(10) NOT NULL,
                                            PRIMARY KEY (`FORM_NO`))";
                mysqli_query($conn, $sql2);
                $sql3 = "SELECT * FROM `GYM_RECORD`";
                $RESULT2 = mysqli_query($conn, $sql3);
                $num = mysqli_num_rows($RESULT2);
                if ($num == 0) {
                    $sql4 = "INSERT INTO `GYM_RECORD` VALUES(1,'$NAME','$F_NAME',$AGR,'$EMAIL',$HEIGHT,'$GENDER')";
                    $RESULT3 = mysqli_query($conn, $sql4);
                    if ($RESULT3) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>SUBMITTED</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Connection Failed</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                } else {
                    $sql4 = "INSERT INTO `GYM_RECORD`(`NAME`,`F_NAME`,`AGE`,`EMAIL`,`HEIGHT`,`GENDER`) VALUES('$NAME','$F_NAME',$AGR,'$EMAIL',$HEIGHT,'$GENDER')";
                    $RESULT3 = mysqli_query($conn, $sql4);

                    if ($RESULT3) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>SUBMITTED</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Connection Failed</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                }
            } else {
                echo '<label class="form-check-label text-danger fw-bold" for="flexCheckIndeterminate">
    <b>Connection Failed...</b>
  </label>';
            }
        } else {
            echo '<label class="form-check-label text-danger fw-bold" for="flexCheckIndeterminate">
    <b>Connection Failed...</b>
  </label>';
        }
    }
    ?>
    <main>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Info
            </div>
            <div class="card-body">
                <h5 class="card-title">AJ-GYM</h5>
                <p class="card-text">This web perduce by M.Azeem</p>
                <div class="text-center">
                <a href="/CRUD/index.php" class="btn btn-primary">ADMIN LOGIN</a>
                <a href="https://github.com/Azeemaj101" class="btn btn-dark">GITHUB</a>
                <a href="/CRUD/php/Form.php" class="btn btn-danger">BACK TO FORM</a>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <!-- <div class="foa">
        <div class="container-fluid my-0 py-3 text-light BorderTop bg-dark rounded-top">
            <p class="mb-0 text-center ">© 2020-<?//php echo date("Y"); ?> &nbsp AJ-GYM.com</p>
            <p class="mb-0 text-center ">
                <a href="# " class="text-light">Back to top |</a>
                <a href="https://github.com/Azeemaj101 " class="text-light">GitHub |</a>
                <a href="https://www.linkedin.com/in/azeemaj101/ " class="text-light">Linkedin</a>
            </p>
        </div>
    </div> -->

    <footer class="footer">
    <div class="container-fluid my-0 py-3 text-light BorderTop bg-dark rounded-top">
            <p class="mb-0 text-center ">© 2020-<?php echo date("Y"); ?> &nbsp AJ-ADMIN</p>
            <p class="mb-0 text-center ">
                <a href="# " class="text-light">Back to top |</a>
                <a href="https://github.com/Azeemaj101 " class="text-light">GitHub |</a>
                <a href="https://www.linkedin.com/in/azeemaj101/ " class="text-light">Linkedin</a>
            </p>
        </div>
        </footer>
</body>

</html>
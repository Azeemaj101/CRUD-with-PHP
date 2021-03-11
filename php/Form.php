<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/CRUD/css/style.css">
    <title>Fitness GYM</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand lin" href="#"><strong>GYM-FORM</strong></a>
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


    <!-- FORM -->
    <main class="aaa">
    <div class="container my-4 py-4 fw-bold text-primary">
        <div class="heading fw-bold fw-center">
            Registration
        </div>
        <form action="/CRUD/php/Registration.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" id="name1" name="name1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Father Name</label>
                <input type="text" class="form-control" id="F_name" name="F_name">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Height</label>
                <input type="text" class="form-control" id="height" name="height">
            </div>
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="MALE" id="gender" required>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender" VALUE="FEMALE" required>
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
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
<?php
$HostName = "localhost";
$UserName = "root";
$Password = "";
$My_DB = "GYM";
$conn = mysqli_connect($HostName, $UserName, $Password, $My_DB);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/CRUD/css/admincss.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <title>ADMIN PANEL</title>
</head>

<body class="bg-secondary">

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
        Edit Modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade " id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content text-light bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"><strong>DATA-SET</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/CRUD/php/adminscript.php" method="POST">
                        <input type="hidden" name="snoEdit" id="snoEdit">
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
                            <input class="form-check-input" type="radio" name="gender" value="MALE" id="gender0" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" VALUE="FEMALE" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                        </div>
                        <br>
                        <HR>
                        <div class = "text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand li" href="#"><strong>ADMIN-PANEL</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-danger fw-bold li" aria-current="page" href="/CRUD/index.php">LOGIN-PANEL</a>
                        <a class="nav-link text-success fw-bold li" href="http://ajweb.tk/">AJ-PORTFOLIO-WEB</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container py-5 px-5 text-center">
            <a href="/CRUD/php/Form.php"><button type="button" class="btn btn-outline-primary">FACEBOOK</button></a>
            <a href="/CRUD/php/Form.php"><button type="button" class="btn btn-outline-success mx-2"><strong>+</strong>ADD FORM</button></a>

        </div>
        <div class="px-5">
            <div class="fw-bold rounded px-1 py-1 C1 mb-3">
                <h2 class="text-center fw-bold"><i><u>DATA-SHEET</u></i></h2>
                <table class="table table-dark table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#SR</th>
                            <th scope="col">Name</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Height</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="table">
                            <?php
                            $sql1 = "SELECT *FROM `gym_record`";
                            $result1 = mysqli_query($conn, $sql1);
                            $num = 0;
                            $form = 0;
                            if ($result1) {
                                $num = mysqli_num_rows($result1);
                            }
                            if ($num < 4) {
                            ?>
                                <style>
                                    main {
                                        height: calc(100vh - 136px);
                                    }
                                </style>
                            <?php
                            }
                            if ($result1) {
                                while ($row = mysqli_fetch_assoc($result1)) {
                                    $form += 1;
                                    echo "<tr>
            <th scope='row'>" . $form . "</th>
            <td>" . $row['NAME'] . "</td>
            <td>" . $row['F_NAME'] . "</td>
            <td>" . $row['AGE'] . "</td>
            <td>" . $row['EMAIL'] . "</td>
            <td>" . $row['HEIGHT'] . "</td>
            <td>" . $row['GENDER'] . "</td>
            <td><button type='button' id=".$row['FORM_NO']." class='edit btn btn-primary edit'>Edit</button>&nbsp<button type='button' id=d".$row['FORM_NO']." class='delete btn btn-primary'>Delete</button></td>
          </tr>";
                                }
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid my-0 py-3 text-light BorderTop bg-dark rounded-top">
            <p class="mb-0 text-center ">© 2020-<?php echo date("Y"); ?> &nbsp AJ-ADMIN</p>
            <p class="mb-0 text-center ">
                <a href="# " class="text-light">Back to top |</a>
                <a href="https://github.com/Azeemaj101 " class="text-light">GitHub |</a>
                <a href="https://www.linkedin.com/in/azeemaj101/ " class="text-light">Linkedin</a>
            </p>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("Edit");
                tr = e.target.parentNode.parentNode;
                name = tr.getElementsByTagName("td")[0].innerText;
                f_name = tr.getElementsByTagName("td")[1].innerText;
                age1 = tr.getElementsByTagName("td")[2].innerText;
                Email = tr.getElementsByTagName("td")[3].innerText;
                height1 = tr.getElementsByTagName("td")[4].innerText;
                name1.value = name;
                F_name.value = f_name;
                age.value = age1;
                email.value = Email;
                height.value = height1;
                snoEdit.value = e.target.id;
                console.log("aaaaaaaaaaa ="+e.target.id);
                $('#editModal').modal('toggle');
            })
        })
        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log(e.target.id.substr(1,));
                sno = e.target.id.substr(1,);
                if(confirm("You want to delete this record?"))
                {
                    console.log("yes");
                    window.location = `/CRUD/php/adminscript.php?delete=${sno}`; 
                }
                
            })
        })
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
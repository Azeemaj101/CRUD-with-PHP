<?php
        if($_SERVER['REQUEST_METHOD'])
        {
            $USER = $_POST['name1'];
            $PASS = $_POST['Password'];
            if($USER === "root" and $PASS == 2765)
            {
                header("location:/CRUD/php/admin.php");
            }
            else
            {
                header("location:/CRUD/index.php");
            }
        }
?>
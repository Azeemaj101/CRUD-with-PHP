<?php
$HostName = "localhost";
$UserName = "root";
$Password = "";
$My_DB = "GYM";
$conn = mysqli_connect($HostName, $UserName, $Password, $My_DB);
if(isset($_GET['delete']))
{
    $sno = $_GET['delete'];
    echo $sno;
    $sql2 = "DELETE FROM `gym_record` WHERE `gym_record`.`FORM_NO` = $sno";
    $result2 = mysqli_query($conn,$sql2);
    if($result2)
    {
        header("location:/CRUD/php/admin.php");
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
if(isset($_POST['snoEdit']))
{
    $SNO = $_POST['snoEdit'];
    $NAME = $_POST['name1'];
    $F_NAME  = $_POST['F_name'];
    $HEIGHT  = $_POST['height'];
    $EMAIL  = $_POST['email'];
    $AGE  = $_POST['age'];
    $GENDER  = $_POST['gender'];
    $sql = "UPDATE `gym_record` SET `NAME` = '$NAME', `F_NAME` = '$F_NAME', `HEIGHT` = '$HEIGHT', `EMAIL` = '$EMAIL', `AGE` = '$AGE', `GENDER` = '$GENDER' WHERE `gym_record`.`FORM_NO` = $SNO";
    $result = mysqli_query($conn,$sql);
    if ($result)
    {
        header("location:/CRUD/php/admin.php");
    }

}
}
?>
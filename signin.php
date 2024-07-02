<?php
session_start();

include('dbinfo.php');

$uname = $_POST['uname'];
$pass = $_POST['pasw'];

$qry = "select * from users_tbl where Username = '$uname' and Password = '$pass'";

$res = mysqli_query($con, $qry);

$row = mysqli_fetch_array($res);

if($uname == $row['Username'] && $pass == $row['Password'])
{
    $_SESSION['fname'] = $row['FullName'];
    header('location:fetch.php');
}else{
    echo "Your Username or Password is Incorrect";
}

mysqli_close($con);


?>
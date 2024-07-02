<?php

include('dbinfo.php');

$fname = $_POST['fname'];
$uname = $_POST['uname'];
$pass = $_POST['pasw'];

$qeury = "insert into users_tbl values(Null, '$fname', '$uname', '$pass')";

$res = mysqli_query($con, $qeury);

if($res == true)
{
    header("Location: Login.php");
}else{
    echo "Incorrect Values";
}

mysqli_close($con);

?>
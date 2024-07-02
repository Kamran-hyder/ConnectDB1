<?php

include('Dbinfo.php');

$id = $_REQUEST['id'];

$qry = "delete from Employee_tbl where Emp_ID = '$id'";

$res = mysqli_query($con, $qry);

if($res == true)
{
    header('location:fetch.php');
}else{
    echo "Your Data is not Delete";
}

mysqli_close($con);

?>
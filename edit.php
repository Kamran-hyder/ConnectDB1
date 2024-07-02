<?php

include('Dbinfo.php');


$id = $_REQUEST['id'];
$name = $_POST['fname'];
$salary = $_POST['salary'];
$phn = $_POST['phn'];

$qry = "update Employee_tbl set Emp_Name = '$name', Emp_Salary = '$salary', Phone = '$phn' where Emp_ID = $id";

$res = mysqli_query($con, $qry);

if($res == true)
{
    header('location:fetch.php');
}else{
    echo "Your Data Is Not Updated";
}

mysqli_close($con);

?>
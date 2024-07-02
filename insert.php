<?php

include('Dbinfo.php');

$name = $_POST['fname'];
$salary = $_POST['salary'];
$phn = $_POST['phn'];

// $filename = $_FILES["uploadfile"]["name"];
// $tempname = $_FILES["uploadfile"]["tmp_name"];    
// $folder = "image/".$filename;

$query = "insert into employee_tbl values(Null,'$name', '$salary', '$phn')";

$res = mysqli_query($con, $query);

//   if (move_uploaded_file($tempname, $folder))  {
//             $msg = "Image uploaded successfully";
//         }else{
//             $msg = "Failed to upload image";
//       } 
      
if($res == true )
{
    header('location:fetch.php');
}else{
    echo "Your Data is not Save";
}

mysqli_close($con);

?>
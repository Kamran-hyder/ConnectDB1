<?php

$dbuser = 'root';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser);

if($con == true)
{
    echo "";
}else{
    echo "Your Database is not Connected";
}
echo "<br>";
$db = mysqli_select_db($con, 'dbrough');


if($db == true)
{
    echo "";
}else{
    echo "Your Database is not Selected";
}

?>
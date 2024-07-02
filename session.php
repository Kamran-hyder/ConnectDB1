<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    session_start();

    $_SESSION['sname'] = "Hamza Khan";
?>

<a href="page.php">Click For Move Page</a>
<br>
<br>
<a href="page2.php">Click For Move Page 2</a>

</body>
</html>
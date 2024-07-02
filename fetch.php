<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2 class="text-center text-danger">Employee Info</h2>
        <a href="add.php" class="btn btn-primary">Create New Record</a><br>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th style="text-align:center;">Employee ID</th>
                    <th style="text-align:center;">Employee Name</th>
                    <th style="text-align:center;">Salary</th>
                    <th style="text-align:center;">Employee Phone No</th>
                    <!-- <th style="text-align:center;">image</th> -->
                    <th colspan="2" style="text-align:center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
            include('Dbinfo.php');
            $qry = "select * from employee_tbl";
            $result = mysqli_query($con, $qry);

            while($row = mysqli_fetch_array($result))
            {
        ?>
                <tr style="text-align:center;">
                    <td><?php echo $row['Emp_ID'] ?></td>
                    <td><?php echo $row['Emp_Name'] ?></td>
                    <td><?php echo $row['Emp_Salary'] ?></td>
                    <td><?php echo $row['Phone'] ?></td>
                    <!-- <td><?php echo $row['Image_Path'] ?></td> -->
                    <td><a class="btn btn-success" href="update.php?id=<?php echo $row['Emp_ID']; ?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['Emp_ID']; ?>">Delete</a></td>
                </tr>
                <?php
            }
      ?>
            </tbody>
        </table>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Your Employee Info</h2>
  <form action="edit.php" method="post">
  <?php
            include('Dbinfo.php');
            $id = $_REQUEST['id'];
            $qry = "select * from employee_tbl";
            $result = mysqli_query($con, $qry);

            $row = mysqli_fetch_array($result);
  ?>
  <div class="form-group">
      <label for="id">Enter Your ID:</label>
      <input type="number" class="form-control" value="<?php echo $id; ?>" placeholder="Enter Your ID" name="id">
    </div>
    <div class="form-group">
      <label for="name">Enter Your Name:</label>
      <input type="text" class="form-control" value="<?php echo $row['Emp_Name']; ?>" placeholder="Enter Your Name" name="fname">
    </div>
    <div class="form-group">
      <label for="salary">Enter Your Salary:</label>
      <input type="number" class="form-control" value="<?php echo $row['Emp_Salary']; ?>" placeholder="Enter Your Salary" name="salary">
    </div>
    <div class="form-group">
      <label for="phn">Enter Your Phone # :</label>
      <input type="text" class="form-control" value="<?php echo $row['Phone']; ?>" placeholder="Enter Your Phone #" name="phn">
    </div>
    <button type="submit" class="btn btn-primary">Update Info</button>
  </form>
</div>

</body>
</html>

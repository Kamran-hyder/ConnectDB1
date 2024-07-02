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
        <h2>Add Your Employee Info</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Enter Your Name:</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="fname">
            </div>
            <div class="form-group">
                <label for="salary">Enter Your Salary:</label>
                <input type="number" class="form-control" placeholder="Enter Your Salary" name="salary">
            </div>
            <div class="form-group">
                <label for="phn">Enter Your Phone # :</label>
                <input type="text" class="form-control" placeholder="Enter Your Phone #" name="phn">
            </div>
            <!-- <div class="form-group">
                <label for="phn">Select Your Image:</label>
                <input type="file" name="uploadfile" value="" />
            </div> -->

            <button type="submit" class="btn btn-primary">Add Info</button>
        </form>
    </div>

</body>

</html>
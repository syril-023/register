<?php
include 'config.php';
// require 'config.php';
// require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Registration</title>
    <style>
        .container{
            display: b;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <form action="#" class="form-group" method="post">
            <div class="row text-center border p-3">
                <div class="col-md-3 mt-2">
                    <label for="name">Name:</label>
                </div>
                <div class="col-md-9 mt-2">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-3 mt-2">
                    <label for="age">Age:</label>
                </div>
                <div class="col-md-9 mt-2">
                    <input type="text" class="form-control" id="age" name="age" required>
                </div>
                <div class="col-md-3 mt-2">
                    <label for="dob">DOB:</label>
                </div>
                <div class="col-md-9 mt-2">
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="col-md-3 mt-2"></div>
                <div class="col-md-9 mt-2">
                    <input type="submit" id="submit" name="submit" class="btn btn-success w-100" value="Register">
                </div>
            </div>
        </form>
    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $date = new DateTime($_POST['dob']);
    $dob = $date->format('Y-m-d');

    $query = "insert into profile_details(name,age,dob,created_on) values('$name',$age,'$dob',NOW())";
   $sql=mysqli_query($conn,$query);
    if($sql){
        header('location:list.php');
    }
    else{
        echo "Failed";
    }
}
?>
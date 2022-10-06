<?php
include 'connect.php';
$id = $_GET['updaeteid'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "update crud set id='$id',name='$name',email='$email',mobile='$mobile',password='$password'where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "updated successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">

            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">

            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile"
                    autocomplete="off">

            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password" name="password"
                    autocomplete="off">

            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>
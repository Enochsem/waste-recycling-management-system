<?php
session_start();
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>W.R.M.S</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-light" style="background-image:url('images/bg.jpg');">

<div class="container col-md-4 ">

    <div class="card mt-5">
        <div class="card-header bg-success">
            <p class="text-center">Admin Login</p>
            <?php
                 if (!empty($_SESSION['status'])) {
                    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
                    unset($_SESSION['status']);
                 }  ?> 
        </div>
        <div class="card-body">
            <!--  -->
            <form action="dbconfig.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Admin name</label>
                    <input type="text" class="form-control border-success" id="txtUsername" name="username"  placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control border-success" id="txtPassword" name="password" placeholder="Password" required>
                </div>
                <br>
                <!-- <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input border-success">
                            Remember Password
                        </label>
                    </div>
                </div> -->
                <button  type="submit" class="btn btn-success btn-block " name="adminLogin">Login</button>
            </form>
            <br>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>

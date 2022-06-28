<?php session_start();?>
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
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class=""  style="background-image:url('images/bg.jpg');">

    <div class="container col-md-4">
        <div class="card mt-5 px-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 my-2">Create an Account!</h1>
                <?php
                 if (!empty($_SESSION['status'])) {
                    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
                    unset($_SESSION['status']);
                 }  ?> 
            </div>
            <form class="user" action="dbconfig.php" method="POST">
                
                <div class="form-group">
                    <input name="username" type="text" class="form-control form-control-user" id="username"
                        placeholder="User Name">
                </div>

                 <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="businessName" type="text" class="form-control form-control-user" id="BusinessName"
                            placeholder="Busness Name">
                    </div>
                    <div class="col-sm-6">
                        <input name="location" type="text" class="form-control form-control-user" id="location"
                            placeholder="location ">
                    </div>
                </div>

                <div class="form-group">
                    <input name="contact" type="number" class="form-control form-control-user" id="contact"
                        placeholder="Contact number">
                </div>

                <div class="form-group">
                    <input name="email" type="email" class="form-control form-control-user" id="Email"
                        placeholder="Email Address">
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="password" type="password" class="form-control form-control-user"
                            id="Password" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <input name="confirmPassword" type="password" class="form-control form-control-user"
                            id="confirmPassword"  placeholder="Confirm Password">
                    </div>
                </div>
                <button name="register" type="submit"  class="btn btn-success btn-user btn-block">
                    Register Account
                </button>
                
                <!-- <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
            </form>
            <hr>
            <!-- <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
            <div class="text-center">
                <a class="small" href="index.php">Already have an account? Login!</a>
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
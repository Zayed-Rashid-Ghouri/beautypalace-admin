<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:rgb(250, 234, 210)">
    
<nav style="width:100%; height:50px;  background-color:rgb(250, 234, 210) ">
    
        <a href="index.php"  style="color:white; text-decoration: none; "><p style="font-size: 40px; margin-left: 39%; color:rgb(102, 62, 16);" ><i class="fas fa-gem" style="font-size: 45px; margin-top: 1.3%;"></i>
            Beauty<sup> Palace</sup></p> </a>

</nav>
<br>
<br>
<br>
<br>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"> <img src="images/colage2.jpg" style="width:500px; height:350px; " alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>ADMIN</b></h1>
                                    </div>
                                    <form class="user"action="index.php" method ="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="pass" required>
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                        <input type="submit" class="btn btn-warning btn-user btn-block" name="submit" style="color:black;" value="LOGIN">
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
<?php
if (isset($_POST["submit"])) {
    session_start();
    
    $conn = mysqli_connect("localhost","root","","project");

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $query = "SELECT * FROM `login` WHERE `email` ='$email' AND `pass` = '$pass'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result))
    {
        while($data = mysqli_fetch_assoc($result)){
            $_SESSION["name"] = $data["name"];
            header("Location:admin.php");
        }
    }else{
        echo "invalid email or password";
    }

}
?>
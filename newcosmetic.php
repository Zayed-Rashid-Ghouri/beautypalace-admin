<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Cosmetic</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:rgb(250, 234, 210)">
    
<nav style="width:100%; height:50px; background-color:rgb(250, 234, 210) ">
    
        <a href="cosmetics.php"  style="color:white; text-decoration: none; "><p style="font-size: 40px; margin-left: 39%;color:rgb(102, 62, 16); " ><i class="fas fa-gem" style="font-size: 45px; margin-top: 1.3%;"></i>
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
                        <div class="row" style="height:370px;">
                            <div class="col-lg-6 d-none d-lg-block"> <img src="images/cosmetic2.jpg" style="width:500px; height:370px; " alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5" style="margin-top:-35px;"> 
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">New Cosmetic</h1>
                                    </div>
                                    <form class="user"action="#" method ="post" enctype = "multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                
                                                placeholder="Product Name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                               placeholder="Description" name="description" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                               placeholder="Price" name="price" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" 
                                               style="margin-left:20%;" placeholder="Image" name="image" required>
                                        </div>
                                        <input type="submit" class="btn btn-warning btn-user btn-block" name="submit" style="color:black;" value="Submit">
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    

          <?php
          if(isset($_POST["submit"])){
error_reporting(0);
$name = $_POST['name'];
$description = $_POST['description'];
$price= $_POST['price'];
$image = $_FILES['image'];
$imagename=$image['name'];
$tempimagename=$image['tmp_name'];

$conn = mysqli_connect("localhost","root","","project");
if(!$conn){
    echo "connection refuse";
}
$query = "insert into cosmetic values (null,'$name','$description' ,'$price','$imagename')";
move_uploaded_file($tempimagename,'./images/'.$imagename.'');
$q = mysqli_query($conn,$query);
if(!$q){
    echo "query not exectired";
}else{
    echo "query sucess";
}
}?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

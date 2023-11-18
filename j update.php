<?php
$conn = mysqli_connect("localhost","root","","project");

if (!$conn) {
    echo "connection refuse";
}
else{
    echo "connection established";

$id =$_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES['image'];

$query = "UPDATE `jewellery` SET `id`= $id,`name`='$name',`description`='$description',`price`='$price'
                                 ,`image`='$image' WHERE id='$id'";

$q = mysqli_query($conn,$query);
if(!$q) {
    echo "Refuse";
} else{
    echo "Success";

    header('location:jewellery.php');
}
}
?>
<script>
    window.location.assign("jewellery.php");
</script>
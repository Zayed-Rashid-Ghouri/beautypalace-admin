<?php
$conn = mysqli_connect("localhost", "root", "", "project"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}

    $id = $_GET["id"];
    $query = "DELETE FROM `jewellery` WHERE `id` = $id";
    mysqli_query($conn,$query);
?>

<script>
    window.location.assign("jewellery.php");
</script>
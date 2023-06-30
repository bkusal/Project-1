<?php
include 'productconn.php';


$id = $_GET['id'];

$deletequery = "delete from product where id =$id";

$query = mysqli_query($pro, $deletequery);

header('location:productdis.php');


if($query){
    ?>
    <script>
        alert("Deleted successfully");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Not Deleted");
    </script>
    <?php
}

?>
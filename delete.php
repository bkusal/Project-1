<?php
include 'cusdata.php';


$id = $_GET['id'];

$deletequery = "delete from customer where id =$id";

$query = mysqli_query($kuu, $deletequery);

header('location:display.php')



?>
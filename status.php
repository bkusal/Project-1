<?php
include 'cusdata.php';


$id = $_GET['id'];
$status = $_GET['status']

$updated= "update customer set $status=['status'] where $id=['id']";

$query = mysqli_query($kuu, $updated);

header('location:display.php')



?>
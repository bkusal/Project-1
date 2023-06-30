<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>


    <h1>Product</h1>
    <form action="" method="POST" novalidate>
        <div>
            <label for="name">Name</label>
             <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="type">Product Type</label>
            <input type="text" id="type" name="type">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity">
        </div>
        

        </div>
       
        <input type="submit" id="submit" name="ok">

        
    </form><br><br>
    <a href="productdis.php">Product List</a>
</body>
</html>


<?php

include 'productconn.php';
if(isset($_POST['ok'])){
    $name = $_POST['name'];
    $type= $_POST['type'];
    $quantity = $_POST['quantity'];
   

    $insertquery="insert into product(name, type, quantity) values('$name','$type','$quantity')" ;

    $result = mysqli_query($pro,$insertquery);

    if($result){
        
        ?>
        <script>
            alert("data inserted");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
    }
}
?>
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


    <h1>Customer's Detail</h1>
    <form action="" method="POST" novalidate>
        <div>
            <label for="name">Name</label>
             <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="eamil">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="tel">Phone</label>
            <input type="mobile" id="mobile" name="mobile">
        </div>
        <div>
            <label for="text">Address</label>
            <input type="address" id="address" name="address">
        </div>
        <div>
            <label for="textarea">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="About Yourself"></textarea>

        </div>
       
        <input type="submit" id="submit" name="Hand">

        
    </form>
</body>
</html>


<?php

include 'cusdata.php';
if(isset($_POST['Hand'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $status= $_POST['status'];

    $insertquery="insert into customer(name,email,mobile,address,description,status) values('$name','$email','$phone','$address','$description','$status')" ;

    $result = mysqli_query($kuu,$insertquery);

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
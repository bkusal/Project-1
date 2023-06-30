<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Admin Registration</h1>
    <form action="adregisconn.php" method="POST" novalidate>
        <div>
            <label for="name">Name</label>
             <input type="text" id="name" name="name" required> 
        </div>
        <div>
            <label for="eamil">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="tel">Phone</label>
            <input type="mobile" id="mobile" name="mobile" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

        </div>
       
        <input type="submit" id="submit" name="Registe">

        
    </form>
    <a href="adminlogin.php">Have an account?Login</a>
</body>
</html>



<?php
include 'adregisconn.php';

if(isset($_POST['Registe'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $insertquery= "insert into registration (name,email,mobile,password) values('$name','$email','$mobile','$password')";

    $result = mysqli_query($kreg,$insertquery);

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
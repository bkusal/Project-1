<?php
include 'logconn.php';
$emailerror="";
$passworderror="";
if(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
        $emailerror="Email is required";
    }
    if(empty($password)){
        $passworderror="<br/>Password is required";
    }else{
        if(strlen($password)<=8){
            $passworderror= "At least 8 digits";
        }elseif(!preg_match("#[0-9]+#", $password)){
            $passworderror="<br/>At least one upper case";
        }elseif(!preg_match("#[a-z]+#", $password)){
            $passworderror="<br/>At least one lower case";
    }elseif(!preg_match("#[A-Z]+#", $password)){
        $passworderror="<br/>At least one upper case";
    }
  }

?>
<?php
    $insertquery = "insert into adminlogin(email,password) values('$email','$password')";

    $res = mysqli_query($kus,$insertquery);

    if($res){
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
    header('location:queriesdis.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<h1>Customer Relationship Management</h1>
<h3>Admin Login panel</h3>
    <form action="" method="POST" >
        <div class="input-field">
            <i class="fas fa-lock"></i>
            Email:<input type="email" name="email" id="email">
            <span><?php echo $emailerror ?></span>
    </div>
        
        Password: <input type="password" name="password" id="password"><br>
        <button name ="Login">Login</button>
        <span>
            <?php echo $passworderror ?>
        </span>
    </form>

<br><br><br>
    <a href="regis.php">Click here to register</a>
</body>
</html>


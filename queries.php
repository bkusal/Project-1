<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    
    
</head>
<body>
    <header>
       
<nav>
    <div class="toogle">
        <i></i>
    </div>
    <ul>
         <li><a href="home.html"><h1>CRM</h1></a></li> 
        <li><a href="display.php"><i>Display data</i></a></li>
        <li><a href="adminlogin.php"><i>Admin login</i></a></li>
        <li><a href="regis.php"><i>Register</i></a></li>
        <li><a href="customer.php"><i>Customer</i></a></li>
        <li><a href="product.php"><i>Product</i></a></li>
    </ul>

</nav>
    </header>
    

    <div class="F">
        <h1>Customer's Queries</h1><br><br>
        <form action="queries.php" method="post">
            <label for="subject"><h4>Subject:</h4></label>
            <input type="textfield" id="textfield" name="subject"><br><br>
            <label for="list"><h4>Product:</h4></label>
            <select name="list">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C" selected>C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
            </select>
        <br><br>
       <label for="image"><h4>Upload image:</h4></label>
        <input type="file"
        id="photo" 
        name="image"
        accept="image/*"><br><br>
    
        <input type="submit" name="okk">

       
        </form>
    </div>
    
</body>
</html>



<?php

include 'queriesconn.php';
if(isset($_POST['okk'])){
    $subject = $_POST['subject'];
    $list = $_POST['list'];
    $image = $_POST['image'];
    

    $insertdata="insert into queries(subject, list, image) values('$subject','$list','$image')" ;

    $result = mysqli_query($hom,$insertdata);

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
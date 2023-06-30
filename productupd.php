<?php

?>
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
                    <?php

                include 'productconn.php';

                $idi= $_GET['id'];

                $showquery = "select * from product where id={$idi}";

                $showdata = mysqli_query($pro,$showquery);

                $arrdata = mysqli_fetch_array($showdata);

                

                if(isset($_POST['Hand'])){

                    $idupd= $_GET['id'];

                    $name = $_POST['name'];
                    $type= $_POST['type'];
                    $quantity = $_POST['quantity'];

                    // $insertquery="insert into customer(name,email,mobile,address,description) values('$name','$email','$phone','$address','$description')" ;

                    $uquery = "update product set id=$idupd, name='$name', type='$type', quantity='$quantity' where id=$idupd";

                    $result = mysqli_query($pro,$uquery);

                    if($result){
                        
                        ?>
                        <script>
                            alert("data updated");
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("data not updated");
                        </script>
                        <?php
    }
}
?>
        <div>
            <label for="name">Name</label>
             <input type="text" id="name" name="name" value="<?php echo $arrdata['name'];?>">
        </div>
        <div>
            <label for="eamil">Product Type</label>
            <input type="text" id="type" name="type" value="<?php echo $arrdata['type'];?>">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" value="<?php echo $arrdata['quantity'];?>">
        </div>
       

        </div>
       
        <input type="submit" id="submit" name="Hand">

        
    </form>
</body>
</html>



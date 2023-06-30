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


    <h1>Customer's Detail</h1>
    <form action="" method="POST" novalidate>
                    <?php

                include 'cusdata.php';

                $ids= $_GET['id'];

                $showquery = "select * from customer where id={$ids}";

                $showdata = mysqli_query($kuu,$showquery);

                $arrdata = mysqli_fetch_array($showdata);

                

                if(isset($_POST['Hand'])){

                    $idupd= $_GET['id'];

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['mobile'];
                    $address = $_POST['address'];
                    $description = $_POST['description'];

                    // $insertquery="insert into customer(name,email,mobile,address,description) values('$name','$email','$phone','$address','$description')" ;

                    $query = "update customer set id=$idupd, name='$name', email='$email', mobile='$phone', address='$address', description='$description' where id=$idupd";

                    $result = mysqli_query($kuu,$query);

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
            <label for="eamil">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $arrdata['email'];?>">
        </div>
        <div>
            <label for="tel">Phone</label>
            <input type="mobile" id="mobile" name="mobile" value="<?php echo $arrdata['mobile'];?>">
        </div>
        <div>
            <label for="text">Address</label>
            <input type="address" id="address" name="address" value="<?php echo $arrdata['address'];?>">
        </div>
        <div>
            <label for="textarea">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="About Yourself" value="<?php echo $arrdata['description'];?>"></textarea>

        </div>
       
        <input type="submit" id="submit" name="Hand">

        
    </form>
</body>
</html>



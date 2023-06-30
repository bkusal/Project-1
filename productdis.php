
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="main-div">
        <h1>List of Products</h1>
        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>type</th>
                            <th>quantity</th>
                            <th colspan="2">operation</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php

include 'productconn.php';

$selectquery = "select * from product";

$query = mysqli_query($pro,$selectquery);
$num= mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
    ?>
                        <tr>
                            <td><?php echo $res['id'];?></td>
                            <td><?php echo $res['name'];?></td>
                            <td><?php echo $res['type'];?></td>
                            <td><?php echo $res['quantity'];?></td>
                            <td> <a href="productupd.php?id=<?php  echo $res['id']; ?> " data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a href="productdel.php?id=<?php  echo $res['id']; ?> " data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
   




                    <?php
                            }
                    ?>
                  

                  
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
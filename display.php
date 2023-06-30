
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
        <h1>List of customers</h1>
        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>mobile</th>
                            <th>address</th>
                            <th>description</th>
                            <th colspan="2">operation</th>
                            <th>status</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php

include 'cusdata.php';

$selectquery = "select * from customer";

$query = mysqli_query($kuu,$selectquery);
$num= mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
    ?>
                        <tr>
                            <td><?php echo $res['id'];?></td>
                            <td><?php echo $res['name'];?></td>
                            <td><?php echo $res['email'];?></td>
                            <td><?php echo $res['mobile'];?></td>
                            <td><?php echo $res['address'];?></td>
                            <td><?php echo $res['description'];?></td>
                            <td> <a href="update.php?id=<?php  echo $res['id']; ?> " data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a href="delete.php?id=<?php  echo $res['id']; ?> " data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            <td>
                                <?php
                                if($res['status']==1){
                                    echo '<p><a href="status.php?id='.$res['id'].'&status=0">processing</a></p>';
                                }else{
                                    echo '<p><a href="status.php?id='.$res['id'].'&status=0">solved</a></p>';
                                }
                                ?>
                            </td>
                               
                           
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
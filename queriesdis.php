
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
        <h1>Queries list </h1>
        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>subject</th>
                            <th>list</th>
                            <th>image</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php

include 'queriesconn.php';

$selectquery = "select * from queries";

$query = mysqli_query($hom,$selectquery);
$num= mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
    ?>
                        <tr>
                            <td><?php echo $res['id'];?></td>
                            <td><?php echo $res['subject'];?></td>
                            <td><?php echo $res['list'];?></td>
                            <td><?php echo $res['image'];?></td>
                          
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
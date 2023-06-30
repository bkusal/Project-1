


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
</head>
<body>
    <h1>Email</h1>
    <form action="" method="post">
        
               TO:<input type="text" name="to" size="20"><br><br>
                
            Subject:<input type="text" name="subject" size="20"><br><br>
                
            Message:<textarea name="message" cols="30" rows="3"></textarea><br><br>
                
       <p><input type="submit" name="submit"></p>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];
    $from = $_POST['iamluffy72@gmail.com'];
    $headers = "to: $to";

    mail($to,$subject,$message,$headers);
    echo "mail sent";
    }


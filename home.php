<?php
include 'components/connect.php';
if(isset($_COOKIE['user_id']))
{
    $user_id=$_COOKIE['user_id'];
}
else
{
    $user_id='';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
    <!--header section start-->
    <?php include 'components/user_header.php'; ?>
    <!--header section end-->
    <?php include 'component/message.php';?>
    <script src="js/script.js"></script>
    </body>
</html>

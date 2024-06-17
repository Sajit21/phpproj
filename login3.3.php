<?php
session_start();
if(isset($_SESSION['login']))
{
    header('location:admin.php');
exit();
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="login3.css">

    
</head>


<body>
  

        <div class="main">
            <div class="div_logo">
                <img src="logo.png" class="img_logo1">
            </div>

        <?php
        if(isset($_SESSION['error']))
         {
         echo($_SESSION['error']);
         unset($_SESSION['error']);
         }
         ?>
         
             <form action="error.php" method="POST">
            <div class="div_text">
                <h1 id="log">Login to your account</h1>
                <label for="name" id="naam">Username:</label>
                <input type="text" name="uname" id="name" placeholder="Enter Username"><br><br>
                <label for="uid" id="idnaam">Roll no:</label>
                <input type="password" name="UID" id="uid" placeholder="xxxxxxxxxx"><br><br>
                <button class="btn"  type="submit" value="login">Login</button>
             </div>
        </form>
           </div>

</body>
</html>
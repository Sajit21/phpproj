<?php
//   session_start();
 $showalert=false;
 $showerror=false;

  // directory bhitra dbconnect wala huna paryo
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    include 'dbconnect3.php' ;
    $username=$_POST['uname'];
    $password=$_POST['UID'];
    // $exists=false;
   $sql=" INSERT INTO `login` ( `username`, `roll_no`, `date`) VALUES ('$username', '$password', current_timestamp())";

      if($conn->query($sql)==true)
      {
        // $showalert=true;
         $showalert= true;
      }
     else
     {
        // echo "data error". $conn->error;
     $showerror =true; 
     }  
 }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userpaid Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="login3.css">


</head>
<body>
           
          <?php 
           if($showalert){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong >SUCCESS! </strong> You are logged in
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }

            if($showerror){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong >error! </strong> You are logged in
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }

            ?>
        <div class="main">
            <div class="div_logo">
                <img src="logo.png" class="img_logo1">
            </div>
          
            <form action="login3.php" method="POST">
            <div class="div_text">
                <h1 id="log">Login to your account</h1>
                <label for="name" id="naam">Username:</label>
                <input type="text" name="uname" id="name" placeholder="Enter Username"><br><br>
                <label for="uid" id="idnaam">Roll no:</label>
                <input type="password" name="UID" id="uid" placeholder="xxxxxxxxxx"><br><br>
                <button class="btn">Login</button>
            </div>
            </form>
        </div>

</body>
</html>
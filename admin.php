<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login3.3.php');
    exit();
}

// $username = $_SESSION['username'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <style>
        *{
            font-family: Poppins;
        }
        body{
            margin: 0;
            padding: 10px;

        }
        nav{
            padding: 5px 10px 5px 10px;
            border-radius: 20px;
            background-color: whitesmoke;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);
            margin-bottom: 50px;
        }
        .img_logo{
            width: 100%;
            height: auto;
        }
        .div_logo{
            display: inline-block;
            width:100px;
        }
        .div_text{
            display: inline-block;
            font-weight: 700;
            color:rgb(1,98,53) ;
            vertical-align: middle;
            font-size: 28px;
            flex: 1;
            padding: 0px 8px 0px 8px;
            text-align: center;
        }
        .div_user{
            width:200px;
        }
        .button_user{
            padding: 10px 40px 10px 40px;
            border: solid 2px rgb(1,98,53);
            border-radius: 20px;
            color: rgb(1,98,53);
            font-weight: bold;
        }
        .div_register{
            background-color: whitesmoke;
            display: flex;
            flex-direction: column; 
            padding: 10px 6px 20px 6px;
            border-radius: 10px;
            
            
        }
        .register_top{
            flex: 1;
            font-size: 30px;
            text-decoration: underline;
            margin-bottom: 30px;
            margin-top: 10px;


        }
        .register_bottom{
            flex: 5;
            display: flex;
            display:inline-block;
            
            
        }
        .enter {
            padding: 10px 40px 10px 40px;
            background-color:rgb(1,98,53);
            border: 2px solid black;
            border-radius: 20px;
            color: rgb(255, 255, 255);
            /* font-weight: bold; */
            float: right;
        }
        .enter:hover{
            cursor: pointer;
            background-color: rgb(223, 223, 10);
            color: black;

        }
        .insert{
            margin-right: 20px;
            border: none;
            font-size: 18px;
            
        }
        .log{
            padding: 10px 40px 10px 40px;
            background-color:rgb(1,98,53);;
            border: 2px solid black;
            border-radius: 20px;
            color:white;   
            /* display: inline-block; */
       
            float: right;
            

        }
        .log a {
          color: white; 
          text-decoration: none; 
         /* padding: 10px 20px;  */
          }
        .log a:hover{
            background-color: rgb(223, 223, 10);
            cursor: pointer;
            color: black;

            
        }
        /* body {
    font-family: Arial, sans-serif;
    margin: 20px;
} */

table.large {
    width: 100%;
    border-collapse: collapse;
    /* text-align: center; */
}

table.large th, 
table.large td {
    border: 1px solid #ddd; 
    /* light gray color */
    padding: 8px;
    text-align: left;
}

table.large th {
    background-color: #f2f2f2;
    /* very light color */
}

table.large .large1 td {
    height: 200px; /* Set a large height for the row */
}
h1{
    text-align: center;
}


    </style>
</head>
<body >
    <nav>
        <div class="div_logo">
            <img class="img_logo" src="logo.png" alt="">
        </div>

        <div class="div_text">
            Students Fee Management System
        </div>

        <div class="div_user">
            <button class="button_user">
                User
            </button>
        </div>
    </nav>

    
    <div class="div_register">
        <div class="register_top">
            Insert Student Information :

        </div>

        <div class="register_bottom">
            
            <form action="">
                <label for="">Name :</label>
                <input type="text" name="uname" class="insert">
                <label for="">Roll Number :</label>
                <input type="text" name="rno" class="insert">
                <label for="">Phone Number :</label>
                <input type="text" name="pno" class="insert">
                <label for="">DOB :</label>
                <input type="date" name="dob" class="insert">
                <label for="">Address :</label>
                <input type="text" name="add" class="insert"><br>
            </form>

            <input type="submit" class="enter"><br><br>
            <div class="log">
               <a href="logout.php" >Logout</a>
            </div>
        </div>  
            <!-- <input type="submit" class="log"><br><br> -->
        <div class="div_table">
            <table class="large" border="1px" cellpadding="1px" cellspacing="1px" width="100%">
        <tr>
            <th colspan="6">
                <h1>Students Details</h1>
            </th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Rollno</th>
            <th>Batch</th>
            <th>Fee</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr class="large1">
            <td>Name</td>
            <td>Rollno</td>
            <td>Batch</td>
            <td>Fee</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </table>
     </div>
                     

        </div>  

    </div><br>
    
</body>
</html>

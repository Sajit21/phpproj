<?php


$server="localhost";
$username="root";
$password="";
$dbname="BATCH";
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error)
{
    die ("not connected <br>" .$conn->connect_error);
}


// else
// {   
//     echo " connection successful <br>";
// }

        


?>
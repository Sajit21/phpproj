<?php
session_start();
include 'pass.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['uname'], $_POST['UID'])) {
        $uname = $_POST['uname'];
        $pass = $_POST['UID'];

        if ($uname == $data['username'] && $pass == $data['password']) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $uname;
            header('Location: admin.php');
             exit();
        } else {
            $_SESSION['error'] = "Invalid username or password.";
            header('Location: login3.3.php');
            exit();
        }
    } else {
        header('Location: login3.3.php');
       exit();
    }
}
?>

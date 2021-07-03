<?php
session_start();
$email= $_SESSION['email'];
$password=$_SESSION['password'];
//echo $mail;
//echo $pwd;
if($email=="K@gmail.com"&& $password=="12345"){
    echo "You successfully login";
    
}
else {
    
        $invalid="Invalid email and Password";
        $_SESSION['invalid']=$invalid;
        header("Location:login.php");
    }



?>
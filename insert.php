<?php
include 'dbconnect.php';

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $register=$_POST['register'];
}

?>
<?php

if(isset($_POST['username']) && 
   isset($_POST['email']) &&
   isset($_POST['password']) &&
   isset($_POST['contact'])){
include 'db_connection.php';

function validate($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST['username']);
$email = validate($_POST['email']);
$contact = validate($_POST['contact']);
$password = validate($_POST['password']);
if(empty($username) ||
   empty($email) ||
   empty($password) ||
   empty($contact)){
   header("location: log in and register.php");
   }
 else {
     
     $query = "INSERT INTO `user`(`user_name`, `email`, `password`, `contact`) VALUES ('$username','$email','$password','$contact')";
     $res = mysqli_query($conn, $query);
     
     if ($res) {
         header("Location: Log in and register.php");
     }
     else{
         echo "Your message could not be sent!";
     }
   }
}


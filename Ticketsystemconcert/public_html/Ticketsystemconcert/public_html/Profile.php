<?php
    session_start(); 
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
              crossorigin="anonymous">
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@1,800&display=swap');
            
             .root {
                --primary: #3155e7;
                --primary: #2045d6;
                --black: #010101;
                --gray-1: #788190;
                --gray-2: #d3d4db;
                --white: #FFFFFF;
                --body: #fefefe;
             }
             
             .bg-gradiant{
                 height: 100vh;
                 width: 100%;
                 background-image: linear-gradient(45deg,turquoise,blueviolet);
             }
            
             .navbar {
                 padding: 32px 0;
             }
             
             .nav-link {
                 margin-left: 41px;
                 font-size: 16px;
                 color: var(--gray-1);
             }
             
             .navbar-nav .nav-link.active {
                 font-weight: bold;
                 color: var(--black);
             }
             
             body {
                 background: #f5f5f5;
                 font-family: Arial, sans-serif;
             }
             
             .shadow {
                 box-shadow: 0 5px 20px rgba(0,0,0,0.06)!important;
             }
             
             .main-content {
                 padding-top: 40px;
                 padding-bottom: 100px;
             }
        </style>
    </head>
    <body class="bg-gradiant">
        <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="tickets.png" id="logo" width="100px" height="100px" align="left" style="margin-left: 5px; margin-bottom: 5px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active me-5" aria-current="page" href="index.php">Home</a>
        <a class="nav-link me-5" href="About us.php">About us</a>
        <a class="nav-link me-5" href="Event.php">Event</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="#">Tickets and History</a></li>
            <li><a class="dropdown-item" href="log out autheticate.php">Log out</a></li>
      </div>
    </div>
  </div>
</nav>
        
        <section class="main-content">
            <div class="container">
                <h1 class="text-center mb-5">PROFILE</h1>
                
                <div class="row">
                    <div class="col-sm-8 offsetsm-8 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                    <div class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center">
                            <div class="banner"></div>
                            <img src="Profile.png" alt="" class="#">
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item" name="username" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Username: <?php  echo  $_SESSION['user_name'] ; ?> </li>
                                <li class="list-group-item" name="email" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">email: <?php  echo  $_SESSION['email'] ; ?> </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
        crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
        crossorigin="anonymous">
        </script>
    </body>
</html>


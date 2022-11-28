<?php
    session_start(); 
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Li/censes/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Log_in_and_register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }
            
            .bg-gradiant{
                height: 100vh;
                width: 100%;
                background-image: linear-gradient(45deg, aqua, coral);
                background-position: center;
                background-size: cover;
                position: absolute;
            }
            
            .hero{
                height: 100%;
                width: 100%;
            }
            
            .form-box{
                width: 380px;
                height: 480px;
                position: relative;
                margin: 6% auto;
                background: #fff;
                padding: 5px;
                overflow: hidden;
            }
            .button-box{
                width: 220px;
                margin: 35px auto;
                position: relative;
                box-shadow: 0 0 20px 9px #ff61241f;
                border-radius: 30px;
            }
            
            .toggle-btn{
                padding: 10px 30px;
                cursor: pointer;
                background: transparent;
                border: 0;
                outline: none;
                position: relative;
            }
            
            #btn{
                top: 0;
                left: 0;
                position: absolute;
                width: 110px;
                height: 100%;
                background: linear-gradient(to right, #ff105f, #ffad06);
                border-radius: 30px;
                transition: .5s;
            }
            
           .input-group{
                top: 180px;
                position: absolute;
                width: 280px;
                transition: .5s;
            }
            
            .input-field{
                width: 100%;
                padding: 10px 0;
                margin: 0;
                border-left: 0;
                border-top: 0;
                border-right: 0;
                border-bottom: 1px solid #999;
                outline: none;
                background: transparent;
            }
            
            .submit-btn{
                width: 85%;
                padding: 10px 30px;
                cursor: pointer;
                display: block;
                margin: auto;
                background: linear-gradient(to right, #ff105f, #ffad06);
                border: 0;
                outline: none;
                border-radius: 30px;
            }
            
            .check-box{
                margin: 30px 10px 30px 0;
            }
            
            span{
                color: #777;
                font-size: 12px;
                bottom: 68px;
                position: absolute;
            }
            
            #Login{
                left: 50px;
            }
            
            #register{
                left: 450px;
            }
    </style>
    
    <script>
     function validateForm() {
  let x = document.forms["regForm"]["username"].value;
  let y = document.forms["regForm"]["email"].value;
  let z = document.forms["regForm"]["password"].value;
  if (x == "") {
    alert("Username must be filled out");
    return false;
   }
   if (y == "") {
    alert("email must be filled out");
    return false;
   }
   if (z == "") {
    alert("password must be filled out");
    return false;
   }
 }
</script>
    

    </head>
    <body>
        <div class="bg-gradiant">
            <div class="hero">
                <div class="form-box">
                    <div class="button-box">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                        <button type="button" class="toggle-btn" onclick="register()">Register</button>
                    </div>
                    
                
                    <form id="Login" name="regForm" class="input-group" onsubmit="validateForm" method="post" action="log_in_database" >
                    <input type="text" name="username" class="input-field" placeholder="Enter Username" required>
                    <input type="text" name="password" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit"name="Login" class="submit-btn">Log in</button>
                </form>
                    
                    <form id="register" name="regForm" class="input-group" onsubmit="validateForm" method="post" action="register_database.php">
                    <input type="text" name ="username" class="input-field" placeholder="Enter Username" required>
                    <input type="email" name ="email" class="input-field" placeholder="Enter Email" required>
                    <input type="number" name ="contact" class="input-field" placeholder="Enter Contact" required>
                    <input type="password" name ="password" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
                </div>
            </div>
            
            <script>
                var x = document.getElementById("login");
                var y = document.getElementById("register");
                var z = document.getElementById("btn");
                
                function login(){
                    x.style.left = "50px";
                    y.style.left = "450px";
                    z.style.left = "0";
                }
                
                function register(){
                    x.style.left = "-400px";
                    y.style.left = "50px";
                    z.style.left = "110px";
                }
            </script>
        </div>
    </body>
</html>
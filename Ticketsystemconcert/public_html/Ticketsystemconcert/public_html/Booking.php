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
        <title>Booking charlie puth event</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            .bg-gradiant{
                 height: 100vh;
                 width: 100%;
                 background-image: linear-gradient(45deg,turquoise,blueviolet);
             }
             
             body{
                display: flex;
                height: 100vh;
                justify-content: center;
                align-items: center; 
             }
             
             .container-form{
                 padding: 20px 0;
                 margin: 0 auto;
                 color: #000;
                 display: inline-block;
             }
             
             form p{
                 font-weight: 600; 
                 margin-right: 20px;
             }
             
             .form-field {
                 display: flex;
                 justify-content: space-between;
                 align-items: center;
             }
             
             input,select {
                 padding: 10px 10px;
             }
             
             .btn{
                 background-color: rgba(0, 0, 0, .95);
                 color: #fff;
                 padding: 10px 20px;
                 border: none;
                 font-size: 18px;
                 border-radius: 100px;
                 box-shadow: 7px 10px 12px rgba(0, 0, 0, .1);
                 cursor: pointer;
                 transition: all .3s;
             }
             
             .btn:hover{
                 transform: scale(1.03);
                 box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
             }
        </style>
        
    </head>
    <body class="bg-gradiant">
        <div class="container-form">
            <h2 class="heading heading-yellow">Booking form</h2>
            
            <?php
            if(isset($_POST["submit"])){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "ticketsystemconcert";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                         die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    else{
                   $username = $_POST['name'];
                   $email = $_POST['email'];
                   $event_name = $_POST['event'];
                   $zone_name = $_POST['zone'];
                   $booking_pax = $_POST['pax'];

                $sql = "INSERT INTO booking (user_name, booking_pax, event_name, zone_name, email)
                VALUES ('$username', '$booking_pax', '$event_name', '$zone_name', '$email' )";
                
                if (mysqli_query($conn, $sql)) {
                                    echo "<script> alert('Event Booked!');window.location.replace('booking.php'); </script>";
                                }
                                else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            }
                            mysqli_close($conn);
                    }
                           ?>
            <form action="#" method="post">
            <div class="form-field">
                <p>Name</p>
                <input type="text" name="name" placeholder="Name">
            </div>
            
            <div class="form-field">
                <p>Email</p>
                <input type="text" name="email" placeholder="email">
            </div>
                
            <div class="form-field">
                <p>Which event</p>
                <select name="event" id="0">
                    <option value="charlie">Charlie puth</option>
                    <option value="Billie">Billie eilish</option>
                    <option value="Black pink">Black pink</option>
                </select> 
            </div>
            
            <div class="form-field">
                <p>Seating option</p>
                <select name="zone" id="0">
                    <option value="Front">Front zone(RM350)</option>
                    <option value="Middle">Middle zone(RM250)</option>
                    <option value="back">Back zone(Rm150)</option>
                </select> 
                
            </div>
            
            <div class="form-field">
                <p>Number of tickets</p>
                <input type="number" name="pax">
            </div>
            
            <input type="submit" name="submit" class="btn" value="Submit">
            </form>
        </div>
        
    </body>
</html>

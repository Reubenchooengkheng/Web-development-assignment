<!DOCTYPE html>
<html>
<head>
    <title>Admin_dashboard</title>
        <meta charset="UTF-8">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
              crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
    <style>
        *{
          margin:0;
          padding:0;
          box-sizing: border-box;
        }
        ol,
        ul{
          list-style: none;  
        }
        .table{
            max-width: 1200px;
            margin: 50px auto 0;
            padding: 1.2rem;
            box-shadow: 0 0.15rem 1.75rem #0033ff;
        }
        .table .top-title{
          background-color: #ddd;
          border-bottom: 1px solid #000000;
          padding:1rem 1.35rem;
        }
        .top-title h2{
            font-size: 16px;
            color:#33485d;
            font-weight: 500;
        }
        .wrap-content{
            padding: 1.2rem; 
        }
        .search{
             outline: none;
             border: 1px solid #9999ff;
             margin: 10px 15px;
             width: 100%;
             max-width: 320px;
             padding: 8px 10px;
             border-radius: 4px;
        }
        .search::placeholder{
            color: #475993;
            font-size: 14px;
        }
        .wrap-title h4{
            padding: 10px 0;
            font-size: 16px;
        }
        .wrap-title.id,
        .wrap-title.username,
        .wrap-title.name,
        .wrap-title.email_address,
        .wrap-title.phone_number
         .wrap-title.country,
        .wrap-title.population,
        .wrap-title.area,
        .wrap-title.Date,
        .wrap-title.Time{
            font-size: 16px;
            font-weight: normal;
            color:#66b9ee;
        }
        .wrap-title,
        .wrap-item{
            display: grid;
            align-items: center;
            grid-template-columns: 20fr 50fr 60fr 90fr 60fr 70fr 50fr 50fr 60fr 60fr  ;
        }
        .wrap-title{
            border-bottom: 1px solid #000000 ;
        }
        .wrap-item{
            padding: 10px 0;
            border-bottom: 1px solid #000000;
        }
        .wrap-item:nth-child(even){
            background-color: #9966ff;
        }
        .wrap-item.id{
            font-size: 16px;
            color:#66b9ee;
            font-weight: bold;
        }
        .id{
            padding: 0 10px;
        }
        .wrap-item.id,
        .wrap-item.username,
        .wrap-item.name,
        .wrap-item.email_address,
        .wrap-item.phone_number
        .wrap-item.country,
        .wrap-item.population,
        .wrap-item.area,
        .wrap-item.Date,
        .wrap-item.Time{
            font-size: 10px;
            font-weight:400;
        }
        .wrap-item.country{
            display: flex;
            align-items: center;
        }
        .wrap-pagination{
            display: flex;
            width: max-content;
            border: 1px solid black;
            align-items: center;
            margin-top: 20px;
        }
        .wrap-pagination .number{
            cursor: pointer;
            width:20px;
            border-right: 1px solid black;
            height: 20px;
            display: flex;
            align-items: center;
            font-size: 14px;
            justify-content: center;
        }
        .wrap-pagination .number:last-child{
            border-right: none;
        }
        .wrap-pagination.number.selected{
            background-color: #0033ff;
            color: white;
        }
        @media(max-width:767px)
        {
            .top-title h2{
                font-size: 14px;
            }
            .wrap-item.id,
        .wrap-item.username,
        .wrap-item.name,
        .wrap-item.email_address,
        .wrap-item.phone_number
        .wrap-item.country,
        .wrap-item.population,
        .wrap-item.area,
        .wrap-item.Date,
        .wrap-item.Time,
        .wrap-title.id,
        .wrap-title.username,
        .wrap-title.name,
        .wrap-title.email_address,
        .wrap-title.phone_number
         .wrap-title.country,
        .wrap-title.population,
        .wrap-title.area,
        .wrap-title.Date,
        .wrap-title.Time{
            font-size: 12px;
        }
        .wrap-title,
        wrap-item{
            grid-template-columns: 15fr 35fr 25fr 25fr;
        }
        }
        
        .menu-bar{
        background-image: linear-gradient(-90deg,#9eb4ca ,#f6f8fa);
    }
    .navbar-nav{
        margin-left: 40px;
    }
    .navbar-nav a:link {
            font-family: Georgia;
            font-size: 22px;
            text-decoration: none;
            text-align: center;
        }
        .navbar-light .navbar-nav .nav-link{
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:visited {
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:hover{
             font-weight:  600;
            border-bottom: 1px solid #ffffff;
        }
        @media screen and (min-width: 992px){
            .navbar-brand img{
                width: 100px;
            }
            .navbar .container-fluid{
                flex-direction: column;
            }
            .navbar .navbar-nav .nav-item{
                padding: .5em 1em;
            }
        }
        .navbar-brand{
            margin-right: 0px;
        }
        #aboutUs{
            padding: 30px 70px 10px 70px;
            text-align: justify;
            line-height: 30px;
        }
        #aboutUs_part2{
            padding: 10px 70px 30px 70px;
            text-align: justify;
            line-height: 30px;
        }
        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
        }
        .navbar-toggler {
           border: 0 !important;
       }
       .navbar-toggler:focus,
       .navbar-toggler:active,
       .navbar-toggler-icon:focus {
           outline: none !important;
           box-shadow: none !important;
           border: 0 !important;
           align-content: right;
       }

       /* Lines of the Toggler */
       .toggler-icon{
           width: 30px;
           height: 3px;
           background-color: #e74c3c;
           display: block;
           transition: all 0.2s;
       }

       /* Adds Space between the lines */
       .middle-bar{
           margin: 5px auto;
       }

       /* State when navbar is opened (START) */
       .navbar-toggler .top-bar {
           transform: rotate(45deg);
           transform-origin: 10% 10%;
       }

       .navbar-toggler .middle-bar {
           opacity: 0;
           filter: alpha(opacity=0);
       }

       .navbar-toggler .bottom-bar {
           transform: rotate(-45deg);
           transform-origin: 10% 90%;
       }
       /* State when navbar is opened (END) */

       /* State when navbar is collapsed (START) */
       .navbar-toggler.collapsed .top-bar {
           transform: rotate(0);
       }

       .navbar-toggler.collapsed .middle-bar {
           opacity: 1;
           filter: alpha(opacity=100);
       }

       .navbar-toggler.collapsed .bottom-bar {
           transform: rotate(0);
       }
       /* State when navbar is collapsed (END) */

       /* Color of Toggler when collapsed */
       .navbar-toggler.collapsed .toggler-icon {
           background-color: #777777;
       }
       
       .logout{
           float:right; 
           margin-top: 10px;
           margin-right: 20px; 
           width: 100px;
       }
        @media only screen and (max-width: 600px) {
        .navbar-nav{
             text-align: center;
            margin-left: 0px;
            
        }
        .logout{
           float:right; 
           margin-top: -25px; 
           margin-left: 200px;
           width: 100px;
       }
    }
        </style>
    <body>        
        <div class="menu-bar">
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
      <a class="nav-item nav-link" href="history.php" style="padding-top:18px;font-family: 'Comic Sans MT', cursive">
           Booking list
          <span class="sr-only">(current)</span> </a>
          </li>
        </ul>
         
      <div class="logout"><button><a href="admin autheticate.php" style="text-decoration:none">Log Out</a></button></div>
  </nav>
</div>
        <div class="wrapper">
        <div class="table">
            <div class="top-title">
                <h2>History</h2>
            </div>
            <div class="wrap-input">
                <input type="text"placeholder="Search text...." class="search">
            </div>
            <div class="wrap-content">
                
                
                <?php
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "ticketsystemconcert";
                    $con = mysqli_connect($servername, $username, $password, $dbname);
                  
                    $res = mysqli_query($con,"Select * from booking");
                    $queryResult = mysqli_num_rows($res);
                    

                    if($queryResult > 0){
                        
                    ?>
                    <div class="wrap-title">
                    <div class="id">
                        <h4>ID</h4>
                    </div>
                    <div class="username">
                        <h4>Username</h4>
                    </div>
                    <div class="email">
        
                        <h4>Email</h4>
                    </div>
                    <div class="booking_pax">
        
                        <h4>Booking pax</h4>
                    </div>
                    <div class="event">
        
                        <h4>Event</h4>
                    </div>
                    <div class="Zone">
        
                        <h4>zone</h4>
                    </div>
                   
                    </div>
                    <?php
                        
                    while($row =mysqli_fetch_array($res)){
                            
                    ?>
               
                
                 <div class="wrap-item">
                    <div class="id">
                        <p><?php echo $row['booking_id']?></p>
                    </div>
                    <div class="username">
        
                        <p><?php echo $row['user_name']?></p>
                    </div>
                    <div class="email">
        
                        <p><?php echo $row['email']?></p>
                    </div>
                    <div class="booking_pax">
        
                        <p><?php echo $row['booking_pax']?></p>
                    </div>
                    <div class="event">
        
                        <p><?php echo $row['event_name']?></p>
                    </div>
                    <div class="zone">
                        <img src=""alt="">
                        <p><?php echo $row['zone_name']?></p>
                    </div>
                </div>
                <?php
                		}
                    }
                    else{
                        echo '<p style="color: white; font-size: 38px; font-weight: 700; text-align:center;">No results found!</p>';
                        
                    }

                ?>
                    <ul class="wrap-pagination">
                        <li class="number"><</li>
                        <li class="number selected">1</li>
                        <li class="number">2</li>
                        <li class="number">3</li>
                        <li class="number">4</li>
                        <li class="number">></li>
                    </ul>
               
            </div>    
              
            </div>
          
        </div>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
        crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
        crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
    </body>
</html>

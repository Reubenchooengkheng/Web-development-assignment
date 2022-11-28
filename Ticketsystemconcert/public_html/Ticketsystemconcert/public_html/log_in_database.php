<?php
    session_start()
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ticketsystemconcert";

$conn = mysqli_connect($servername, $username, $password, $db_name);
if (!$conn){
    echo "Connection failed!";
    exit();
}

if (isset($_POST['Login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];                     
  $query = "SELECT * FROM user WHERE user_name ='$username' AND password ='$password'";
  $result=mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($result)){
         $check_username = $row['user_name'];
         $check_password = $row['password'];
        }
      
     if ($username = $check_username && $password = $check_password)
     {
            header('Location: index.php');

            session_start();
            $_SESSION['identifier']=$_POST['username']; 
 	}
     else
     {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid username or password");';
        echo 'window.location.href ="Log_in_and_register.php"';
        echo '</script>';
     }
}
?>


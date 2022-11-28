<?php
   session_start();
   session_destroy();
   header('Location: log in and register.php');
   exit;
?>
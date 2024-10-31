<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['user'] != ''){
      unset($_SESSION['user']);
}
if(isset($_SESSION['pass']) && $_SESSION['pass'] != ''){
    unset($_SESSION['pass']);
}
if(isset($_SESSION['name']) && $_SESSION['name']){
    unset($_SESSION['name']);
}
 header('location: ../index.php');
?>

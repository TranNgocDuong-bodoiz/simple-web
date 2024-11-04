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
if(isset($_SESSION['log']) && $_SESSION['log']){
    unset($_SESSION['log']);
}
header('location: ../../index.php');
?>

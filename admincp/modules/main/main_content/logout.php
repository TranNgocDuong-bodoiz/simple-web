<?php
session_start();
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

if (isset($_SESSION['pass'])) {
    unset($_SESSION['pass']);
}

if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
}

if (isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);
}

if (isset($_SESSION['gender'])) {
    unset($_SESSION['gender']);
}

if (isset($_SESSION['address'])) {
    unset($_SESSION['address']);
}

if (isset($_SESSION['phone'])) {
    unset($_SESSION['phone']);
}

if (isset($_SESSION['birthday'])) {
    unset($_SESSION['birthday']);
}

if (isset($_SESSION['join'])) {
    unset($_SESSION['join']);
}

if (isset($_SESSION['role'])) {
    unset($_SESSION['role']);
}
if (isset($_SESSION['name'])) {
    unset($_SESSION['name']);
}

 header('location: ../index.php');
?>

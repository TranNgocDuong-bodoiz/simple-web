<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'webdatabase';
$conn = mysqli_connect("$host","$user","$pass","$database");
if(!$conn){
    die("lỗi cmnr: ". mysqli_connect_error());
}
?>
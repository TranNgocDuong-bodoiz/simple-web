
<?php
require_once("../../../../config/connection.php");
?>
<?php

if(isset($_GET['id']) && $_GET['id']!= ''){
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_taikhoankh WHERE id_KH = '$id'";
    $delelte = mysqli_query($conn, $query);
    header("location: http://localhost/simple-web/admincp/index.php?act=taikhoan");
}
?>
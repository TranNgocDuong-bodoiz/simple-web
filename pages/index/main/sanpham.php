<?php
$sql_sanpham = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE idDanhmuc = '$id'");
$row_sanpham = mysqli_fetch_assoc($sql_sanpham);
?>
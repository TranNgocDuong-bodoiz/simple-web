<?php
require_once("../../../../config/connection.php");
?>
<?php
if(isset($_POST['themdanhmuc'])){
    $tendm = $_POST['tendanhmuc'];
    $stt = $_POST['stt'];
    $sql = mysqli_query($conn, "INSERT INTO tbl_danhmuc(ten,stt) VALUE ('$tendm', '$stt')");
    header('location: http://localhost/simple-web/admincp/index.php?act=danhmuc');
}   
?>

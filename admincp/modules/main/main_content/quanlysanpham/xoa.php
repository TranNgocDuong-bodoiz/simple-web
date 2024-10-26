<?php
require_once("../../../../config/connection.php");
?>
<h4>Xóa sản phẩm</h4>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql_anh = mysqli_query($conn, "SELECT anh FROM tbl_sanpham WHERE maSP = '$id'");
    $row = mysqli_fetch_array($sql_anh);
    unlink("../../../../uploads/".$row['anh']);
    $sql = mysqli_query($conn, "DELETE FROM tbl_sanpham WHERE maSP = '$id'");
    header("location: http://localhost/simple-web/admincp/index.php?act=sanpham");
    exit();
}
?>
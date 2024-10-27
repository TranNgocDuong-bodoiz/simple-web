<?php
require_once("../../../../config/connection.php");
?>
<?php
if(isset($_POST['add_product'])){

    $tensanpham = "";
    $giasanpham = "";
    $idDanhmuc = $_POST['tendanhmuc'];
    $anhsanpham = "";
    $motasanpham = "";
    ($_POST['tensanpham'] != "") ? $tensanpham = $_POST['tensanpham'] : $tensanpham = "Chưa cập nhật";
    ($_POST['giasanpham'] != "") ? $giasanpham = $_POST['giasanpham'] : $giasanpham = "Chưa cập nhật";
    ($_POST['motasanpham'] != "") ? $motasanpham = $_POST['motasanpham'] : $motasanpham = "Chưa cập nhật";
    ($_FILES['anhsanpham']['name'] != "") ? $anhsanpham = date("Ymdhis")."_".$_FILES['anhsanpham']['name'] : $anhsanpham = "Chưa cập nhật";
    $anhsanpham_tmp = $_FILES['anhsanpham']['tmp_name'];
    move_uploaded_file($anhsanpham_tmp, "../../../../uploads/".$anhsanpham);
    $sql = mysqli_query($conn, "INSERT INTO `tbl_sanpham`(`ten`, `anh`, `gia`, `idDanhmuc`, `mota`) VALUES ('$tensanpham','$anhsanpham','$giasanpham','$idDanhmuc','$motasanpham')");
    header('location: http://localhost/simple-web/admincp/index.php?act=sanpham');
    exit();
}
else{
    echo "Không có dữ liệu";
    echo "<a href='http://localhost/simple-web/admincp/index.php?act=sanpham'>Quay lại</a>";
}
?>
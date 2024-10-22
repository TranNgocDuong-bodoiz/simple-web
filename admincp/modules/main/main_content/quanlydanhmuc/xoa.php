<?php
require_once("../../../../config/connection.php");
?>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM tbl_danhmuc WHERE maDM = '$id'";
    if(mysqli_query($conn, $sql)) {
        header('Location: http://localhost/simple-web/admincp/index.php?act=danhmuc');
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>

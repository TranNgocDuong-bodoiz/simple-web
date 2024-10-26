<?php
require_once("../../../../config/connection.php");
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE maSP = '$id'");
$row = mysqli_fetch_assoc($sql);
?>
<div class="Wraper">
    <form method="POST" enctype="multipart/form-data">
        <div class="input_bar">
            <span>Tên sản phẩm</span>
        <input type="text" value="<?php echo $row['ten']?>" name="tensanpham" required>
    </div>
    <div class="input_bar">
        <span>Giá sản phẩm</span>
        <input type="text" value="<?php echo $row['gia']?>" name="giasanpham" required>
        </div>
        <div class="input_bar">
            <span>Chọn danh mục</span>
            <select name="tendanhmuc" required>
            <?php
            $sql_danhmuc = mysqli_query($conn, "SELECT maDM,ten FROM tbl_danhmuc ORDER BY stt ASC");
            while($row_danhmuc = mysqli_fetch_assoc($sql_danhmuc)){
                echo "<option value=".$row_danhmuc['maDM'].">".$row_danhmuc['ten']."</option>";
            }
            ?>
            </select>
    </div>
    <div class="input_bar">
        <span>Ảnh sản phẩm</span>
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 10px;">
        <?php
        echo "<img src='../../../../uploads/".$row['anh']."'width='200px'>";
        ?>
        </div>
        <input type="file" name="anhsanpham" accept="image/*">
    </div>
    <div class="input_bar">
        <span>Mô tả sản phẩm</span>
        <textarea name="motasanpham" placeholder="Mô tả sản phẩm"><?php echo $row['mota']?></textarea>
    </div>
    <div class="input_bar">
        <input type="submit" value="Sửa sản phẩm" name="suasanpham">
    </div>
    </form>
</div>
<?php
    $anhsanpham_old = $row['anh'];
    if(isset($_POST['suasanpham'])){
       $ten = $_POST['tensanpham'];
       $gia = $_POST['giasanpham'];
       $idDm = $_POST['tendanhmuc'];
       $mota = $_POST['motasanpham'];
       
       if($_FILES['anhsanpham']['name'] == ""){
           $sql_sua = mysqli_query($conn, "UPDATE tbl_sanpham SET ten ='$ten', gia ='$gia', idDanhmuc ='$idDm', mota ='$mota' WHERE maSP = '$id'");
       } else {
           $anh = date("Ymdhis")."_".$_FILES['anhsanpham']['name'];
           $anh_tmp = $_FILES['anhsanpham']['tmp_name'];
           move_uploaded_file($anh_tmp, "../../../../uploads/".$anh);

           if($anhsanpham_old != "" && file_exists("../../../../uploads/".$anhsanpham_old)){
               unlink("../../../../uploads/".$anhsanpham_old);
           }
           
           $sql_sua = mysqli_query($conn, "UPDATE tbl_sanpham SET ten ='$ten', gia ='$gia', idDanhmuc ='$idDm', mota ='$mota', anh ='$anh' WHERE maSP = '$id'");
       }
       
       if($sql_sua){
           header("location: http://localhost/simple-web/admincp/index.php?act=sanpham");
           exit();
       } else {
           echo "Có lỗi xảy ra: " . mysqli_error($conn);
       }

       }
    
    ?>
<style>
    /* Căn chỉnh chung cho body */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Định dạng bao bọc ngoài của form */
.Wraper {
    width: 400px;
    padding: 20px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Định dạng mỗi ô nhập liệu */
.input_bar {
    margin-bottom: 15px;
}

.input_bar span {
    display: block;
    font-size: 14px;
    color: #28a745;
    font-weight: 600;
    margin-bottom: 5px;
}

/* Định dạng các ô input, select, textarea */
input[type="text"],
input[type="file"],
select,
textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    color: #333;
    border: 1px solid #cccccc;
    border-radius: 4px;
    background-color: #f9f9f9;
    transition: border-color 0.3s ease;
    box-sizing: border-box;
}

input[type="text"]:focus,
input[type="file"]:focus,
select:focus,
textarea:focus {
    border-color: #28a745;
    outline: none;
}

textarea {
    resize: vertical;
    min-height: 80px;
}

/* Định dạng nút submit */
input[type="submit"] {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    font-size: 14px;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #218838;
}

/* Responsive cho màn hình nhỏ */
@media (max-width: 480px) {
    .Wraper {
        width: 90%;
        padding: 15px;
    }

    .input_bar span, input[type="text"], input[type="file"], select, textarea, input[type="submit"] {
        font-size: 13px;
    }
}

</style>

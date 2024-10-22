<?php
require_once("../../../../config/connection.php");
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM tbl_danhmuc WHERE maDM = '$id'");
    $row = mysqli_fetch_assoc($sql);
    $ten = $row['ten'];
    $stt = $row['stt'];
}
?>
<table>
   <thead>
    <tr>
        <th>Tên danh mục</th>
        <th>Số thứ tự</th>
    </tr>
   </thead>
   <tbody>
    <tr>
        <form action="" method="POST">
        <td>
            <input type="text" value="<?php echo $ten ?>" name="tendanhmuc">
        </td>
        <td>
            <input type="text" value="<?php echo $stt ?>" name="stt">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="suadanhmuc" value="Xác nhận sửa">
        </td>
    </tr>
        </form>
   </tbody>
</table>
<?php
    if(isset($_POST['suadanhmuc'])){
        $tendanhmuc = $_POST['tendanhmuc'];
        $stt = $_POST['stt'];
        $sql = mysqli_query($conn, "UPDATE `tbl_danhmuc` SET `ten`='$tendanhmuc',`stt`='$stt' WHERE `maDM`='$id'");
        header('location: http://localhost/simple-web/admincp/index.php?act=danhmuc');
    }
?>
<style>
/* Đặt nền trang và căn giữa bảng */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Định dạng bảng */
table {
    width: 50%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    padding: 20px;
}

/* Định dạng header của bảng */
thead {
    background-color: white; /* Màu nền trắng */
    color: #28a745; /* Màu green */
}

thead th {
    padding: 15px;
    text-align: left;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 2px solid #28a745; /* Đường viền dưới màu green */
}

/* Định dạng các ô trong bảng */
tbody tr {
    border-bottom: 1px solid #dddddd;
}

tbody tr:last-child {
    border-bottom: none;
}

tbody td {
    padding: 15px;
    color: #333333; /* Màu black nhạt */
    font-size: 16px;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Định dạng các input trong bảng */
input[type="text"] {
    width: 95%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    color: #333333;
    box-sizing: border-box;
    background-color: #f9f9f9;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #28a745; /* Màu green khi input được focus */
    outline: none;
}

/* Định dạng nút Xác nhận sửa */
input[type="submit"] {
    background-color: #28a745; /* Màu green */
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #218838; /* Màu green tối hơn khi hover */
}

/* Responsive cho mobile */
@media (max-width: 768px) {
    table {
        width: 90%;
    }
    
    thead th, tbody td {
        font-size: 14px;
        padding: 10px;
    }
    
    input[type="text"] {
        font-size: 14px;
    }
    
    input[type="submit"] {
        font-size: 14px;
        padding: 10px;
    }
}

</style>
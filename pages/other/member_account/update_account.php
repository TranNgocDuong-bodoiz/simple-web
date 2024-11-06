sửa
<?php
require_once("../../../admincp/config/connection.php");
session_start();
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['birthday'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'] ;
    $address = $_POST['address'] ;
    $birthday = $_POST['birthday'];
    $id =$_SESSION['id'] ;
    if($name != "" && $email != "" && $gender != "" && $phone != ""
       && $address != "" && $birthday != "") {
        
        $sql = "
        UPDATE `tbl_taikhoankh` SET `tenKH`='$name',`email`='$email',`ngaysinh`='$birthday',`sodienthoai`='$phone',`gioitinh`='$gender',`diachi`='$address' WHERE id_KH = '$id'
        ";

        if(isset($_POST['update-info'])){
            $query = mysqli_query($conn, $sql);
            $_SESSION['customer'] = $name;
            $_SESSION['gender'] = $gender;
            $_SESSION['address'] = $address;
            $_SESSION['birthday'] = $birthday;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            header('location: account_infor.php?act=account');
        }
        else{
            echo'lỗi cmnr';
        }

       }
} else {
    echo "Dữ liệu không được gửi. Vui lòng kiểm tra lại.";
}

?>
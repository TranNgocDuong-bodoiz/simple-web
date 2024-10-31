<?php
$message1 ='';
$message2 = '';
if(isset($_POST['add_account'])){
        $username = $_POST['taikhoan'];
        $pass = $_POST['matkhau'];
        $name = $_POST['hoten'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $tel = $_POST['sodienthoai'];
        $birth = $_POST['ngaysinh'];
        $address = $_POST['diachi'];
        $role = $_POST['role'];
        $date = date('Y-m-d');

        $sql = mysqli_query($conn,"SELECT * FROM tbl_taikhoankh WHERE username = '$username' ");
        if(mysqli_num_rows($sql) > 0){
            $message1 = '*Username đã tồn tại! Vui lòng nhập username khác';
        } else {
            $message1 = "";
        }

        $sqli = mysqli_query($conn, "SELECT * FROM tbl_taikhoankh WHERE email = '$email' ");
        if(mysqli_num_rows($sqli) > 0){
            $message2 = "*Email đã tồn tại! Vui lòng nhập email khác";
        } else {
            $message2 = "";
        }

        if($message1 == "" && $message2 == ""){
        if($username != '' && $pass != '' && $name != '' && $email != '' && $gender != '' && $tel != '' && $birth != '' && $address != ''){
                    $sql = mysqli_query($conn, "INSERT INTO `tbl_taikhoankh`
                    (`username`, `password`, `tenKH`, `email`, `ngaysinh`,`sodienthoai`, `gioitinh`, `diachi`, `created_at`, `role`) 
                    VALUES ('$username','$pass','$name','$email','$birth', '$tel' ,'$gender','$address', '$date', '$role')
                    ");
        }
        } 
        else{
            echo "
            <script>
                    alert('thêm thất bại');
            </script>
            ";
        }
}
?>
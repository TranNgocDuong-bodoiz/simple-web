<?php
require_once("../../admincp/config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="../../css/other/register.css">
</head>
<body>
<?php
    $message1 ='';
    $message2 = '';
    if(isset($_POST['submit_button'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $tel = $_POST['phone'];
        $birth = $_POST['birthday'];
        $address = $_POST['address'];
        $date = date('Y-m-d');
        $role = "user";

        $sql = mysqli_query($conn,"SELECT * FROM tbl_taikhoankh WHERE username = '$username' ");
        if(mysqli_num_rows($sql) > 0){
            $message1 = '*Tên tài khoản đã được sử dụng! <br>';
        } else {
            $message1 = "";
        }

        $sqli = mysqli_query($conn, "SELECT * FROM tbl_taikhoankh WHERE email = '$email' ");
        if(mysqli_num_rows($sqli) > 0){
            $message2 = "*Email đã được sử dụng! <br>";
        } else {
            $message2 = "";
        }

        if($message1 == "" && $message2 == ""){
        if($username!= '' && $pass != '' && $name != '' && $email != '' && $gender != '' && $tel != '' && $birth != '' && $address != ''){
                    $sql = mysqli_query($conn, "INSERT INTO `tbl_taikhoankh`
                    (`username`, `password`, `tenKH`, `email`, `ngaysinh`,`sodienthoai`, `gioitinh`, `diachi`, `created_at`, `role`) 
                    VALUES ('$username','$pass','$name','$email','$birth', '$tel' ,'$gender','$address', '$date', '$role')
                    ");
                    header("location: login.php");
                    exit(); 
        }
        }  
    }
?>
    <div class="container">
        <div class="img-register">
            <img src="../../imgaes/login-background-removebg.png" alt="" width="100%">
        </div>
        <div class="right-register">
    <div class="reg-title"><span>Đăng ký tài khoản</span></div>
    <div style="color: red;">
        <?php echo $message1.$message2;?>
    </div>
    <form action="" method="post" autocomplete="off">
    <div class="input-ct">
        <div class="reg-content"><span>Tên tài khoản</span></div>
        <input class="input-reg-box" type="text" name="username" placeholder="Tên tài khoản" required>
    </div>
    <div class="input-ct">
        <div class="reg-content"><span>Họ và tên</span></div>
        <input class="input-reg-box" type="text" name="fullname" placeholder="Họ và tên" required>
    </div>
    <div class="input-ct">
        <div class="reg-content"><span>Mật khẩu</span></div>
        <input class="input-reg-box" type="password" name="password" placeholder="Mật khẩu" required>
    </div>
    <div class="input-ct">
        <div class="reg-content"><span>Email</span></div>
        <input class="input-reg-box" type="email" name="email" placeholder="Email" required>
    </div>
    <div class="input-ct">
        <div class="reg-content"><span>Giới tính</span></div>
        <input type="radio" id="nam" name="gender" value="nam" required>
        <label for="nam">Nam</label><br>
        <input type="radio" id="nu" name="gender" value="nu" required>
        <label for="nu">Nữ</label><br>
    </div>
    <div class="input-ct">
        <div class="reg-content"><span>Điện thoại</span></div>
        <input class="input-reg-box" type="tel" name="phone" placeholder="Điện thoại" required>
    </div>
    <div class="input-ct">
        <div class="reg-content"><span>Ngày sinh</span></div>
        <input class="input-reg-box" type="date" name="birthday" placeholder="Điện thoại" required>
    </div>
    <div class="input-ct">
        <div class="reg-content"><span>Địa chỉ</span></div>
        <input class="input-reg-box" type="text" name="address" placeholder="Địa chỉ" required>
    </div>
    <div class="btr-reg">
        <button class="brt--click" type="submit" name="submit_button">Đăng ký</button>
        <a class="goback" href="login.php">Back</a>
    </div>
</form>
    </div>
</div>

</body>
</html>

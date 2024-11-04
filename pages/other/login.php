<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple mobile</title>
    <link rel="stylesheet" href="../../css/other/login.css">
</head>
<body>
    <?php
    require_once('../../admincp/config/connection.php');
    $message = '';
    if(isset($_POST['login-btn'])){
        $user = $_POST['taikhoan'];
        $pass = $_POST['matkhau'];
        $select = "SELECT * FROM tbl_taikhoankh WHERE username = '$user' AND password = '$pass'";
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($query);
        $total = mysqli_num_rows($query);
        if($total > 0){
            $customer = $row['tenKH'];
            $index = -1;
            $cus_arr =  [];
            $customerName = [];
            $name = "";
            for($i = 0; $i < strlen($customer); $i++){
               $cus_arr[] = $customer[$i];
            }
            for($i = 0; $i < count($cus_arr); $i++){
                if($cus_arr[$i] == " "){
                    $index = $i;
                }
            }
            $index += 1;
            for($i = $index; $i < count($cus_arr); $i++){
                $customerName[] = $cus_arr[$i];
            }
            for($i = 0; $i < count($customerName); $i++){
                $name .= $customerName[$i];
            }
            //
            $_SESSION['user'] = $row['username'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['name'] = $name;
            $_SESSION['email'] =$row['email'];
            $_SESSION['role'] = $row['role'];
            if($_SESSION['role'] == 'admin'){
                $_SESSION['log'] = 1;
                header('location: ../../admincp/index.php');
            }else{
            $message = 'Đăng nhập thành công';
            header('location: ../../index.php');
            }
            
        }
        else{
            $message = 'Sai mật khẩu hoặc tài khoản!';
        }
    }
        ?>
    
    
    <div class="container">
        <div class="image-container">
            <div class="image-simple">
            <img src="../../imgaes/login-background-removebg.png" alt="shop simple">
            </div>
        </div>
        <div class="login-simple">
            <h2>Đăng Nhập</h2>
            <div class="message">
            <?php echo $message;?>
            </div>
            <form action="#" method="POST">
                <label for="taikhoan">Tài khoản</label>
                <input type="text" id="taikhoan" name="taikhoan" placeholder="Nhập tài khoản">
                <label for="matkhau">Mật khẩu</label>
                <input type="password" id="matkhau" name="matkhau" placeholder="Nhập mật khẩu">
                <div class="button-simple">
                    <button type="submit" class="login-btn" name="login-btn">Đăng nhập</button>
                    <a href="../../index.php" class="goback">Back</a>
                </div>
                <span>Chưa có tài khoản?</span>
                <a href="./register.php" style="text-decoration: none;">
                Đăng ký
                </a>
            </form>
            
        </div>
    </div>
    
    

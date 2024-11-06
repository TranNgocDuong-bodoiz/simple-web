<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple Mobile | cửa hàng điện thoại nổi bật</title>
    <link rel="stylesheet" href="./asset/fontawesome-free-6.6.0-web/css/all.min.css">
    <link href="fontawesome-free-6.6.0-web/css/all.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="./css/container-index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main-index.css">
    <link rel="stylesheet" href="css/other/detail.css">
    <link rel="icon" href="./imgaes/favicon.ico" type="image/png">
    <?php
    session_start();
    require_once("admincp/config/connection.php");
    if(isset($_SESSION['user']) && ($_SESSION['user']) != ''){
        $user = $_SESSION['user'];
    }
    else{
        $user = '';
    }
    if(isset($_SESSION['pass']) && ($_SESSION['pass']) != ''){
        $pass = $_SESSION['pass'];
    }
    else{
        $pass = '';
    }
    if(isset($_SESSION['name']) && ($_SESSION['name']) != ''){
        $name = $_SESSION['name'];
    }
    else{
        $name = 'Sign in';
    }
    ?>
    <?php
    if($user != "" && $pass != "" && $name != ""){
        $IsLogin = true;
        $logined = "./pages/other/member_account/account_infor.php";
    }
    else{
        $logined = "./pages/other/login.php";
        $IsLogin = false;
    }
    ?>
</head>
<body>
<div class="container">
    <?php
    require_once("./pages/index/header/header.php");
    require_once("./pages/index/main/main.php");
    
    require_once("./pages/index/footer/footer.php");
    ?>
</div> <!-- Đóng thẻ container --> 
</body>
</html>
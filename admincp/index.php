<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin cp</title>
    <link rel="stylesheet" href="css/admin-title.css">
    <link rel="stylesheet" href="css/main/dashboard.css">
    <link rel="stylesheet" href="css/main/show-main.css">
    <link rel="stylesheet" href="css/container.css">
    <link rel="icon" href="../imgaes/favicon.ico" type="image/x-icon">
</head>
<body>
    
<?php 
    session_start();
    include 'config/connection.php';
    
    if(!isset($_SESSION['log']) || $_SESSION['log'] != 1){
        header('location: login.php');
        exit();
    } else { ?>
        <div class="admin-title">   
            <h3>Welcome to admincp</h3>
        </div>
        <div class="wraper">
            <div class="menu">
                <?php include 'modules/menu/menu.php'; ?>
            </div>
            <div class="main">
                <?php include 'modules/main/main_container.php'; ?>
            </div>
        </div>
    <?php } ?>
    <script>
    function confirmLogout() {
        var confirmation = confirm('Bạn có muốn thoát tài khoản không?');
        if (confirmation) {
            return true;
        } else {
            return false;
        }
    }
</script>
</body>
</html>
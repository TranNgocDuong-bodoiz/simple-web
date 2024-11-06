
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
    <link rel="stylesheet" href="./mb_css/mb.css">
    <?php
    require_once("../../../admincp/config/connection.php");
    session_start();
    $username = (isset($_SESSION["user"]) && $_SESSION['user'] != '') ? $_SESSION['user'] : '';
    $password = (isset($_SESSION['pass']) && $_SESSION['pass'] != '') ? $_SESSION['pass'] : '';
    $email = (isset($_SESSION['email']) && $_SESSION['email'] != '') ? $_SESSION['email'] : '';
    $customer = (isset($_SESSION['customer']) && $_SESSION['customer'] != '') ? $_SESSION['customer'] : '';
    $gender = (isset($_SESSION['gender']) && $_SESSION['gender'] != '') ? $_SESSION['gender'] : '';
    $address = (isset($_SESSION['address']) && $_SESSION['address'] != '') ? $_SESSION['address'] : '';
    $phone =(isset($_SESSION['phone']) && $_SESSION['phone'] != '')? $_SESSION['phone'] :'';
    $birthday = (isset($_SESSION['birthday']) && $_SESSION['birthday'] != '') ? $_SESSION['birthday'] : '';
    $join = (isset($_SESSION['join']) && $_SESSION['join'] != '') ? $_SESSION['join'] : '';
    $role = (isset($_SESSION['role']) && $_SESSION['role'] != '') ? $_SESSION['role'] : '';
    ?>
</head>
<body>
    <div class="container">
        <?php
        require_once("menu.php");
        require_once("content_box.php");
        ?>
    </div>
    <script>
    function confirmLogout() {
        var confirmation = confirm("Bạn có muốn đăng xuất tài khoản không?");
        if (confirmation) {
            return true;
        } else {
            return false;
        }
    }
</script>
</body>
</html>
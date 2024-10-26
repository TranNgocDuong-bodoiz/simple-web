<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple </title>
    <link rel="stylesheet" href="./asset/fontawesome-free-6.6.0-web/css/all.min.css">
    <link href="fontawesome-free-6.6.0-web/css/all.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="./css/container-index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main-index.css">
    <?php
    require_once("admincp/config/connection.php");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link rel="stylesheet" href="css/admin-title.css">
    <link rel="stylesheet" href="css/main/dashboard.css">
    <link rel="stylesheet" href="css/main/show-main.css">
    <link rel="stylesheet" href="css/container.css">
</head>
<body>
    <div class="admin-title">   
        <h3>Welcome to admincp</h3>
    </div>
    <div class="wraper">
        <div class="menu">
            <?php
            include 'modules/menu/menu.php';
            ?>
        </div>
        <div class="main">
            <?php
            include 'modules/main/main_container.php';
            ?>
        </div>
    </div>
</body>
</html>
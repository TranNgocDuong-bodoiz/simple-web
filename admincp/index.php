<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link rel="stylesheet" href="css/wraper.css">
    <link rel="stylesheet" href="css/title.css">
</head>
<body>
    <div class="title">
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
            include 'modules/main/header.php';
            include 'modules/main/main_container.php';
            ?>
        </div>
    </div>
</body>
</html>
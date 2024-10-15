<div class="main">
        <?php
        if(isset($_GET["quanly"])){
            $_ql = $_GET['quanly'];
        }
        else{
            $_ql = '';
        }
        if($_ql == 'dienthoai'){
            require_once('phone_product.php');
        }
        else if($_ql == 'tablet'){
            require_once('tablet_product.php');
        }
        else if($_ql == 'phukien'){
            require_once('accessories.php');
        }
        else if($_ql == 'tintuc'){
            require_once('news.php');
        }
        else{
            require_once('index.php');
        }
        ?>

    </div> <!-- Đóng thẻ main -->
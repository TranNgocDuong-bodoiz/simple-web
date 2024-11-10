<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../asset/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href=" ../../../css/style-cart.css">
    <link rel="stylesheet" href="../../../css/header.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="stylesheet" href="../../../css/main-index.css">
    <link rel="icon" href="../../../imgaes/favicon.ico" type="image/png">
    <link rel="stylesheet" href="../../../css/main-index.css">
    <title>Document</title>
</head>
<body>
<?php
include '../../../admincp/config/connection.php';
include("../header/header.php"); 
if(!isset($_SESSION['cart'])) {
    $_SESSION["cart"] = array() ;
}
if(isset($_GET['action'])) {
    switch ($_GET['action']){
        case "add":
            foreach ($_POST['quantity'] as $maSP => $quantity) {
                $_SESSION ["cart"] [$maSP] = $quantity;
            }
            break;
    }
}
 if(!empty($_SESSION ["cart"])) {
    
    $result = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `maSP` IN (".implode(",", array_keys($_SESSION["cart"])).")");
 ;
 }
?>

    <section class="cart">
    <form id="cart-from" action="cart.php?action=submit" method="post">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fas fa-cart-shopping"></i>
                    </div>
                    <div class="cart-top-adress cart-top-item">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <?php
                          $num = 1;
                          while ($row = mysqli_fetch_array($products)) {  ?>
                        <tr>
                            <td><?=$num++;?></td>
                            <td><img src="../../../imgaes/dt_noiBat/iphone-16-pro-max.webp" alt="Iphone 16 Pro Max"></td>
                            <td><p><?=$row['ten']?></p></td>
                            <td><?=$row['gia']?></td>                                                   
                            <td class="product-quantity"><input type="text" value="<?=$_SESSION ["cart"][$row['maSP']] ?>" name="quantity[<?=$row['maSP']?>]"></td>
                            <td><?=$row['gia']?></td>
                            <td>X</td>
                        </tr>
                        <?php    
                         $num++;
                        } ?>
                    </table>
                </div>
                
            </div>
        </div>
        </form>
    </section>
    
   <!-- footer --> 
<div class="footer">
        <div class="footer-logo"><img src="../../../imgaes/logo2.png" height="100%" alt=""></div>
            <div class="text text--name">Cửa hàng điện thoại simple mobile</div>
            <div class="text-container-a">
                <div class="text text--desc">Địa chỉ:</div>
                <div class="text text--infor">Số 41A đường Phú Diễn, phường Phú Diễn, quận Bắc Từ Liêm, thành phố Hà Nội.</div>
            </div>
            <div class="text-container-p">
                <div class="text text--desc">Điện thoại:</div>
                <div class="text text--infor">0888888999</div>
            </div>
            <div class="tex-container-e">
            <div class="text text--desc">Email:</div>
            <div class="text text--infor">simplemobile.bodoi.com</div>
            </div>
    </div>
    
    <!-- footer -->  
    
</body>
</html>
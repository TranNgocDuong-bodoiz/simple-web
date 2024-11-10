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

    function update_cart($add = false)  {
            foreach ($_POST['quantity'] as $maSP => $quantity) {

              if($quantity ==0 ) {
                unset($_SESSION["cart"] [$maSP]);
              } else{
                if ($add) {
                    $_SESSION["cart"][$maSP] += $quantity;
                } else {
                    $_SESSION["cart"][$maSP] = $quantity;
                }
              }
        }    
    }
    switch ($_GET['action']){
        case "add":
            update_cart(true);
            header('Location: ../../../cart.php');
            break;
        case "delete":
            if(isset($_GET['maSP'])){
                unset($_SESSION["cart"][$_GET['maSP']]);
            }
            header('Location: ../../../cart.php');
            break;
        case "submit"
            if(isset($_POST['update_click'])){      // cap nhat sl sp
                update_cart();
                header('Location: ../../../cart.php');
                
            } elseif($_POST['order_click']) {        // dat hang sp
                echo "Đặt hàng" ;
                exit;
            }   
            break;
    }
}
 if(!empty($_SESSION ["cart"])) {
    
    $products = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `maSP` IN (".implode(",", array_keys($_SESSION["cart"])).")");
 ;
 }
?>

    <section class="cart">
    <form id="cart-form" action="cart.php?action=submit" method="POST">
        <div class="container">
            
            <div class="cart-content row">
                <div class="cart-content">
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
                            <td><a href="cart.php?action=delete&maSP=<?=$row['maSP']?>"></a>Xóa</td>
                        </tr>
                        <?php    
                         $num++;
                        } ?>
                        <tr>
                            <td>&nbsp</td>
                            <td>Tổng tiền</td>                                                       
                            <td>&nbsp</td>
                            <td>&nbsp</td>
                            <td>&nbsp</td>
                            <td>49.000.000 </td>
                            <td>Xóa</td>
                        </tr>
                    </table>
                    <div id="form-button">
                              <input type="submit" name="update_click" value="Cập nhật"> 
                    </div> 
                    <hr>
                    <div><label>Người nhận: </label><input type="text" value="" name="name" ></div>
                    <div><label>Điện thoại: </label><input type="text" value="" name="phone" ></div>
                    <div><label>Địa chỉ: </label><input type="text" value="" name="address" ></div>
                    <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7"></textarea> </div>
                    <input type="submit" name="order_click" value="Đặt hàng">
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
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
$error = false;
$success = false;
if(isset($_GET['action'])) {

    function update_cart($add = false)  {
            foreach ($_POST['quantity'] as $id => $quantity) {

              if($quantity ==0 ) {
                unset($_SESSION["cart"] [$id]);
              } else{
                if ($add) {
                    $_SESSION["cart"][$id] += $quantity;
                } else {
                    $_SESSION["cart"][$id] = $quantity;
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
            if(isset($_GET['id'])){
                unset($_SESSION["cart"][$_GET['id']]);
            }
            header('Location: ../../../cart.php');
            break;
        case "submit"
            if(isset($_POST['update_click'])) {      // cap nhat sl sp
                update_cart();
                header('Location: ../../../cart.php');
                
            } elseif ($_POST['order_click']) {        // dat hang sp
                if (empty($_POST['name'])) {
                    $error = "Bạn chưa nhập tên của người nhận"
                } elseif (empty($_POST['phone'])) {
                    $error = "Bạn chưa nhập số điện thoai của người nhận"
                } elseif (empty($_POST['address'])) {
                    $error = "Bạn chưa nhập địa chỉ của người nhận"
                } elseif (empty($_POST['quantity'])) {
                    $error = "Giỏ hàng rỗng"
                }
                if($error == false && !empty($_POST['quantity'])) {  // xu li cart luu vo database
                    $products = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `id` IN (".implode(",", array_keys($_POST['quantity'])).")");
                    $total = 0;
                    $orderProducts = array();
                    while ($row = mysqli_fetch_array($products)) { 
                            $orderProducts [] = $row;
                           $total += $row['price'] * $_POST['quantity'][$row['id']];
                    }
                    // /echo date("d/m/Y H:i", 1588035137);exit;/ 
                    $insertOrder = mysqli_query($conn, "INSERT INTO `order` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['note']."', '.$total.', '".time()."', '".time()."');");
                    $orderID = $conn->insert_id;
                    $insertString = "";
                     foreach ($orderProducts as $key=> $products) {

                        $insertString .= "(NULL, '".$orderID."', '".$products['id']."', '"$_POST['quantity'][$products['id']]"', '".$products['price']."', '".time()."', '".time()."')";
                        if($key != count($orderProducts) - 1){
                            $insertString .= ",";
                        }
                    }


                    
                    $insertOrder = mysqli_query($conn, "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `gia`, `created_time`, `last_updated`) VALUES ".$insertString.";");
                    $success = "Đặt hàng thành công";
                    $unset($_SESSION["cart"]);
            }   
            break;
    }
}
 if(!empty($_SESSION ["cart"])) {
    
    $products = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `id` IN (".implode(",", array_keys($_SESSION["cart"])).")");
 ;
 }
?>

    <section class="cart">
    <?php if(!empty($error)) { ?>
        <div id="notify-msg">
             <?=$error?>. <a href="javascript:history.back()">Quay lại</a>
        </div>
    <?php } elseif(!empty($success)){   ?>
       <div id="notify-msg">
             <?=$success?>. <a href="index.php">Tiếp tục mua hàng</a>
       </div>
    <?php } else { ?>
        <form id="cart-form" action="cart.php?action=submit" method="POST">
        <div class="container">
            
            <div class="cart-content row">
                <div class="cart-content">
                    <table>
                        <tr>
                            <th class="product-number">STT</th>
                            <th class="product-img">Ảnh Sản phẩm</th>
                            <th class="product-name">Tên sản phẩm</th>
                            <th class="product-price">Đơn giá</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="total-money">Thành tiền</th>
                            <th class="product-delete">Xóa</th>
                        </tr>
                        <?php
                        if (!empty($products)) {
                            $total = 0;
                            $num = 1;
                            while ($row = mysqli_fetch_array($products)) {  
                              ?>
                         <tr>
                            <td class="product-number"><?=$num++;?></td>
                            <td class="product-img"><img src=<?= $row['image'] ?>></td>
                            <td class="product-name"><p><?=$row['name']?></p></td>
                            <td class="product-price"><?= number_format($row['price'], 0, ",", ".") ?></td>                                                   
                            <td class="product-quantity"><input type="text" value="<?=$_SESSION ["cart"][$row['id']] ?>" name="quantity[<?=$row['id']?>]"></td>
                            <td class="total-money"><?= number_format($row['price'] * $_SESSION ["cart"][$row['id']], 0, ",", ".") ?></td>
                            <td class="product-delete"><a href="cart.php?action=delete&id=<?=$row['id']?>"></a>Xóa</td>
                         </tr>
                        <?php 
                        $total +=  $row['price'] * $_SESSION ["cart"][$row['id']] ;  
                        $num++;
                    }
                    ?>
                          <tr>
                            <td class="product-number">&nbsp</td>
                            <td class="product-name">Tổng tiền</td>                                                       
                            <td class="product-img">&nbsp</td>
                            <td class="product-price">&nbsp</td>
                            <td class="product-quantity">&nbsp</td>
                            <td class="total-money"><?= number_format($total, 0, ",", ".") ?></td>
                            <td class="product-delete">Xóa</td>
                         </tr>
                    <?php
                } 
                ?>
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
    <?php } ?>
    
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
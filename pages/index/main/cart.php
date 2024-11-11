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
<style>
    
</style>
<body>
<?php
include '../../../admincp/config/connection.php';?>
<!-- header div -->
<div class="page_header">
        <!-- 1.logo / 2.danh_muc/ 3.search_bar / 4.hotline/ 5.tra_cuu_don_hang/ 6.gio_hang/ 7.tai_khoan -->
        <div class="logo">
            <div class="shop_name">
                <span>SIMPLE MOBILE</span>
            </div>
            <div class="shop_content">
                favourite online store
            </div>
        </div>
        <!-- 2.danh_muc -->
        <div class="danh_muc_container">
            <div class="danh_muc">
                <i class="fa-solid fa-bars"></i>
                <span>Danh mục</span>
            </div>
            <!-- 3.danh_muc_list -->
            <ul class="danh_muc_list">
                <!-- 4.gap_item --> 
                <li class="gap_item"><i class="fa-solid fa-angle-down"></i></li>
                <!-- 5.danh_muc_item -->
                <a style="text-decoration: none; color: black;" href="index.php">
                <li class="danh_muc_item">
                    <span>Trang chủ</span>
                </li>
                </a>
                 <?php
                 $sql_danhmuc = mysqli_query($conn, "SELECT * FROM tbl_danhmuc ORDER BY stt ASC");
                 while($row_danhmuc = mysqli_fetch_assoc($sql_danhmuc)){?>
                <a style="text-decoration: none; color: black;" href="index.php?id=<?php echo $row_danhmuc['maDM']?>">
                <li class="danh_muc_item">
                    <span> <?php echo $row_danhmuc['ten']?> </span>
                </li>
                </a>
                 <?php
                 } 
                 ?>
                
                
            </ul>
        </div>
        <div >
          <form  class="search_bar" action="" method="GET">
            <input type="text" name="tukhoa" placeholder="Hôm nay bạn cần tìm gì">
            <input type="submit" name="timkiem" value="Tìm kiếm">
            </form>
        </div>
        <div class="hotline">
            <a href="#">
                <div class="hotline_icon"><i class="fa-solid fa-phone-volume"></i></div>
                <div class="hotline_infor">
                    <span id="hotline_text">Gọi mua ngay</span>
                    <span id="hotline_number">0888888889</span>
                </div>
            </a>
        </div>
        <div class="gio_hang">
            <a href="pages\index\main\cart.php">
                <div class="gio_hang_icon"><i class="fa-solid fa-cart-shopping"></i></div>
                <div class="gio_hang_infor"><span id="gio_hang_text">giỏ hàng</span></div>
            </a>
        </div>
        <div class="tai_khoan">
            <a href="<?php echo $logined ?>">
                <div class="tai_khoan_ct">
                    <i class="fa-regular fa-user"></i>
                    <span>
                        <?php
                        echo $_SESSION['name'];
                        ?>
                    </span>
            </div>
            
            </a>
        </div>
    </div> <!-- Đóng thẻ page_header -->
<?php 
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        $error = false;
        $success = false;
        if (isset($_GET['action'])) {

            function update_cart($add = false) {
                foreach ($_POST['quantity'] as $id => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else {
                        if ($add) {
                            $_SESSION["cart"][$id] += $quantity;
                        } else {
                            $_SESSION["cart"][$id] = $quantity;
                        }
                    }
                }
            }

            switch ($_GET['action']) {
                case "add":
                    update_cart(true);
                    header('Location: ./main/cart.php');
                    break;
                case "delete":
                    if (isset($_GET['id'])) {
                        unset($_SESSION["cart"][$_GET['id']]);
                    }
                    header('Location: ./main/cart.php');
                    break;
                case "submit":
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart();
                        header('Location: ./main/cart.php');
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        if (empty($_POST['name'])) {
                            $error = "Bạn chưa nhập tên của người nhận";
                        } elseif (empty($_POST['phone'])) {
                            $error = "Bạn chưa nhập số điện thoại người nhận";
                        } elseif (empty($_POST['address'])) {
                            $error = "Bạn chưa nhập địa chỉ người nhận";
                        } elseif (empty($_POST['quantity'])) {
                            $error = "Giỏ hàng rỗng";
                        }
                        if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                            $products = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE maSP IN (".implode(",", array_keys($_POST['quantity'])).")");
                            $total = 0;
                            $orderProducts = array();
                            while ($row = mysqli_fetch_array($products)) {
                                $orderProducts[] = $row;
                                $total += $row['gia'] * $_POST['quantity'][$row['maSP']];
                            }
                            $insertOrder = mysqli_query($conn, "INSERT INTO `order` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['note']."', $total, '".time()."', '".time()."');");

                            $orderID = $conn->insert_id;
                            $insertString = "";
                            foreach ($orderProducts as $key => $product) {
                                $insertString .= "(NULL, '".$orderID."', '".$products['maSP']."', '".$_POST['quantity'][$products['maSP']]."', '".$products['gia']."', '".time()."', '".time()."')";
                                if ($key != count($orderProducts) - 1) {
                                    $insertString .= ",";
                                }
                            }
                            $insertOrder = mysqli_query($conn, "INSERT INTO order_detail (id, order_id, product_id, quantity, gia, created_time, last_updated) VALUES ".$insertString.";");
                            $success = "Đặt hàng thành công";
                            unset($_SESSION['cart']);
                        }
                    }
                    break;
            }
        }
        if (!empty($_SESSION["cart"])) {
            $products = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE maSP IN (".implode(",", array_keys($_SESSION["cart"])).")");
        }
        ?>
        <div class="container">
            <?php if (!empty($error)) { ?> 
                <div id="notify-msg">
                    <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
                </div>
            <?php } elseif (!empty($success)) { ?>
                <div id="notify-msg">
                    <?= $success ?>. <a href="index.php">Tiếp tục mua hàng</a>
                </div>
            <?php } else { ?>
                <h1>Giỏ hàng</h1>
                <form id="cart-form" action="cart.php?action=submit" method="POST">
                    <table>
                        <tr>
                            <th class="product-number">STT</th>
                            <th class="product-name">Tên sản phẩm</th>
                            <th class="product-img">Ảnh sản phẩm</th>
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
                                    <td class="product-number"><?= $num++; ?></td>
                                    <td class="product-name"><?= $row['ten'] ?></td>
                                    <td class="product-img"><img src="../../../admincp/uploads/<?= $row['anh'] ?>" /></td>
                                    <td class="product-price"><?= number_format($row['gia'], 0, ",", ".") ?></td>
                                    <td class="product-quantity"><input type="text" value="<?= $_SESSION["cart"][$row['maSP']] ?>" name="quantity[<?= $row['maSP'] ?>]" /></td>
                                    <td class="total-money"><?= number_format($row['gia'] * $_SESSION["cart"][$row['maSP']], 0, ",", ".") ?></td>
                                    <td class="product-delete"><a href="cart.php?action=delete&id=<?= $row['maSP'] ?>">Xóa</a></td>
                                </tr>
                                <?php
                                $total += $row['gia'] * $_SESSION["cart"][$row['maSP']];  
                            }
                            ?>
                            <tr id="row-total">
                                <td class="product-number">&nbsp;</td>
                                <td class="product-name">Tổng tiền</td>
                                <td class="product-img">&nbsp;</td>
                                <td class="product-price">&nbsp;</td>
                                <td class="product-quantity">&nbsp;</td>
                                <td class="total-money"><?= number_format($total, 0, ",", ".") ?></td>
                                <td class="product-delete">&nbsp;</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <div id="form-button">
                        <input type="submit" name="update_click" value="Cập nhật" />
                    </div>
                    <hr>
                    <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
                    <div><label>Điện thoại: </label><input type="text" value="" name="phone" /></div>
                    <div><label>Địa chỉ: </label><input type="text" value="" name="address" /></div>
                    <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea></div>
                    <input type="submit" name="order_click" value="Đặt hàng" />
                </form>
            <?php } ?>
        </div>
    </body>
</html>
    
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
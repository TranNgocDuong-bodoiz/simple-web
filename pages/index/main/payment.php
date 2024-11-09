<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/header.css">
    <link rel="stylesheet" href="../../../css/payment.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    
    <title>Document</title>
</head>
<body>
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
        <div class="search_bar">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input type="text" placeholder="Hôm nay bạn cần tìm gì" autocomplete="off">
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
            <a href="#">
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
                        echo $name;
                        ?>
                    </span>
            </div>
            
            </a>
        </div>
    </div> <!-- Đóng thẻ page_header -->
    
    <!-- payment -->
    <section class="payment">
    <div class="container">
        <div class="payment-top-wrap">
            <div class="payment-top">
                <div class="payment-top-delivery payment-top-item">
                    <i class="fas fa-cart-shopping"></i>
                </div>
                <div class="payment-top-adress payment-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="payment-top-payment payment-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>

        <div class="payment-content row">
            <!-- Payment Left Section -->
            <div class="payment-content-left">
                <div class="payment-content-left-method-delivery">
                    <p style="font-weight: bold;">Phương thức giao hàng</p>
                    <div class="payment-content-left-method-delivery-item">
                        <input checked type="radio" name="delivery-method">
                        <label>Giao hàng chuyển phát nhanh</label>
                    </div>
                </div>

                <div class="payment-content-left-method-payment">
                    <p style="font-weight: bold;">Phương thức thanh toán</p>
                    <p>Mọi giao dịch đều được bảo mật và mã hóa</p>

                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label>Thanh toán bằng thẻ tín dụng</label>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="https://pubcdn.ivymoda.com/ivy2/images/1.png" class="">
                        </div>
                    </div>

                    <div class="payment-content-left-method-payment-item">
                        <input checked name="method-payment" type="radio">
                        <label>Thanh toán bằng mã QR</label>
                        <div class="payment-content-left-method-payment-item-img-qr">
                            <img src="c:\xampp_new\htdocs\simple-web\imgaes\anh_thanh_toan\qr_new.jpg" alt="">
                        </div>
                    </div>

                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label>Thanh toán bằng Momo</label>
                        <div class="payment-content-left-method-payment-item-img-momo">
                            <img src="imgaes/anh_thanh_toan/momo_new.png" alt="">
                        </div>
                    </div>

                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label>Thanh toán khi giao hàng</label>
                    </div>
                </div>
            </div>

            <!-- Payment Right Section -->
            <div class="payment-content-right">
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã giảm giá/Quà tặng">
                    <button><i class="fa-solid fa-check"></i></button>
                </div>

                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã cộng tác viên">
                    <button><i class="fa-solid fa-check"></i></button>
                </div>

                <div class="payment-content-right-mnv">
                    <select name="staff-code">
                        <option value="">Chọn mã nhân viên thân thiết</option>
                        <option value="A374">A374</option>
                        <option value="B374">B374</option>
                        <option value="C374">C374</option>
                        <option value="D374">D374</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="payment-content-right-payment">
            <button>Tiếp tục thanh toán</button>
        </div>
    </div>
</section>

    <!-- footer --> 
    <div class="footer">
        <div class="footer-logo"><img src="imgaes/logo2.png" height="100%" alt=""></div>
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
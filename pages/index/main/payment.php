<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../asset/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../../css/header.css">
    <link rel="stylesheet" href="../../../css/payment.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="icon" href="../../../imgaes/favicon.ico" type="image/png">
    <link rel="stylesheet" href="../../../css/main-index.css">
    
    <title>Document</title>
</head>
<body>
<?php
include '../../../admincp/config/connection.php';
include("../header/header.php"); 
?>

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
                            <img src="../../../imgaes/anh_thanh_toan/qr_new.jpg" alt="">
                        </div>
                    </div>

                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label>Thanh toán bằng Momo</label>
                        <div class="payment-content-left-method-payment-item-img-momo">
                            <img src="../../../imgaes/anh_thanh_toan/momo_new.png" alt="">
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
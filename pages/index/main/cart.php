<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../../../css/style-cart.css">
    <link rel="stylesheet" href="../../../css/header.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <title>Document</title>
</head>
<body>
    <header class="page_header">
        <div class="logo">
            <div class="shop_name">
                <span>SIMPLE MOBILE</span>
            </div>
            <div class="shop_content">
                Favourite online store
            </div>
        </div>
        <nav class="danh_muc_container">
            <div class="danh_muc">
                <i class="fa-solid fa-bars"></i>
                <span>Danh mục</span>
            </div>
            <ul class="danh_muc_list">
                <li class="gap_item"><i class="fa-solid fa-angle-down"></i></li>
                <li class="danh_muc_item">
                    <i class="fa-regular fa-tablet"></i>
                    <a href="index.php">Trang chủ</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <a href="index.php?quanly=dienthoai">Điện thoại</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-regular fa-tablet"></i>
                    <a href="index.php?quanly=tablet">Tablet</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-solid fa-headphones"></i>
                    <a href="index.php?quanly=phukien">Phụ kiện</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-regular fa-newspaper"></i>
                    <a href="index.php?quanly=tintuc">Tin tức</a>
                </li>
            </ul>
        </nav>
        <div class="search_bar">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input type="text" placeholder="Hôm nay bạn cần tìm gì" autocomplete="off">
        </div>
        <div class="hotline">
            <a href="tel:0888888889">
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
                <div class="gio_hang_infor"><span id="gio_hang_text">Giỏ hàng</span></div>
            </a>
        </div>
        <div class="tai_khoan">
            <a href="#">
                <div class="tai_khoan_ct">
                    <i class="fa-regular fa-user"></i>
                    <span>Tài khoản</span>
                </div>
            </a>
        </div>
    </header>

    <!-- Cart Section -->
    <section class="cart">
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
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Kiểu điện thoại</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <tr>
                            <td><img src="imgaes/dt_noiBat/iphone-16-pro-max.webp" alt="Iphone 16 Pro Max"></td>
                            <td><p>Iphone 16 Pro Max</p></td>
                            <td><p>Xám</p></td>
                            <td><p>Điện thoại thông minh</p></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><p>49.000.000 <sub>đ</sub></p></td>
                            <td><span>X</span></td>
                        </tr>
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">Tổng tiền giỏ hàng</th>
                        </tr>
                        <tr>
                            <td>Tổng sản phẩm</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Tổng tiền hàng</td>
                            <td><p>49.000.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td><p style="color: black; font-weight: bold;">49.000.000 <sup>đ</sup></p></td>
                        </tr>
                    </table>
                    <div class="cart-conteent-right-text">
                        <p>Chúc bạn mua sắm vui vẻ</p>
                        <p style="color: red; font-weight: bold;">Đơn hàng trên <span style="font-size: 18px;">10.000.000đ</span> sẽ được tặng thêm tai nghe</p>
                    </div>  
                    <div class="cart-content-right-button">
                        <button>Tiếp tục mua sắm</button>
                        <button>Thanh toán</button>
                    </div>
                    <div class="cart-content-right-dangnhap">
                        <p>Tài khoản SIMPLE</p>
                        <p>Hãy <a href="">đăng nhập</a> tài khoản để tích điểm thành viên</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-logo">
            <img src="c:\xampp_new\htdocs\simple-web\imgaes\logo2.png" height="100%" alt="Simple Mobile Logo">
        </div>
        <div class="text text--name">Cửa hàng điện thoại Simple Mobile</div>
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
            <div class="text text--infor"><a href="mailto:simplemobile.bodoi.com">simplemobile.bodoi.com</a></div>
        </div>
    </footer>
</body>
</html>
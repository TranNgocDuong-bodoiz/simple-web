<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="style-cart.css">
    <link rel="stylesheet" href="footer.css">
    <!-- header -->
    <style>

/*header*/

.page_header{
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
    background-color:red;
    top: 0;
    left: 0;
}
div.page_header div{
    margin-top: 10px;
}
/* logo*/
div.page_header div.logo{
    padding: 0;
    margin: 0;
}
div.logo div.shop_name span{
    font-weight: 900;
    font-size: 25px;
    color: rgb(255, 255, 255);
}
div.logo div.shop_content{
    font-weight: 300;
    font-size: 16px;
    color: rgb(247, 247, 247);
}
/* danh muc css */
.danh_muc_container{
    background-color: rgb(246, 120, 120);
    width: 85px;
    height: 40px;
    border-radius: 15px; 
    position: relative;
}
.danh_muc{
    width: 100%;
    padding: 0;
    display: flex;
    justify-content: space-around;
}

.danh_muc span{
    font-size: 14px;
    color: white;
}

.danh_muc_container ul.danh_muc_list{
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 100%;
    min-width: 200px;
    z-index: 1000;
    
}
.danh_muc_list li.danh_muc_item{
    text-decoration: none;
    padding: 10px 5px 0px;
    border-bottom: 1px solid gray; 
    background-color: rgb(255, 255, 255);
}
.danh_muc_list li.danh_muc_item a{
    text-decoration: none;
    color: black;
}
.danh_muc_list li.danh_muc_item a:hover{
    text-decoration: none;
    color: red;
}
.danh_muc_list li.gap_item{
    text-decoration: none;
    padding: 3px 5px 2px;
    background-color: rgba(255, 255, 255, 0);
}
.danh_muc_container:hover ul.danh_muc_list{
    display: block;
}
li.danh_muc_item:hover{
    background-color: gray;
}
/* search bar  height 40px*/
.page_header div.search_bar{
    display: flex;
    height: 40px;
    width: 300px;
}
.search_bar button{
    width: 15%;
    background-color:rgb(242, 48, 48);
}
.search_bar input{
    width: 85%;
}
/* hotline */
/* Hotline */
/* Hotline */
.page_header div.hotline {

    width: 120px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    transition: background-color 0.3s ease;
}

.hotline a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: white;
}

.hotline a div.hotline_icon {
    font-size: 18px;
    color: black;
}

.hotline_infor {
    padding-left: 5px;
}

.hotline_infor span {
    display: block;
    font-size: 12px;
    color: white;
}

.hotline:hover {
    background-color : rgb(246, 120, 120);
    cursor: pointer;
}


/*  "tra_cuu_don_hang" */
/*  " gio hang" */
/* Giỏ hàng */
/* Giỏ hàng */
.page_header div.gio_hang {
    width: 120px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    transition: background-color 0.3s ease;
}

.gio_hang a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: white;
}

.gio_hang a div.gio_hang_icon {
    font-size: 18px;
    color: black;
}

.gio_hang_infor {
    padding-left: 5px;
}

.gio_hang_infor span {
    display: block;
    font-size: 12px;
    color: white;
}

.gio_hang:hover {
    background-color: rgb(246, 120, 120);
    cursor: pointer;
}

.page_header .tai_khoan{
    background-color: rgb(246, 120, 120);
    width: 85px;
    height: 40px;
    border-radius: 15px; 
}
.page_header .tai_khoan a{
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.tai_khoan_ct{
    padding-left: 2px;
}
.tai_khoan_ct span{
    color: white;
}


    </style>
    <!-- cart -->
     <style>
        .cart {
                              padding: 100px 0;
                          }
                          
                          .cart-top-wrap {
                              display: flex;
                              justify-content: center;
                              align-items: center;
                          }
                          .cart-content {
                              display: flex;
                              justify-content: space-between;
                              gap: 20px; 
                          }
                          .cart-top {
                              height: 2px;
                              width: 70%;
                              background-color: #dddddd;
                              display: flex;
                              justify-content: space-between;
                              align-items: center;
                              margin: 50px 0 100px;
                          }
                          
                          .cart-top-item {
                              width: 40px;
                              height: 40px;
                              border-radius: 50%;
                              border: 1px solid #dddddd;
                              display: flex;
                              align-items: center;
                              justify-content: center;
                              background-color: #fff;
                          }
                          
                          .cart-top-item i {
                              color: #dddddd;
                          }
                          
                          .cart-top-cart {
                              border: 1px solid #0db7ea;
                          }
                          
                          .cart-top-cart i {
                              color: #0db7ea;
                          }
                          
                          .cart-content-left {
                              flex: 2;
                              padding-right: 12px;
                          }
                          
                          .cart-content-left table {
                              width: 100%;
                              text-align: center;
                          }
                          
                          .cart-content-left table th {
                              padding-bottom: 30px;
                              font-family: var(--main-text-font);
                              font-size: 12px;
                              text-transform: uppercase;
                              color: #333;
                              border-collapse: collapse;
                              border-bottom: 2px solid #dddddd;
                          }
                          
                          .cart-content-left table p {
                              font-family: var(--main-text-font);
                              font-size: 12px;
                              color: #333;
                          }
                          
                          .cart-content-left table input {
                              width: 30px;
                          }
                          
                          .cart-content-left table span {
                              display: block;
                              width: 20px;
                              height: 20px;
                              border: 1px solid #dddddd;
                              cursor: pointer;  
                          }
                          
                          /* Uncommented the commented code for td */
                          .cart-content-left table td {
                              padding: 20px 0;
                              border-bottom: 2px solid #dddddd;
                          }
                          
                          .cart-content-left td:first-child img {
                              width: 130px;
                          }
                          
                          .cart-content-left td:nth-child(2) {
                              max-width: 130px;
                          }
                          
                          .cart-content-left td:nth-child(3) {
                              width: 30px;
                          }
                          
                          .cart-content-right {
                              flex: 1;
                              padding-left: 12px;
                              border-left: 2px solid #000;
                          }
                          
                          .cart-content-right table {
                              width: 100%;
                          }
                          
                          .cart-content-right table th {
                              padding-bottom: 30px;
                              font-family: var(--main-text-font);
                              font-size: 12px;
                              color: #333;
                              border-collapse: collapse;
                              border-bottom: 2px solid #dddddd;
                          }
                          
                          .cart-content-right table td {
                              font-family: var(--main-text-font);
                              font-size: 12px;
                              color: #333; 
                              padding: 6px 0;
                          }
                          
                          .cart-content-right tr:nth-child(4) td {
                              border-bottom: 2px solid #dddddd;
                          }
                          
                          .cart-content-right tr td:last-child {
                              text-align: right;
                          }
                          
                          .cart-content-right-text {
                              margin: 20px 0;
                              text-align: center;
                          }
                          
                          .cart-content-right-text p {
                              font-family: var(--main-text-font);
                              font-size: 12px;
                              color: #333; 
                          }
                          
                          .cart-content-right-button {
                              text-align: center;
                              align-items: center;
                          }
                          
                          .cart-content-right-button button {
                              padding: 0 18px;
                              height: 35px;
                              cursor: pointer;
                          }
                          
                          .cart-content-right-button button:first-child {
                              background-color: #fff;
                              border: 1px solid black;
                              margin-right: 20px;
                          }
                          
                          .cart-content-right-button button:first-child:hover {
                              background-color: #ddd;
                          }
                          
                          .cart-content-right-button button:last-child {
                              background-color: black;
                              color: #fff;
                              border: none;
                              border: 1px solid black;
                          }
                          
                          .cart-content-right-button button:last-child:hover {
                              background-color: #dddddd;
                              color: black;
                          }
                          
                          .cart-content-right-dangnhap {
                              margin-top: 20px;
                          }
                          
                          .cart-content-right-dangnhap p {
                              font-family: var(--main-text-font);
                              font-size: 12px;
                              color: #333; 
                          }
     </style>
     <!-- footer -->
      <style>
        .footer {
    width: 100%;
    height: 350px;
    background-color: rgb(129, 48, 48);
    border-radius: 50px;
}
.footer-logo{
    height: 40%;
    width: 50%;
    padding-left:20px ;
    margin: 0;
}
.text{
    text-decoration: none;
    color: white;
    padding: 10px 5px;
    font-size: 16px;
}
.text--name{
    font-size: 30px;
}
.text-container-a {
    display: flex;
}
.text-container-p {
    display: flex;
}
.tex-container-e {
    display: flex;
}
.text--desc{
    font-weight: 900;
    font-size: 18px;
}
.text--infor:hover{
    cursor: pointer;
    color: yellow;
}


      </style>
    <title>Document</title>
</head>
<body>
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
        <div class="danh_muc_container">
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
            <a href="#">
                <div class="tai_khoan_ct">
                    <i class="fa-regular fa-user"></i>
                    <span>Tài khoản</span>
            </div>
            
            </a>
        </div>
    </div> <!-- Đóng thẻ page_header -->
    
    <!-- cart -->
     
    <selction class="cart">
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
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Kiểu điện thoại</th>
                            <th>số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <tr>
                            <td><img src="imgaes/dt_noiBat/iphone-16-pro-max.webp" alt=""></td>
                            <td><p>Iphone 16 promax</p></td>
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
        </div>
    </selction>
    
    
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
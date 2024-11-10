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
        <div>
          <form  class="search_bar" action="" method="POST">
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
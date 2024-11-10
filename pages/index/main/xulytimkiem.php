<?php
$tukhoa = $_POST['tukhoa'];
$sql = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE ten LIKE '%".$tukhoa."%' ");
?>
    <div class="product-wraper"><!-- mở thẻ outstanding tablet -->
             
            <div class="product-head-title">
                <span style="font-size: 30px; padding-left: 10px;">Đã tìm kiếm được <?php echo $row = mysqli_num_rows($sql) ?> sản phẩm</span>
            </div>
           
                <div class="product-container">
                  <?php while($row = mysqli_fetch_assoc($sql)){ ?>
                        <div class="show-product"><!-- mở thẻ tablet -->
                            <div class="images-box">
                                <div class="product_content">
                                    <span>giá sốc</span>
                                </div>
                                <a style="text-decoration: none;" href="#">
                                    <div class="product_image">
                                        <img src="admincp/uploads/<?php echo $row['anh'] ?>" alt="" width="100%">
                                    </div>
                                </a>
                            </div>
                            <div class="infor-box">
                                <a style="text-decoration: none;" href="#">
                                    <div class="product_name">
                                        <span><?php echo $row['ten']; ?></span>
                                    </div>
                                </a>
                                <div class="product_price">
                                    <span><?php echo number_format($row['gia'], 0, ',', '.'); ?> VND</span>
                                </div>
                            </div>
                        </div><!-- đóng thẻ tablet -->
                    <?php } ?>
                    
    </div><!-- đóng thẻ outstanding tablet -->

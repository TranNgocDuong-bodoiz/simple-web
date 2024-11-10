<?php
$tukhoa = $_GET['tukhoa'];
$sql = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE ten LIKE '%".$tukhoa."%' ");
$total = $row = mysqli_num_rows($sql) ;
if($total> 0){
?>
    <div class="product-wraper"><!-- mở thẻ outstanding tablet -->
             
            <div class="product-head-title" style="border-bottom: 1px solid #333">
                <span style="font-size: 30px; padding-left: 10px;">Đã tìm kiếm được <?php echo $total  ?> sản phẩm bằng từ khóa </span>
                <span style="font-size: 30px; color:green"><?php echo $tukhoa; ?></span>
            </div>
           
                <div class="product-container">
                  <?php while($rowsp = mysqli_fetch_assoc($sql)){ ?>
                        <div class="show-product"><!-- mở thẻ tablet -->
                            <div class="images-box">
                                <div class="product_content">
                                    <span>giá sốc</span>
                                </div>
                                <a style="text-decoration: none;" href="pages/index/main/detail.php?id=<?php echo $rowsp['maSP'] ?>">
                                    <div class="product_image">
                                        <img src="admincp/uploads/<?php echo $rowsp['anh'] ?>" alt="" width="100%">
                                    </div>
                                </a>
                            </div>
                            <div class="infor-box">
                                <a style="text-decoration: none;" href="pages/index/main/detail.php?id=<?php echo $rowsp['maSP'] ?>">
                                    <div class="product_name">
                                        <span><?php echo $rowsp['ten']; ?></span>
                                    </div>
                                </a>
                                <div class="product_price">
                                    <span><?php echo number_format($rowsp['gia'], 0, ',', '.'); ?> VND</span>
                                </div>
                            </div>
                        </div><!-- đóng thẻ tablet -->
                    <?php } ?>
                    
    </div><!-- đóng thẻ outstanding tablet -->
    <?php } 
    else{
        ?>
        <div class="product-wraper">
        <div class="product-head-title">
                <span style="font-size: 30px; padding-left: 10px;">Hiện tại chưa có sản phẩm nào với từ khóa </span>
                <span style="font-size: 30px; color:green"><?php echo $tukhoa; ?></span>
            </div>
        <div class="not-search-found" style="border-bottom: 1px solid #333">
            <img src="imgaes/notfound-removebg-preview.png" alt="not found omg">
        </div>
        </div>
            <?php
    }
    ?>


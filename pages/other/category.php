<?php
if(isset($_GET["id"])){
    $cate_id = $_GET["id"];
    $sql_cate = mysqli_query($conn, "SELECT ten FROM tbl_danhmuc WHERE maDM = '$cate_id'");
    $sql = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE idDanhmuc = '$cate_id'");
    $row_danhmuc = mysqli_fetch_assoc($sql_cate);
}
?>
    <div class="product-wraper"><!-- mở thẻ outstanding tablet -->
    <div class="product-head-title">
                <span style="font-size: 30px; padding-left: 10px;"><?php echo $row_danhmuc['ten']; ?></span>
            </div>  
            
                <div class="product-container">
                    <?php
                    while ($row_sanpham = mysqli_fetch_assoc($sql)) { ?>
                        <div class="show-product"><!-- mở thẻ tablet -->
                            <div class="images-box">
                                <div class="product_content">
                                    <span>giá sốc vcl</span>
                                </div>
                                <a style="text-decoration: none;" href="#">
                                    <div class="product_image">
                                        <img src="admincp/uploads/<?php echo $row_sanpham['anh']; ?>" alt="" width="100%">
                                    </div>
                                </a>
                            </div>
                            <div class="infor-box">
                                <a style="text-decoration: none;" href="#">
                                    <div class="product_name">
                                        <span><?php echo $row_sanpham['ten']; ?></span>
                                    </div>
                                </a>
                                <div class="product_price">
                                    <span><?php echo number_format($row_sanpham['gia'], 0, ',', '.'); ?> VND</span>
                                </div>
                            </div>
                        </div><!-- đóng thẻ tablet -->
                    <?php } ?>
                </div>
            <?php
        ?>
    </div><!-- đóng thẻ outstanding tablet -->
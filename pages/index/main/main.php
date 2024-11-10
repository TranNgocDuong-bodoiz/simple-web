<div class="main">
<?php
if (isset($_GET["id"])) {
    require_once("pages/other/category.php");
}
elseif(isset($_POST['timkiem'])){
    require_once('./pages/index/main/xulytimkiem.php');
} else {
    require_once("banner.php");
    require_once("pages/index/main/sale_product.php");
    ?>
    <div class="product-wraper"><!-- mở thẻ outstanding tablet -->
        <?php
        $sql_danhmuc = mysqli_query($conn, "SELECT * FROM tbl_danhmuc ORDER BY stt ASC");
        while ($row_danhmuc = mysqli_fetch_assoc($sql_danhmuc)) { ?>
            <div class="product-head-title">
                <span style="font-size: 30px; padding-left: 10px;"><?php echo $row_danhmuc['ten']; ?></span>
            </div>
            <?php
            $sql_sanpham = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE idDanhmuc = '" . $row_danhmuc['maDM'] . "' ");
            if (mysqli_num_rows($sql_sanpham) > 0) { ?>
                <div class="product-container">
                    <?php
                    while ($row_sanpham = mysqli_fetch_assoc($sql_sanpham)) { ?>
                        <div class="show-product"><!-- mở thẻ tablet -->
                            <div class="images-box">
                                <div class="product_content">
                                    <span>giá sốc</span>
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
            } else {
                echo "<h2 style='text-align: center; color: green;'>Không có sản phẩm nào</h2>";
            }
        }
        ?>
    </div><!-- đóng thẻ outstanding tablet -->
<?php
}
?>
</div>
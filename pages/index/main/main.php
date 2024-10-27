<?php
require_once ("banner.php");
?>

<div class="outstandingTablet"><!-- mo the outstanding tablet-->
<?php
$sql_danhmuc = mysqli_query($conn, "SELECT * FROM tbl_danhmuc ORDER BY stt ASC");
while($row_danhmuc = mysqli_fetch_assoc($sql_danhmuc)){?>
            <div class="outstandingTablet__head_content">
            <span><?php echo $row_danhmuc['ten'];?></span>
            </div>
            <?php
            $sql_sanpham = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE idDanhmuc = '".$row_danhmuc['maDM']."'");
            if(mysqli_num_rows($sql_sanpham) > 0){
                ?>
                <div class="outstandingTablet__tablet_container">
                <?php
                while($row_sanpham = mysqli_fetch_assoc($sql_sanpham)){?>
                
                    <div class="outstandingTablet__tablet_container__tablet"> <!-- mo the tablet -->
                            <div class="outstandingTablet__tablet_container__tablet__tablet_content"><span>giá sốc </span></div>
                            <a style="text-decoration: none;" href="#"><div class="outstandingTablet__tablet_container__tablet__tablet_image"><img src="admincp/uploads/<?php echo $row_sanpham['anh']?>" alt="" width="100%"></div></a>
                            <a style="text-decoration: none;" href="#"><div class="outstandingTablet__tablet_container__tablet__tablet_name"><span><?php echo $row_sanpham['ten']?></span></div></a>
                            <div class="outstandingTablet__tablet_container__tablet__tablet_price"><span><?php echo number_format($row_sanpham['gia'], 0, ',', '.'); ?> VND</span></div>
                    </div><!-- dong the tablet -->

                <?php
                }
                ?>
                </div>
            <?php
            }
            
            else{
                echo "<h2>Không có sản phẩm nào</h2>";
            }
            ?>
<?php
}
?>
</div><!--DONG THE TABLET CONTAINER-->
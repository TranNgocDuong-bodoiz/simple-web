<?php
$sql = mysqli_query($conn, "SELECT * FROM tbl_sanpham");
?>
<h3>Quản lý sản phẩm</h3>
<div class="management-container">
    <div class="add_action">
        <form action="modules/main/main_content/quanlysanpham/them.php" method="POST" enctype="multipart/form-data">
            <span>Tên sản phẩm</span><input type="text" placeholder="Tên sản phẩm" name="tensanpham" required>
            <span>Giá sản phẩm</span><input type="text" placeholder="Giá sản phẩm" name="giasanpham" required>
            <span>Chọn danh mục</span>
            <select name="tendanhmuc" required>
                <?php
                $sql_danhmuc = mysqli_query($conn, "SELECT maDM,ten FROM tbl_danhmuc ORDER BY stt ASC");
                while($row_danhmuc = mysqli_fetch_assoc($sql_danhmuc)){
                    echo " <option value=".$row_danhmuc['maDM'].">".$row_danhmuc['ten']."</option> ";
                }
                ?>
            </select>
            <span>Ảnh sản phẩm</span>
            <input type="file" placeholder="Ảnh sản phẩm" accept="image/*" name="anhsanpham" required> 
            <span>Mô tả sản phẩm</span>
            <textarea placeholder="Mô tả sản phẩm" name="motasanpham" required></textarea> 
            <button type="submit" name="add_product">Thêm sản phẩm</button> 
        </form>
    </div>
    <h4>Danh sách sản phẩm</h4>
    <div class="show-list">
        <table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <!-- nơi để hiển thị dữ liệu -->
                 <?php
                 while($row = mysqli_fetch_assoc($sql)){
                 ?>
                <tr>
                    <td> <?php echo $row['ten']?></td>
                    <td>
                        <?php
                        echo "<img src ='uploads/".$row['anh']."' width='80px'>";
                        ?> 
                    </td>
                    <td> <?php echo $row['gia'] ?> </td>
                    <!-- hiển thị danh mục -->
                    <td>
                        <?php
                        $idDanhmuc = $row['idDanhmuc'];
                        $sql_dm = mysqli_query($conn, "SELECT * FROM tbl_danhmuc WHERE maDM = '$idDanhmuc'");
                        while($row_dm = mysqli_fetch_assoc($sql_dm)){
                            echo $row_dm['ten'];
                        }
                        ?>
                    </td>
                    <td> <?php echo $row['mota'] ?> </td>
                    <!-- hiển thị danh mục -->
                    <td><a href="modules/main/main_content/quanlysanpham/sua.php?id=<?php echo $row['maSP']?>">
                        <button class="edit-btn">Sửa</button>
                    </a>
                    <a href="modules/main/main_content/quanlysanpham/xoa.php?id=<?php echo $row['maSP']?>">
                        <button class="delete-btn">Xóa</button>
                    </a>
                    </tr>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>

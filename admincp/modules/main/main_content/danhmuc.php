
<h3>Quan ly danh muc</h3>
<div class="management-container">
    <div class="add_action">
        <h4>Thêm danh mục</h4>
        <form method="POST" action="modules/main/main_content/quanlydanhmuc/them.php">
            <span>Tên danh mục</span><input type="text" name="tendanhmuc" placeholder="Tên danh mục" required>
            <span>số thứ tự</span><input type="text" name="stt" placeholder="số thứ tự" required>
            <button type="submit" name="themdanhmuc">Thêm danh mục</button>
        </form>
    </div>
    title
    <h4>Danh sách danh mục</h4>
    <div class="show-list">
        <table>
            <thead>
                <tr>
                    <th>Tên danh mục</th>
                    <th>stt</th>
                    <th>Thao tác</th>
                    </tr>
            </thead>
            <tbody>
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM tbl_danhmuc");
                while($row = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <td> <?php echo $row['ten']?> </td>
                    <td>  <?php echo $row['stt'] ?> </td>
                    <td>
                        <button class="edit-btn">
                            <a href="modules/main/main_content/quanlydanhmuc/sua.php?id= <?php echo $row['maDM'] ?>">Sửa</a>
                        </button>
                        <button class="delete-btn">
                            <a href="modules/main/main_content/quanlydanhmuc/xoa.php?id= <?php echo $row['maDM'] ?>">Xóa</a>
                        </button>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<h3>danh muc</h3>
<div class="management-container">
    <div class="add_action">
        <form action="" method="POST">
            <span>Tên danh mục</span><input type="text" placeholder="Tên danh mục">
            <span>Mô tả danh mục</span><input type="text" placeholder="Mô tả danh mục">
            <button type="submit" name="add_category">Thêm danh mục</button>
        </form>
    </div>
    <h4>Danh sách danh mục</h4>
    <div class="show-list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả danh mục</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Danh mục 1</td>
                    <td>Mô tả danh mục 1</td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
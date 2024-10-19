<h3>Quản lý sản phẩm</h3>
<div class="management-container">
    <div class="add_action">
        <form action="" method="POST">
            <span>Tên sản phẩm</span><input type="text" placeholder="Tên sản phẩm">
            <span>Giá sản phẩm</span><input type="text" placeholder="Giá sản phẩm">
            <span>Chọn danh mục</span>
            <select name="category">
                <option value="1">Điện thoại</option>
                <option value="2">Máy tính bảng</option>
                <option value="3">Phụ kiện</option>
            </select>
            <span>Ảnh sản phẩm</span><input type="file" placeholder="Ảnh sản phẩm" accept="image/*"> 
            <span>Mô tả sản phẩm</span><textarea placeholder="Mô tả sản phẩm"></textarea> 
            <button type="submit" name="add_product">Thêm sản phẩm</button> 
        </form>
    </div>
    <h4>Danh sách Bài viết</h4>
    <div class="show-list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Iphone 15</td>
                    <td>Ảnh sản phẩm</td>
                    <td>10000000</td>
                    <td>Điện thoại</td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

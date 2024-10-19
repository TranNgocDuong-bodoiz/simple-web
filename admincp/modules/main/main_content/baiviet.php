<h3>Quản lý Bài viết</h3>

<div class="management-container">
    <div class="add_action">
        <h4>Thêm Bài viết Mới</h4>
        <form action="" method="POST">
            <span>Tiêu đề bài viết</span><input type="text" name="title" placeholder="Tiêu đề bài viết" required>
            <span>Nội dung bài viết</span><textarea name="content" placeholder="Nội dung bài viết" required></textarea>
            <span>Tác giả</span><input type="text" name="author" placeholder="Tác giả">
            <span>Ngày đăng</span><input type="date" name="publish_date" required>
            <span>Danh mục</span>
            <select name="category">
                <option value="">Chọn danh mục</option>
                <option value="1">Tin tức</option>
                <option value="2">Sự kiện</option>
                <option value="3">Khuyến mãi</option>
            </select>
            <button type="submit" name="add_news">Thêm bài viết</button>
        </form>
    </div>

    <div class="show-list">
        <h4>Danh sách Bài viết</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Ngày đăng</th>
                    <th>Danh mục</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bài viết mẫu 1</td>
                    <td>Admin</td>
                    <td>2023-05-15</td>
                    <td>Tin tức</td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bài viết mẫu 2</td>
                    <td>Editor</td>
                    <td>2023-05-16</td>
                    <td>Sự kiện</td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

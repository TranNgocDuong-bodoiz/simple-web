<h3>Quản lý Bài viết</h3>

<div class="news-management">
    <div class="add-news">
        <h4>Thêm Bài viết Mới</h4>
        <form action="" method="POST">
            <input type="text" name="title" placeholder="Tiêu đề bài viết" required>
            <textarea name="content" placeholder="Nội dung bài viết" required></textarea>
            <input type="text" name="author" placeholder="Tác giả">
            <input type="date" name="publish_date" required>
            <select name="category">
                <option value="">Chọn danh mục</option>
                <option value="1">Tin tức</option>
                <option value="2">Sự kiện</option>
                <option value="3">Khuyến mãi</option>
            </select>
            <button type="submit" name="add_news">Thêm bài viết</button>
        </form>
    </div>

    <div class="news-list">
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
                        <a href="?edit=1">Sửa</a>
                        <a href="?delete=1" onclick="return confirm('Bạn có chắc muốn xóa bài viết này?')">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bài viết mẫu 2</td>
                    <td>Editor</td>
                    <td>2023-05-16</td>
                    <td>Sự kiện</td>
                    <td>
                        <a href="?edit=2">Sửa</a>
                        <a href="?delete=2" onclick="return confirm('Bạn có chắc muốn xóa bài viết này?')">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

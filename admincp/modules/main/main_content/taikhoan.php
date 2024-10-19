<div class="management-container">
    <div class="add_action">
        <form action="" method="POST">
            <span>Tài khoản</span><input type="text" name="taikhoan" placeholder="Tài khoản" required>
            <span>Mật khẩu</span><input type="text" name="matkhau" placeholder="Mật khẩu" required>
            <span>Họ tên</span><input type="text" name="hoten" placeholder="Họ tên" required>
            <span>Số điện thoại</span><input type="text" name="sodienthoai" placeholder="Số điện thoại" required>
            <span>Email</span><input type="text" name="email" placeholder="Email" required>
            <span>Ngày sinh</span><input type="date" name="ngaysinh" placeholder="Ngày sinh" required>
            <button type="submit" name="add_account">Thêm tài khoản</button>
        </form>
    </div>
    <div class="show-list">
        <h4>Danh sách tài khoản</h4>
        <table>
            <thead>
                <tr>
                    <th>Tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Ngày sinh</th>
                    <th>Ngày tạo tài khoản</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>duongbodoivodich</td>
                    <td>12354</td>
                    <td>tran ngoc duong</td>
                    <td>0987654321</td>
                    <td>duongbodoivodich@gmail.com</td>
                    <td>2024-01-01</td>
                    <td>2024-01-01</td>
                    <td>
                        <button class="edit-btn">Sửa</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

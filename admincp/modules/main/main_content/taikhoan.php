<h3>tai khoan</h3>
<div class="account-management">
    <div class="add-account">
        <h4>Thêm tài khoản</h4>
        <form action="" method="POST">
            <input type="text" name="taikhoan" placeholder="Tài khoản" required>
            <input type="text" name="matkhau" placeholder="Mật khẩu" required>
            <input type="text" name="hoten" placeholder="Họ tên" required>
            <input type="text" name="sodienthoai" placeholder="Số điện thoại" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="date" name="ngaysinh" placeholder="Ngày sinh" required>
            <button type="submit" name="add_account">Thêm tài khoản</button>
        </form>
    </div>
    <div class="account-list">
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
                        <button>Sửa</button>
                        <button>Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

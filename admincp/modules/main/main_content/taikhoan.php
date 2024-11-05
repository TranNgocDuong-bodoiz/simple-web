<?php
    require_once("modules/main/main_content/quanlytaikhoan/them.php");
?>
<div class="management-container">
    <div class="add_action">
        <form action="" method="POST">
            <span>Tài khoản</span><span style="color: red;"><?php echo $message1 ?></span>
            <input type="text" name="taikhoan" placeholder="Tài khoản" required>
            <span>Mật khẩu</span>
            <input type="text" name="matkhau" placeholder="Mật khẩu" required>
            <span>Họ tên</span>
            <input type="text" name="hoten" placeholder="Họ tên" required>
            <span>Số điện thoại</span>
            <input type="text" name="sodienthoai" placeholder="Số điện thoại" required>
            <span>Giới tính</span>
            <div style="display: flex; max-width: 200px;">
            <input type="radio" id="nam" name="gender" value="Nam" required >
            <label for="nam">Nam</label><br>
            <input type="radio" id="nu" name="gender" value="Nữ" required>
            <label for="nu">Nữ</label><br>
            </div>
            <span>Email</span><span style="color: red"><?php echo $message2 ?></span>
            <input type="text" name="email" placeholder="Email" required>
            <span>Ngày sinh</span>
            <input type="date" name="ngaysinh" placeholder="Ngày sinh" required>
            <span>Địa chỉ</span>
            <input type="text" name="diachi" placeholder="Địa chỉ" required>
            <span>Phân quyền</span>
            <select name="role">
                <option value="admin">Admin</option>
                <option value="user" selected>User</option>
            </select>
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
                    <th>Email</th>
                    <th>Số điện thoại</th>
                  
                    
                    <th>Quyền</th>
                    <th>Ngày tạo tài khoản</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM tbl_taikhoankh");
            while($row = mysqli_fetch_assoc($sql)){?>
                <tr>
                    <td><?php echo $row['username'] ?></td>
                    <td> <?php echo $row['password'] ?></td>
                    <td> <?php echo $row['email'] ?></td>
                    <td> <?php echo $row['sodienthoai']?></td>
                    <td><?php echo $row['role'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td>
                        <a href="modules/main/main_content/quanlytaikhoan/sua.php?id=<?php echo $row['id_KH'] ?>">
                            <button class="edit-btn">Sửa</button>
                        </a>
                        <a href="modules/main/main_content/quanlytaikhoan/xoa.php?id=<?php echo $row['id_KH'] ?>">
                            <button class="delete-btn">Xóa</button>
                        </a>
                        
                    </td>
                </tr><?php }
                    ?>
            </tbody>
        </table>
    </div>
</div>

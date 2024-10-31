<?php
require_once("../../../../config/connection.php");
?>
<?php
$message1 ='';
$message2 = '';
if(isset($_POST['edit_account'])){
        $username = $_POST['taikhoan'];
        $pass = $_POST['matkhau'];
        $email = $_POST['email']; 
        $tel = $_POST['sodienthoai'];
        $role = $_POST['role'];
        $id = $_GET['id'];

        $current_user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_taikhoankh WHERE id_KH='$id'"));


        if($username != $current_user['username']) {
            $sql = mysqli_query($conn,"SELECT * FROM tbl_taikhoankh WHERE username = '$username'");
            if(mysqli_num_rows($sql) > 0){
                $message1 = '*Username đã tồn tại! Vui lòng nhập username khác';
            }
        }
 
        if($email != $current_user['email']) {
            $sqli = mysqli_query($conn, "SELECT * FROM tbl_taikhoankh WHERE email = '$email'");
            if(mysqli_num_rows($sqli) > 0){
                $message2 = "*Email đã tồn tại! Vui lòng nhập email khác";
            }
        }
        if($message1 == "" && $message2 == ""){
            if($username != '' && $pass != '' && $email != '' && $tel != ''){
                $sql = mysqli_query($conn,
                    "UPDATE tbl_taikhoankh SET 
                        username='$username',
                        password='$pass',
                        email='$email',
                        sodienthoai='$tel',
                        role='$role'
                    WHERE id_KH='$id'"
                );
                
                if($sql) {
                    header("location: http://localhost/simple-web/admincp/index.php?act=taikhoan");
                    exit();
                } else {
                    echo "<script>alert('Cập nhật thất bại');</script>";
                }
            }
        }
}
?>
<div class="management-container">
    <div class="add_action">
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $dt = mysqli_fetch_assoc((mysqli_query($conn,"SELECT * FROM tbl_taikhoankh WHERE id_KH = '$id'")));
        ?>
        <form action="" method="POST">
            <span>Tài khoản</span><span style="color: red;"><?php echo $message1 ?></span>
            <input type="text" name="taikhoan" placeholder="Tài khoản" value="<?php echo $dt['username'] ?>" required>
            <span>Mật khẩu</span>
            <input type="text" name="matkhau" placeholder="Mật khẩu" value="<?php echo $dt['password'] ?>" required>
            <span>Email</span><span style="color: red"><?php echo $message2 ?></span>
            <input type="text" name="email" placeholder="Email" value="<?php echo $dt['email'] ?>" required>
            <span>Số điện thoại</span>
            <input type="text" name="sodienthoai" placeholder="Số điện thoại" value="<?php echo $dt['sodienthoai'] ?>" required>
            <span>Phân quyền</span>
            <select name="role">
                <option value="admin" <?php echo ($dt['role'] == 'admin') ? "selected": "" ?> >Admin</option>
                <option value="user" <?php echo ($dt['role'] == 'user') ? "selected": "" ?> >User</option>
            </select>
            <button type="submit" name="edit_account">Xác nhận sửa</button>
        </form>
    </div>
</div>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4; 
}
.management-container {
    max-width: 500px;
    margin: 30px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.add_action span {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input[type="text"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 15px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
select:focus {
    border-color: #4CAF50;
    outline: none;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

span[style="color: red;"] {
    color: red;
}

</style>
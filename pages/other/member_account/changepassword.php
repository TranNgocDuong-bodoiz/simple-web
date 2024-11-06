<?php
require_once('../../../admincp/config/connection.php');
$error = '';
if(isset($_POST['changepass-btn'])){
    if(isset($_POST['oldpass']) && isset($_POST['newpass']) && isset($_POST['retypepass'])){
        $id = $_SESSION['id'];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $retypepass = $_POST['retypepass'];
        if(!empty($oldpass) && !empty($newpass) && !empty($retypepass)){
            if(checkPassword($oldpass, $_SESSION['pass'])){
                if($newpass == $retypepass){
                   $sql = "UPDATE `tbl_taikhoankh` SET `password`= '$newpass' WHERE id_KH = '$id' ";
                   $query = mysqli_query($conn, $sql);
                   $error = "Đổi mật khẩu thành công";
                } else {
                    $error = 'Nhập lại mật khẩu sai! Vui lòng kiểm tra lại.';
                }
            } else {
                $error = 'Mật khẩu cũ không đúng';
            }
        } else {
            $error = 'Vui lòng điền đầy đủ thông tin';
        }
    }
}

function checkPassword($pass1, $pass2){
    return ($pass1 == $pass2) ? true : false;
}
?>
<div class="member-account-box">
    <div class="welcome-title">Đổi mật khẩu</div>
    <a class="goback-link" href="account_infor.php?act=account">
    <div class="goback"><img src="./images-removebg-preview.png" alt=""></div>
    </a>
    <form method="post" class="form-info">
        <div class="changepass-ti">
            <span>Mật khẩu cũ*</span>
            <?php if ($error != ''): ?>
    <div class="error-message <?php echo ($error == 'Đổi mật khẩu thành công') ? 'success' : ''; ?>" id="error-message">
        <?php echo $error; ?>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('error-message').classList.add('hidden');
        }, 5000);
    </script>
<?php endif; ?>

         
        </div>
        <input type="password" placeholder="Nhập mật khẩu cũ của bạn*" name="oldpass" required>
        
        <div class="changepass-ti"><span>Mật khẩu mới*</span></div>
        <input type="password" placeholder="Tạo mật khẩu mới*" name="newpass" required>
        
        <div class="changepass-ti"><span>Nhập lại mật khẩu*</span></div>
        <input type="password" placeholder="Nhập lại mật khẩu*" name="retypepass" required>
        
        <input type="submit" value="Xác nhận" name="changepass-btn">
    </form>
</div>

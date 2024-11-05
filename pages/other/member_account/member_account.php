
<div class="member-bar">
<?php
if(isset($_POST["edit-info"]) && $_POST["edit-info"] != ""){
    ?>

<div class="member-account-box">
    <div class="welcome-title">Sửa thông tin của bạn</div>
    <form action="update_account.php" class="form-info" method="post">
    <input id="name" name="username" type="text"  value="<?php echo $customer; ?>"> 
    <input id="email" name="email" type="email"  value="<?php echo $email; ?>">
    <select name="gender" id="gender" >
    <option value="Nam" <?php echo ($gender == "Nam") ? "selected" : ""; ?>>Nam</option>
    <option value="Nữ" <?php echo ($gender == "Nữ") ? "selected" : ""; ?>>Nữ</option>

    </select>
    <input type="text" name="phone" value="<?php echo $phone; ?>">
    <input type="date" name="birthday" value="<?php echo $birthday; ?>">
    <input type="text" name="address"  value="<?php echo $address; ?>"> 
     
    <input type="submit" name="update-info" value="Sửa thông tin">
    </form>
    </div>

    <?php
}
else{?>
     
    <div class="member-account-box">
    <div class="welcome-title">Xin chào: <?php echo $customer; ?></div>
    <input id="name" name="username" type="text" disabled="disabled" value="Họ và tên:  <?php echo $customer; ?>"> 
    <input id="email" name="email" type="email" disabled="disabled" value="email: <?php echo $email; ?>">
    <select name="gender" id="gender" disabled="disabled">
    <option value="Nam" <?php echo ($gender == "Nam") ? "selected" : ""; ?>>Nam</option>
    <option value="Nữ" <?php echo ($gender == "Nữ") ? "selected" : ""; ?>>Nữ</option>

    </select>
    <input type="text" name="phone" disabled="disabled" value="Số điện thoại: <?php echo $phone; ?>">
    <input type="text" name="birthday" disabled="disabled" value="Ngày sinh: <?php echo $birthday; ?>">
    <input type="text" nam="join" disabled="disabled" value="Ngày tạo tài khoản: <?php echo $join; ?>">
    <input type="text" name="address" disabled="disabled" value="Địa chỉ: <?php echo $address; ?>"> 
    <form name="form-info" action="" method="POST"> 
    <input type="submit" name="edit-info" value="Sửa thông tin">
    </form>
    </div>
<?php
}
?>


</div>
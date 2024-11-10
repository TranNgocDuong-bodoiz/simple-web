<?php
$servername = "localhost";  // Địa chỉ máy chủ
$username = "root";         // Tên người dùng, mặc định của XAMPP là 'root'
$password = "";             // Mật khẩu, mặc định của XAMPP là rỗng
$dbname = "webdatabase";    // Tên cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Thêm tin tức
if (isset($_POST['add'])) {
    $tieude = $_POST['title'];
    $noidung = $_POST['content'];
    $tacgia = $_POST['author'];
    $ngay_tao = $_POST['date_created'];
    $url_cua_anh = $_POST['image_url'];

    $sql = "INSERT INTO tbl_tintuc (tieude, noidung, tacgia, ngay_tao, url_cua_anh) 
            VALUES ('$tieude', '$noidung', '$tacgia', '$ngay_tao', '$url_cua_anh')";
    if (mysqli_query($conn, $sql)) {
        echo "<p class='message success'>Thêm tin tức thành công!</p>";
    } else {
        echo "<p class='message error'>Lỗi: " . mysqli_error($conn) . "</p>";
    }
}
// Xóa tin tức
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM tbl_tintuc WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ".$_SERVER['PHP_SELF']); // Refresh lại trang sau khi xóa
        exit;
    } else {
        echo "<p class='message error'>Lỗi: " . mysqli_error($conn) . "</p>";
    }
}

// Sửa tin tức
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tieude = $_POST['title'];
    $noidung = $_POST['content'];
    $tacgia = $_POST['author'];
    $ngay_tao = $_POST['date_created'];
    $url_cua_anh = $_POST['image_url'];

    $sql = "UPDATE tbl_tintuc SET tieude='$tieude', noidung='$noidung', tacgia='$tacgia', ngay_tao='$ngay_tao', url_cua_anh='$url_cua_anh' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ".$_SERVER['PHP_SELF']); // Refresh lại trang sau khi sửa thành công
        exit;
    } else {
        echo "<p class='message error'>Lỗi: " . mysqli_error($conn) . "</p>";
    }
}



// Lấy danh sách tin tức
$result = mysqli_query($conn, "SELECT * FROM tbl_tintuc");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý tin tức</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-top: 30px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        form, table {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        form h2, table h2 {
            color: #4CAF50;
            font-size: 24px;
        }

        input[type="text"], input[type="date"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            height: 100px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
            color: #333;
        }

        table td img {
            max-width: 100px;
        }

        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
        }

        .message.success {
            background-color: #4CAF50;
            color: white;
        }

        .message.error {
            background-color: #f44336;
            color: white;
        }

        .action-links a {
            color: #4CAF50;
            text-decoration: none;
            margin-right: 10px;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .form-container {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quản lý Tin tức</h1>
        
        <!-- Form thêm mới tin tức -->
        <div class="form-container">
            <form method="POST" action="">
                <h2>Thêm Tin tức</h2>
                <input type="text" name="title" placeholder="Tiêu đề" required><br>
                <textarea name="content" placeholder="Nội dung" required></textarea><br>
                <input type="text" name="author" placeholder="Tác giả"><br>
                <input type="date" name="date_created" required><br>
                <input type="text" name="image_url" placeholder="URL hình ảnh"><br>
                <button type="submit" name="add">Thêm</button>
            </form>
        </div>
        <h2>Danh sách Tin tức</h2>
<table>
    <tr>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Tác giả</th>
        <th>Ngày tạo</th>
        <th>Hình ảnh</th>
        <th>Hành động</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['tieude']; ?></td>
        <td><?php echo $row['noidung']; ?></td>
        <td><?php echo $row['tacgia']; ?></td>
        <td><?php echo $row['ngay_tao']; ?></td>
        <td><img src="<?php echo $row['url_cua_anh']; ?>" width="100"></td>
        <td class="action-links">
            <!-- Sửa -->
            <a href="?edit=<?php echo $row['id']; ?>">Sửa</a> | 
            <!-- Xóa -->
            <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>


        
        <!-- Form chỉnh sửa tin tức -->
        <?php
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $news = mysqli_query($conn, "SELECT * FROM tbl_tintuc WHERE id=$id");
            $row = mysqli_fetch_assoc($news);
        ?>
        <h2>Chỉnh sửa Tin tức</h2>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="title" value="<?php echo $row['tieude']; ?>" required><br>
            <textarea name="content" required><?php echo $row['noidung']; ?></textarea><br>
            <input type="text" name="author" value="<?php echo $row['tacgia']; ?>"><br>
            <input type="date" name="date_created" value="<?php echo $row['ngay_tao']; ?>" required><br>
            <input type="text" name="image_url" value="<?php echo $row['url_cua_anh']; ?>"><br>
            <button type="submit" name="edit">Lưu thay đổi</button>
        </form>
        <?php } ?>
    </div>
</body>
</html>
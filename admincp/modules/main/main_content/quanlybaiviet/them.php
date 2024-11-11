<?php
include 'connection.php'; // Kết nối tới cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    $sql = "INSERT INTO tbl_tintuc (title, content, image) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $content, $image);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Tin tức đã được thêm thành công."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Có lỗi xảy ra khi thêm tin tức."]);
    }
    $stmt->close();
}
$conn->close();
?>
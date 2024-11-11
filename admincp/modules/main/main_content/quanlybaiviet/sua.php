<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    $sql = "UPDATE tbl_tintuc SET title = ?, content = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $content, $image, $id);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Tin tức đã được cập nhật thành công."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Có lỗi xảy ra khi cập nhật tin tức."]);
    }
    $stmt->close();
}
$conn->close();
?>
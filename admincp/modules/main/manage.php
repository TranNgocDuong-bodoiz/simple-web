<?php
// Mảng lưu trữ bài viết
$articles = [
    [
        'id' => 1,
        'title' => 'Apple ra mắt iPhone 14 với nhiều cải tiến',
        'content' => 'Apple vừa công bố iPhone 14 với những cải tiến về camera và hiệu suất...',
        'image' => 'https://www.apple.com/v/iphone-14-pro/a/images/overview/hero/hero_endframe__cvklg0xk3w6e_large.jpg',
        'created_at' => '2023-11-01 10:00:00'
    ],
    [
        'id' => 2,
        'title' => 'Samsung Galaxy S23 Ultra sắp trình làng',
        'content' => 'Samsung Galaxy S23 Ultra được dự đoán sẽ có màn hình siêu nét...',
        'image' => 'https://i5.walmartimages.com.mx/mg/gm/3pp/asr/c4ec36d3-596f-42b2-9f1b-a598634492ae.966f25ffbf28b6b391b462f215a5c84d.png?odnHeight=2000&odnWidth=2000&odnBg=ffffff',
        'created_at' => '2023-10-25 14:30:00'
    ],
    [
        'id' => 3,
        'title' => 'Xiaomi công bố Redmi Note 13 với giá rẻ, cấu hình mạnh',
        'content' => 'Redmi Note 13 của Xiaomi đã được giới thiệu với mức giá phải chăng...',
        'image' => 'https://www.pinoytechnoguide.com/wp-content/uploads/2023/06/realme-C53-300x225.jpg',
        'created_at' => '2023-10-20 09:45:00'
    ],
    [
        'id' => 4,
        'title' => 'OPPO Find X5 Pro được bình chọn là điện thoại tốt nhất năm',
        'content' => 'OPPO Find X5 Pro đã nhận được nhiều lời khen từ các chuyên gia công nghệ...',
        'image' => 'https://fdn.gsmarena.com/imgroot/reviews/22/oppo-find-x5-pro/hands-on/lifestyle/-1200w5/gsmarena_019.jpg',
        'created_at' => '2023-10-15 16:20:00'
    ],
    [
        'id' => 5,
        'title' => 'Vivo ra mắt điện thoại V29 với tính năng nổi bật',
        'content' => 'Vivo V29 được trang bị nhiều tính năng mới, bao gồm khả năng chụp ảnh đẹp...',
        'image' => 'https://images.deccanherald.com/deccanherald/2023-10/c12e8ee6-353a-4b16-9904-0f83da04fb67/Vivo_V29_Cover_Shots_Selected_1.jpg',
        'created_at' => '2023-10-10 11:30:00'
    ]
];

// Xử lý thêm bài viết
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_article'])) {
        // Thêm bài viết mới
        $new_article = [
            'id' => count($articles) + 1,
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
            'created_at' => date('Y-m-d H:i:s')
        ];
        $articles[] = $new_article;
    } elseif (isset($_POST['update_article'])) {
        // Cập nhật bài viết
        foreach ($articles as &$article) {
            if ($article['id'] == $_POST['id']) {
                $article['title'] = $_POST['title'];
                $article['content'] = $_POST['content'];
                $article['image'] = $_POST['image'];
                break;
            }
        }
    }
}

// Xử lý xóa bài viết
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    foreach ($articles as $key => $article) {
        if ($article['id'] == $delete_id) {
            unset($articles[$key]);
            break;
        }
    }
    // Đảm bảo mảng không có giá trị null sau khi xóa
    $articles = array_values($articles);
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tin tức</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .article {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .article h2 {
            color: #2a7ae2;
        }
        .article p {
            color: #555;
            line-height: 1.6;
        }
        .article img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px;
        }
        .article small {
            display: block;
            color: #999;
            margin-top: 10px;
            font-size: 0.9em;
        }
        .form-container {
            margin-top: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-container button {
            background-color: #2a7ae2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Quản lý Tin tức</h1>

    <div class="form-container">
        <h2>Thêm bài viết mới</h2>
        <form method="POST" action="manage.php">
            <input type="text" name="title" placeholder="Tiêu đề bài viết" required>
            <textarea name="content" placeholder="Nội dung bài viết" rows="4" required></textarea>
            <input type="text" name="image" placeholder="URL ảnh bài viết" required>
            <button type="submit" name="add_article">Thêm bài viết</button>
        </form>
    </div>

    <h2>Danh sách bài viết</h2>
    <?php foreach ($articles as $article): ?>
        <div class="article">
            <h2><?= $article['title'] ?></h2>
            <img src="<?= $article['image'] ?>" alt="Ảnh bài viết">
            <p><?= $article['content'] ?></p>
            <small>Đăng vào: <?= $article['created_at'] ?></small><br>
            <a href="article.php?id=<?= $article['id'] ?>">Xem chi tiết</a> |
            <a href="manage.php?delete=<?= $article['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')">Xóa</a> |
            <a href="manage.php?edit=<?= $article['id'] ?>">Sửa</a>
        </div>
    <?php endforeach; ?>
</body>
</html>
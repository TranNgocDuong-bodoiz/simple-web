<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài viết - Tin tức cửa hàng điện thoại</title>
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
        .article-detail {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .article-detail h2 {
            color: #2a7ae2;
        }
        .article-detail p {
            color: #555;
            line-height: 1.6;
        }
        .article-detail img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #2a7ae2;
            text-decoration: none;
        }
    </style>
</head>
<body>

<?php
// Mảng chứa các bài viết
$articles = [
    [
        'id' => 1,
        'title' => 'Apple ra mắt iPhone 14 với nhiều cải tiến',
        'content' => 'Apple vừa công bố iPhone 14 với những cải tiến về camera và hiệu suất...',
        'image' => 'https://dattocommerce.azureedge.net/0-master/productimages/93/cb0987e207eb76.jpg?width=450&height=450&scale=canvas',
        'created_at' => '2023-11-01 10:00:00'
    ],
    [
        'id' => 2,
        'title' => 'Samsung Galaxy S23 Ultra sắp trình làng',
        'content' => 'Samsung Galaxy S23 Ultra được dự đoán sẽ có màn hình siêu nét...',
        'image' => 'https://via.placeholder.com/400x200?text=Samsung+Galaxy+S23+Ultra',
        'created_at' => '2023-10-25 14:30:00'
    ],
    [
        'id' => 3,
        'title' => 'Xiaomi công bố Redmi Note 13 với giá rẻ, cấu hình mạnh',
        'content' => 'Redmi Note 13 của Xiaomi đã được giới thiệu với mức giá phải chăng...',
        'image' => 'https://via.placeholder.com/400x200?text=Redmi+Note+13',
        'created_at' => '2023-10-20 09:45:00'
    ],
    [
        'id' => 4,
        'title' => 'OPPO Find X5 Pro được bình chọn là điện thoại tốt nhất năm',
        'content' => 'OPPO Find X5 Pro đã nhận được nhiều lời khen từ các chuyên gia công nghệ...',
        'image' => 'https://via.placeholder.com/400x200?text=OPPO+Find+X5+Pro',
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

// Lấy ID bài viết từ URL

// Hiển thị danh sách các bài viết
foreach ($articles as $article) {
    echo '<div class="article">
        <h2><a href="article.php?id=' . $article['id'] . '">' . $article['title'] . '</a></h2>
        <img src="' . $article['image'] . '" alt="Ảnh minh họa">
        <p>' . $article['content'] . '</p>
        <small>Đăng vào: ' . $article['created_at'] . '</small>
    </div>';
}
?>
</body>
</html>


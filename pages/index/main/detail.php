<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
}

.containerSP {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
}

#product-detail {
    display: flex;
    gap: 20px;
}

#product-img img {
    max-width: 100%;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

#product-info {
    flex: 1;
}

#product-info h1 {
    font-size: 26px;
    color: #333;
    margin: 0 0 10px;
}

.product-price {
    font-size: 24px;
    color: #d32f2f;
    font-weight: bold;
    display: block;
    margin: 10px 0;
}


.buy-now {
    background-color: #d32f2f;
}

.buy-now:hover {
    background-color: #b71c1c;
}
.quantity-input {
    width: 60px;
    padding: 8px;
    font-size: 16px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 5px;
}
#gallery ul {
    display: flex;
    list-style-type: none;
    padding: 0;
    margin-top: 20px;
    gap: 10px;
}

#gallery ul li img {
    width: 80px;
    height: 80px;
    border-radius: 5px;
    border: 1px solid #ddd;
    cursor: pointer;
    transition: transform 0.3s ease;
}

#gallery ul li img:hover {
    transform: scale(1.1);
}

.product-description {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-top: 20px;
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}
.product-description h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
}
<<<<<<< HEAD
#add-to-cart-from {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    margin-top: 15px;
}

#add-to-cart-from input[type="text"] {
    width: 50px;
    padding: 8px;
    font-size: 16px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 5px;
}

#add-to-cart-from input[type="submit"] {
    padding: 10px 20px;
    background-color: #d32f2f;
    color: white;
    font-size: 18px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#add-to-cart-from input[type="submit"]:hover {
    background-color: #b71c1c;
}



=======
>>>>>>> 92dc1a7d67158dea3a992b122007dd1178e4ecaa
</style>
<?php
include '../../../admincp/config/connection.php';
$cate_id = $_GET["id"];
<<<<<<< HEAD
$result = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE `maSP`=".$_GET['id']);
=======
$result = mysqli_query($conn,"SELECT * FROM `tbl_sanpham` WHERE `maSP`=".$_GET['id']);
>>>>>>> 92dc1a7d67158dea3a992b122007dd1178e4ecaa
$product = mysqli_fetch_assoc($result);
?>
<div class="containerSP">
    <h2>Chi tiết sản phẩm</h2>
    <div id="product-detail">
        <div id="product-img">
<<<<<<< HEAD
        <img src="admincp/uploads/<?=$product['anh']?>"/>
=======
        <img src="../../../admincp/uploads/<?=$product['anh']?>"/>
>>>>>>> 92dc1a7d67158dea3a992b122007dd1178e4ecaa
        </div>
    </div>
    <div id="product-info">
    <h3><?= htmlspecialchars($product['ten']) ?></h3>
            <p><strong>Giá:</strong> <?= number_format($product['gia'], 0, ',', '.') ?> VND</p>
<<<<<<< HEAD
            <p><strong>Mô tả:</strong> <?= nl2br(htmlspecialchars($product['mota'])) ?></p>
            <form id="add-to-cart-from" action="cart.php?action=add" method="post">
                <input type="text" value=1 name="quatity[<?= htmlspecialchars($product['ten']) ?>]" size=2> <br>
                <input type="submit" value="Mua sản phẩm">
            </form>
        
=======
        <lavel class="add-to-cart">
            <a href="#" class="buy-now">Mua sản phẩm</a>
        <a href="#" class="add-to-cart-button">Thêm vào giỏ hàng</a></lavel>
        <input type="number" class="quantity-input" min="1" value="1">
>>>>>>> 92dc1a7d67158dea3a992b122007dd1178e4ecaa
        <div id="gallery">
            <ul>
                <li><img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/s/a/samsung_s23_ultra_512gb-_10.png"/></li>
                <li><img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/s/a/samsung_s23_ultra_-_2_1.png"/></li>
                <li><img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/s/a/samsung_s23_ultra_-_2_1.png"/></li>
                <li><img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/s/a/samsung_s23_ultra_-_2_1.png"/></li>
                <li><img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/s/a/samsung_s23_ultra_-_2_1.png"/></li>
                <li><img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/s/a/samsung_s23_ultra_-_2_1.png"/></li>
            </ul>
        </div>
        <div class="product-description container">
    <h3>Mô tả sản phẩm</h3>
    <p><?= nl2br(htmlspecialchars($product['mota'])) ?></p>
    </div>
<<<<<<< HEAD
</div>

=======
>>>>>>> 92dc1a7d67158dea3a992b122007dd1178e4ecaa
</div>
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

#add-to-cart-form {
    display: flex;
    flex-direction: column;
    align-items: start;
    max-width: 150px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

#add-to-cart-form input[type="text"] {
    width: 60px;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    text-align: center;
}

#add-to-cart-form input[type="submit"] {
    background-color: #ff0000; 
    color: #ffffff; 
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#add-to-cart-form input[type="submit"]:hover {
    background-color: #cc0000; 
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
</style>
<link rel="stylesheet" href="../../../asset/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href=" ../../../css/style-cart.css">
    <link rel="stylesheet" href="../../../css/header.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="stylesheet" href="../../../css/main-index.css">
    <link rel="icon" href="../../../imgaes/favicon.ico" type="image/png">
    <link rel="stylesheet" href="../../../css/main-index.css">
<?php
include '../../../admincp/config/connection.php';
include('../header/header.php');
$cate_id = $_GET["id"];
$result = mysqli_query($conn,"SELECT * FROM `tbl_sanpham` WHERE `maSP`=".$_GET['id']);
$product = mysqli_fetch_assoc($result);
?>
<div class="containerSP">
    <h2>Chi tiết sản phẩm</h2>
    <div id="product-detail">
        <div id="product-img">
        <img src="../../../admincp/uploads/<?=$product['anh']?>"/>
        </div>
    </div>
    <div id="product-info">
    <h3><?= htmlspecialchars($product['ten']) ?></h3>
            <p><strong>Giá:</strong> <?= number_format($product['gia'], 0, ',', '.') ?> VND</p>
            <form id="add-to-cart-form" action="cart.php?action=add" method="POST" onsubmit="return validateQuantity()">
    <input type="text" id="quantity-input" value="1" name="quantity[<?= $product['maSP'] ?>]" size="2"/><br/>
    <span id="error-message" style="color: red; display: none;">Số lượng phải lớn hơn 0</span><br/>
    <input type="submit" value="Mua sản phẩm"/>
</form>

<script>
    function validateQuantity() {
        const quantityInput = document.getElementById("quantity-input").value;
        const errorMessage = document.getElementById("error-message");

        if (quantityInput < 1) {
            errorMessage.style.display = "block";
            return false; 
        } else {
            errorMessage.style.display = "none";
            return true; 
        }
    }
</script>
        </div>
        <div class="product-description container">
    <h3>Mô tả sản phẩm</h3>
    <p><?= nl2br(htmlspecialchars($product['mota'])) ?></p>
    </div>
</div>
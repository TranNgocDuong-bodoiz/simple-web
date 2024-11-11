<?php
if(isset($_GET['act'])){
    $act = $_GET['act'];
}
else{
    $act = '';
}
switch($act){
    case 'sanpham':
        include 'main_content/sanpham.php';
        break;
    case 'danhmuc':
        include 'main_content/danhmuc.php';
        break;
    case 'baiviet':
        include 'main_content/baiviet.php';
        break;
    case 'taikhoan':
        include 'main_content/taikhoan.php';
        break;
    case 'tintuc':
        include 'main_content/tintuc.php';
        break;
    case 'logout':
        include 'main_content/logout.php';
    default:
        include 'main_content/dasboard.php';
        break;

}
?>
<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        listProduct();
        break;
    case 'add':
        addProduct();
        break;
    case 'edit':
        editProduct();
        break;
}
// tạo ra 1 bảng customer gồm các trường: 
// id, ten, tuoi
// xd các chức năng thêm, sửa, xóa, hiển thị khách hàng
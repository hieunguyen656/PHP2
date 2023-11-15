<?php
require_once "models/Product.php";
function listProduct()
{
    $products = getProduct();
    include "views/product/list.php";
}
function addProduct()
{
    echo "Trang thêm";
}
function editProduct()
{
    echo "Trang edit";
}

<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        $products = $this->product->getProduct();
        $title = "ACb";
        $header = "Product";
        return $this->render('product.index', compact('title', 'header', 'products'));
    }
    public function addPr()
    {
        return $this->render('product.add');
    }
    public function postPr()
    {
        if (isset($_POST['add'])) {
            //validate tạo ra 1 mảng rỗng để chứa lỗi
            $errors = [];
            if (empty($_POST['ten_sp'])) {
                $errors[] = "K đc để trống tên";
            }
            if (empty($_POST['gia'])) {
                $errors[] = "K đc để trống giá";
            }
            if (count($errors) > 0) {
                flash('errors', $errors, 'add-product');
            } else {
                $result = $this->product->addProduct(NULL, $_POST['ten_sp'], $_POST['gia']);
                if ($result) {
                    flash('success', "Thêm thành công sp", 'add-product');
                }
            }
        }
    }
}

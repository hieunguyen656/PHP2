<?php
const DBNAME = "php2";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/php/php2/baitap/base_mvc/";

function route($url)
{
    return BASE_URL . $url;
}
// hàm set lỗi &set thành công
// $key <=> thành công hoặc lỗi
// $msg <=> câu thông báo
function flash($key, $msg, $route)
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:' . BASE_URL . $route . '?msg=' . $key);
}

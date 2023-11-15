<?php
include_once "nsp1.php";
include_once "nsp2.php";
$sv = new NSP1\SinhVien("huy", 1999);
$sv->hTTT();
$sv2 = new NSP2\SinhVien("huy2", 2000);
$sv2->hTTT();
// namespace luôn đặt đầu file PHP;
// namespace đóng vai trò là không gian tên đại diện cho class/function/biến ở file đó và
// giải quyết các trường hợp cái file khác nhau nhưng có class/function/biến giống nhau 
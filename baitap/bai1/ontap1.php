<?php
// hàm dùng để đóng gói các chức năng trong chường trình. làm gọn code & tái sử dụng nó

// hàm k trả về
$a = 5;
$b = 6;
function ktschan($n) // $n->tham số
{
    if ($n % 2 == 0) {
        echo "day la so chan";
    } else {
        echo "day la so le";
    }
}
// ktschan($a);
// hàm k trả về là hàm k có return, hàm này đầu ra tự xử lý
// xd hàm k trả về tính diện tích hcn
function hCN($d, $r)
{
    echo $d * $r;
}
//hCN(3, 4);
// xd hàm k trả về truyển vào:
// tên, năm sinh, địa chỉ, email
// hiển thị ra thông tin tên+ tuổi+ địa chỉ+ Email
function tTSV($ten, $namSinh, $diaChi, $email)
{
    $tuoi = date('Y') - $namSinh;
    echo $ten . $tuoi . $diaChi . $email;
}
tTSV("nguyen van a ", 2000, " 1-TVB ", " anguyen@gmail.com");

// hàm có trả về
function sHCN($cD, $cR)
{
    return $cD * $cR;
}

echo sHCN(4, 5);

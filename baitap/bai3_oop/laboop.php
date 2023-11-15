<?php
// tạo 1 class là Crush có thuộc tính
// $ten, $namSinh, $moiQH, $diaChi, $email;
// yêu cầu xd phương thức khởi tạo có tham số truyền vào
// xd hàm tính tuổi có trả về
// xd hàm checkTuoi
// nếu tuổi >=18 => đủ tuổi lấy chồng
// nếu tuổi <18 => k đủ tuổi lấy chồng
// xd hàm hTTT gồm:
// $ten-$namSinh-$moiQuanHe-$diaChi-$email-tuổi-đủ tuổi lấy chồng
class Crush
{
    public $ten;
    public $namSinh;
    public $moiQH;
    public $diaChi;
    public $email;
    public function __construct($ten, $namSinh, $moiQH, $diaChi, $email)
    {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
        $this->moiQH = $moiQH;
        $this->diaChi = $diaChi;
        $this->email = $email;
    }
    public function tinhTuoi()
    {
        return date('Y') - $this->namSinh;
    }
    public function checkTuoi()
    {
        if ($this->tinhTuoi() >= 18) {
            return "đủ tuổi lấy chồng";
        } else {
            return "k đủ tuổi lấy chồng";
        }
    }
    public function hTTT()
    {
        echo $this->ten . "-" . $this->namSinh . "-" . $this->moiQH . "-" . $this->diaChi . "-" . $this->email . "-" . $this->tinhTuoi() . "-" . $this->checkTuoi();
    }
}
$cr = new Crush("haha", 2000, "doc than", "TVB", "hahahaha@gmail.com");
$cr->hTTT();

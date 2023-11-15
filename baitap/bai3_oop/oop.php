<?php
// khai báo class
class SinhVien
{
    // khai báo biến trong class
    public $maSV;
    public $tenSV;
    public $namSinh;
    // hàm khởi tạo
    // hàm khởi tạo có tham số truyền vào
    public function __construct($maSV, $tenSV, $namSinh)
    {
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
        $this->namSinh = $namSinh;
    }
    public function setTen($ten)
    {
        $this->tenSV = $ten;
    }
    public function setNamSinh($namSinh)
    {
        $this->namSinh = $namSinh;
    }
    public function setMaSV($maSV)
    {
        $this->maSV = $maSV;
    }
    // khai báo hàm trong class;
    public function tinhTuoi()
    {
        return date('Y') - $this->namSinh;
    }
    public function hienTTSV()
    {
        echo $this->maSV . "-" . $this->tenSV . "-" . $this->tinhTuoi();
        echo "</br>";
    }
}

// khởi tạo đối tượng sinh viên
// $sv1 = new SinhVien();
// $sv1->setMaSV(113);
// $sv1->setTen("hihi");
// $sv1->setNamSinh(2000);
// $sv1->hienTTSV();
// // // // 
// $sv2 = new SinhVien();
// $sv2->setMaSV(111);
// $sv2->setTen("haha");
// $sv2->setNamSinh(2001);
// $sv2->hienTTSV();
// //
// tạo 1 class giảng viên gôm các thuộc tính
// maGV, tenGV, namBatDau, luongCB, soGioDay
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức hiện đầy đủ ttgv
// khởi tạo 1 đối tượng gv và thực hiện gọi hàm set vào hàm hienTTGV ra
// // 
$sv1 = new SinhVien(111, "hihi", 2000);
$sv1->hienTTSV();

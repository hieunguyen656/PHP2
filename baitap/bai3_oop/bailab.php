<?php
// hoten,diachi,namsinh,email,sdt
class ConNguoi
{
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;
    public function __construct($hoTen, $namSinh, $sdt)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->sdt = $sdt;
    }
    public function setHoTen($hoTen)
    {
        $this->hoTen = $hoTen;
    }
    public function setDiaChi($diaChi)
    {
        $this->diaChi = $diaChi;
    }
    public function setNamSinh($namSinh)
    {
        $this->namSinh = $namSinh;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSdt($sdt)
    {
        $this->sdt = $sdt;
    }
    public function tinhTuoi()
    {
        return date('Y') - $this->namSinh;
    }
    public function hienTT()
    {
        echo $this->hoTen . " - " . $this->diaChi . " - " . $this->tinhTuoi() . " - " . $this->email . " - " . $this->sdt;
    }
}

class HocSinh extends ConNguoi
{
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function __construct($hoTen, $namSinh, $sdt, $diemToan, $diemLy, $diemHoa)
    {
        parent::__construct($hoTen, $namSinh, $sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }
    public function setDiemToan($diemToan)
    {
        $this->diemToan = $diemToan;
    }
    public function setDiemLy($diemLy)
    {
        $this->diemLy = $diemLy;
    }
    public function setDiemHoa($diemHoa)
    {
        $this->diemHoa = $diemHoa;
    }
    public function diemTB()
    {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }
    public function hienTTSV()
    {
        $this->hienTT();
        echo " - " . $this->diemTB();
        echo "</br>";
    }
}
class GiangVien extends ConNguoi
{
    public $luongCB;
    public $soGioDay;
    public function __construct($hoTen, $namSinh, $sdt, $luongCB, $soGioDay)
    {
        parent::__construct($hoTen, $namSinh, $sdt);
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }
    public function tongLuong()
    {
        return $this->luongCB * $this->soGioDay;
    }
    public function hienTTGV()
    {
        $this->hienTT();
        echo " - " . $this->tongLuong();
    }
}
$hs = new HocSinh("A Nguyen", 2000, "0123456789", 9, 6, 6);
// $hs->setHoTen("A Nguyen");
// $hs->setNamSinh(2000);
// $hs->setSdt("0123456789");
// $hs->setDiemToan(5);
// $hs->setDiemLy(6);
// $hs->setDiemHoa(7);
$hs->hienTTSV();
$gv = new GiangVien("Thay Ty", 1995, "0987654321", 10000, 500);
$gv->hienTTGV();

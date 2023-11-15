<?php
class ConNguoi
{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an()
    {
        echo "an bang niem tin";
        echo "</br>";
    }
    public function setTay($tay)
    {
        $this->tay = $tay;
    }
    public function setChan($chan)
    {
        $this->chan = $chan;
    }
}
class NguoiLon extends ConNguoi
{
    public $longNach;
    public function di()
    {
        echo "Người lớn đi bằng " . $this->chan . " chân";
        echo "</br>";
    }
    public function noi()
    {
    }
}
class TreCon extends ConNguoi
{
    public function bo()
    {
        echo "Trẻ con bò bằng " . $this->tay . " tay " . $this->chan . " chân";
        echo "</br>";
    }
}
$tc = new TreCon();
$tc->setTay(2);
$tc->setChan(2);
$tc->an();
$tc->bo();
//
$nl = new NguoiLon();
$nl->setChan(2);
$nl->di();

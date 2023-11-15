<?php
interface DiChuyen
{
    // interface kphai là là class. nên sẽ k có thuộc tính và phương thức như class bthg
    // nhưng nó sẽ có phương thức trìu tượng như abstract class
    function di(); // phương thức trìu tượng
}
class ConCho implements DiChuyen
{
    public function di()
    {
        echo "con cho di bang 4 chan";
    }
}
class ConNguoi implements DiChuyen
{
    public function di()
    {
        echo "con nguoi di bang 2 chan";
    }
}
class Oto implements DiChuyen
{
    public function di()
    {
        echo "oto di bang 2 banh";
    }
}
//
class ConChim implements DiChuyen
{
    public function di()
    {
        echo "con cu bay bằng cánh";
    }
}
class MayBay implements DiChuyen
{
    public function di()
    {
        echo "may bay bay bang dong co";
    }
}

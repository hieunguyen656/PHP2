<?php
// class triu tuong là class chứa phương thức trừu tượng
// class triu tuong k thể khởi tạo nhưng vẫn có thuộc tính và phương thức
abstract class DongVat
{
    abstract public function di();
}
class ConNguoi extends DongVat
{
    public function di()
    {
        echo "đi bằng 8 chân";
    }
}
$cn = new ConNguoi();
$cn->di();

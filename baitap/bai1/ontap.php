<?php
$a = 5; // số nguyên
$b = 5.5; // số thực
$c = "hihi"; // chuỗi
$d = false; // boolean
// echo $a . " " . $c; // nối chuỗi

// mảng
// cách 1
// $mang = array(5, 6, 7, 8);
// echo $mang[2];
// cách 2
$mang = [5, 6, 7, 8]; // php >7.0
// duyệt mảng(lấy tất cả các phần tử trong mảng)
// for ($i = 0; $i < count($mang); $i++) {
//     echo $mang[$i];
// }
// foreach ($mang as $key => $value) {
//     echo "vị trí " . $key . " giá trị " . $value . "<br>";
// }
$manglh = ["A" => 5, "B" => 6, "C" => 7];
$mangColor = ["red" => "màu đỏ", "green" => "màu xanh", "black" => "màu đen"]
// echo $manglh["B"];
// foreach ($manglh as $key => $value) {
//     echo $key;
// }
?>
<table border="1">
    <tr>
        <td>Vị trí</td>
        <td>Giá trị</td>
    </tr>
    <?php foreach ($mangColor as $key => $value) { ?>
        <tr background-color="<?php echo $key; ?>;">
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php } ?>
</table>
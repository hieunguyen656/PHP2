<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Giá</td>
        </tr>
        <?php foreach ($products as $key => $value) { ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['ten_sp']; ?></td>
                <td><?php echo $value['gia']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
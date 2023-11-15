<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Age</td>
            <td>Action</td>
        </tr>
        <?php foreach ($customer as $key => $value) { ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['phone']; ?></td>
                <td><?php echo $value['age']; ?></td>
                <td>
                    <a href="?url=edit-customer&id=<?php echo $value['id']; ?> ">Sửa</a>
                    <a href="?url=remove-customer&id=<?php echo $value['id']; ?>" onclick="return confirm('Bạn có muốn xóa k')">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="?url=add-customer">Thêm mới</a>
</body>

</html>
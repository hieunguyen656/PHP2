<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form sửa</h1>
    <form action="?url=update_customer?>" method="POST">
        <?php foreach ($customer as $key => $value) { ?>
            <label>Tên: </label>
            <input type="text" name="name" value="<?php echo $customer['name'] ?>"></br>
            <label>SDT: </label>
            <input type="text" name="phone" value="<?php echo $customer['phone'] ?>"></br>
            <label>Tuổi: </label>
            <input type="text" name="age" value="<?php echo $customer['age'] ?>"></br>
            <input type="submit" value="edit" name="edit"><br> <br>
        <?php } ?>
    </form>
    <a href="?url/">List</a>
</body>

</html>
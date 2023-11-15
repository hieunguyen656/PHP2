<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Trang thêm mới</h1>
    <form action="?url=add-customer" method="POST">
        <label>Tên: </label>
        <input type="text" name="name"></br>
        <label>SDT: </label>
        <input type="text" name="phone"></br>
        <label>Tuổi: </label>
        <input type="text" name="age"></br>
        <input type="submit" value="add" name="add"></br>
    </form>
    <a href="?url/">List</a>
</body>

</html>
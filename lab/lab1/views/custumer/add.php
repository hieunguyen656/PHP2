<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="index.php?url=add_custumer" method="post">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Them Ten</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="ten_kh">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Them Tuoi</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="tuoi">
        </div>
        <button type="submit" name="gui">Them</button>
    </form>
   
</body>

</html>
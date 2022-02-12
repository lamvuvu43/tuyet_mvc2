<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chi tiet sach</title>
</head>
<body>
    <h2>Ten sach: <?php echo $data['book_name'] ?></h2>
    <div>Gia: <?php echo $data['price'] ?></div>
    <img src="./image/book/<?php echo $data['img'] ?>" alt="">
</body>
</html>
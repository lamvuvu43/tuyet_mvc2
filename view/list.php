<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh muc sach</title>
</head>
<body>
    <form action='index.php'>
        Ten sach <input type=text name=q> <input type=submit>
        <input type=hidden name=controller value='ProductController'>
        <input type=hidden name=action value='filter'>
    </form>
    <?php 
    foreach($dataProduct as $item)
    {
        ?>
        <div><?php echo $item['book_name'] ?> - &gt;
            <a href="index.php?controller=ProductController&action=detail&id=<?php echo $item['book_id'] ?>">chi tiet</a>
        </div>
        <?php
    }
    ?>
</body>
</html>
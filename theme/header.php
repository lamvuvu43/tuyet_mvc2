<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="index.php?controller=ProductController&action=list" class="nav-link px-2 text-white">Product</a></li>
          <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
          <li><a href="contact.php" class="nav-link px-2 text-white">Contact</a></li>

        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
            <?php
            if (isset($_SESSION['login.email'])) {
                echo '<button type="button" class="btn btn-outline-light me-2" ><a href="theme/login.php" style="text-decoration:none; color:white">' . $_SESSION['login.name'] . '</a></button>
                <a type="button" class="btn btn-warning"  href="'.url().'/?action=logout">Đăng xuất</a>';
            } else {
                echo '<button type="button" class="btn btn-outline-light me-2" ><a href="theme/login.php" style="text-decoration:none; color:white">Đăng nhập</a></button>
                <button type="button" class="btn btn-warning"><a href="theme/register.php" style="text-decoration:none; color:black">Đăng ký</a></button>';
            }
            ?>

          <button type="button" class="btn btn-link"><a href="theme/register.php" style="text-decoration:none; color:yellow">View Cart</a></button>
        </div>
      </div>
    </div>
  </header>
</body>
</html>

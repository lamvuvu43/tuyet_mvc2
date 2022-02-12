<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background-color: #000
}

.card {
    border: none
}

.product {
    background-color: #eee
}

.brand {
    font-size: 13px
}

.act-price {
    color: red;
    font-weight: 700
}

.dis-price {
    text-decoration: line-through
}

.about {
    font-size: 14px
}

.color {
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 2px 9px;
    border: 2px solid #ff0000;
    display: inline-block;
    color: #ff0000;
    border-radius: 3px;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: #ff0000;
    background-color: #ff0000;
    color: #fff
}

.btn-danger {
    background-color: #ff0000 !important;
    border-color: #ff0000 !important
}

.btn-danger:hover {
    background-color: #da0606 !important;
    border-color: #da0606 !important
}

.btn-danger:focus {
    box-shadow: none
}

.cart i {
    margin-right: 10px
}
    </style>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image"  src="image/book/<?php echo $data['img']; ?>" width="250" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="image/book/<?php echo $data['img']; ?>" width="70"> <img onclick="change_image(this)" src="image/book/<?php echo $data['img']; ?>" width="70"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1"><?php echo $data['pub_id']; ?></span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?php echo $data['book_id']; ?></span>
                                <h5 class="text-uppercase"><?php echo$data['book_name']; ?></h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $data['price']; ?></span>
                                    <div class="ml-2"> <small class="dis-price">VND19000</small> <span>40% OFF</span> </div>
                                </div>
                            </div>
                            <p class="about"><?php echo$data['description']; ?></p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Condition</h6>
                                <form action="<?php echo url()?>/?action=buy" method="Get">
                                    <label>
                                        <span>Số lượng</span>
                                        <input type="hidden" name="action" value="buy" min="1">
                                        <input type="number" name="quantity" value="1" min="1">
                                        <input type="hidden" name="book_id" value="<?php echo $data['book_id']; ?>" min="1">
                                        <input type="hidden" name="price" value="<?php echo $data['price']; ?>" min="1">
                                    </label>
                                    <div class="cart mt-4 align-items-center">
                                        <button type="Submit" class="btn btn-danger text-uppercase mr-2 px-4">Mua ngay
                                        </button>
                                        <i class="fa fa-heart text-muted"></i> <i
                                                class="fa fa-share-alt text-muted"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function change_image(image){

var container = document.getElementById("main-image");

container.src = image.src;
}



document.addEventListener("DOMContentLoaded", function(event) {







});
</script>
</body>
</html>
<?php include('footer.php');

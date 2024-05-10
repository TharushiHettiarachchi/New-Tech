<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="resource/icon.png" />
    <title>New Tech | Home</title>
</head>

<body class="body" onload="product1();">
    <?php require "header.php"; ?>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-dark fw-bold"><i class="bi bi-arrow-left fw-bold fs-6"></i>&nbsp; &nbsp; Back</div>
                <hr />
            </div>
        </div>
        <div class="col-12" id="p1">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img id="image" src="resource/product_img/apple.jfif" class="col-12" style="height: 400px;" />
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <p class="text-center fw-bold fs-2 col-12" id="title">Apple iPhone 12</p>
                        <div class="col-3 text-end fw-bold">Brand :</div>
                        <div class="col-9 text-start" id="brand">Apple</div>
                        <div class="col-3 text-end fw-bold">Model :</div>
                        <div class="col-9 text-start" id="model">iPhone 12</div>
                        <div class="col-3 text-end fw-bold">Price :</div>
                        <div class="col-9 text-start" id="price">Rs. 100000.00</div>
                        <div class="col-3 text-end fw-bold">Condition :</div>
                        <div class="col-9 text-start" id="condition">Used</div>
                        <div class="col-3 text-end fw-bold">Quantity :</div>
                        <div class="col-9 text-start" id="quantity">10</div>
                        <div class="col-3 text-end fw-bold">Colour :</div>
                        <div class="col-9 text-start" id="color">Black</div>
                        <div class="col-3 text-end fw-bold">Description :</div>
                        <div class="col-9 text-start" id="description">6.1-inch (15 cm) display with Super Retina XDR OLED technology at a resolution of 2532 × 1170 pixels and a pixel density of about 460 ppi.</div>
                        <div class="col-3 text-end fw-bold text-success">Quantity :</div>
                        <div class="col-9"><input type="number" class="form-control" min="0" value="1"/></div>
                        <div class="col-12 pt-3">
                            <div class="row">
                                <div class="col-1 offset-3">
                                    <img src="resource/pay_img/american_express_img.png" class="col-12" />
                                </div>
                                <div class="col-1">
                                    <img src="resource/pay_img/mastercard_img.png" class="col-12" />
                                </div>
                                <div class="col-1">
                                    <img src="resource/pay_img/paypal_img.png" class="col-12" />
                                </div>
                                <div class="col-1">
                                    <img src="resource/pay_img/visa_img.png" class="col-12" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 pt-3">
                            <button class="col-9 btn btn-primary">Buy Now</button>
                        </div>
                        <div class="col-12 offset-2 pt-3">
                            <button class="col-9 btn btn-primary">Add to Cart</button>
                        </div>
                        <div class="col-12 offset-2 pt-3 pb-3">
                            <button class="col-9 btn btn-primary">Add to watchlist</button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
       


    </div>



    <?php require "footer.php"; ?>





    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>
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

<body class="body">
    <?php require "header.php"; ?>
    <div class="container-fluid">
        <div class="col-12 background3 p-0 m-0" style="height: 90vh;">
            <div class="row">
                <div class="col-12 col-lg-6 p-lg-3 offset-lg-3 pt-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary text-primary bg-light opacity-75 border-primary" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
                <div class="col-2 col-lg-1 offset-4 offset-lg-0 text-lg-start fw-bold p-3 mt-2 text-primary text-center see" onclick="window.location = 'advancedSearch.php'">Advanced</div>
            </div>
        </div>
        <div class="col-12 pt-3">
            <div class="row border-primary border-2">
                <div class="col-12">
                    <span class="fs-2 text-dark fw-bold">Mobile Phones</span>&nbsp;&nbsp;
                    <span class="fs-6 text-dark see" id="seemore" onclick="seeMore();">See More &RightArrow;</span>
                    <span class="fs-6 text-dark d-none see" onclick="seeMore();" id="showless">Show Less &UpArrow;</span>
                </div>
                <div class="col-12 mt-3">
                    <div class="row pb-3">
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/apple.jfif"  onclick="window.location = 'productDescription.php';" class="card-img-top" style="height:190px ;">
                                <div class="card-body">
                                    <h5 class="card-title text-center"  onclick="window.location = 'productDescription.php';">Apple iPhone 12</h5>
                                    <p class="card-text text-center col-12"  onclick="window.location = 'productDescription.php';"> Rs. 100000.00</p>
                                    <p class="card-text text-center col-12"  onclick="window.location = 'productDescription.php';"> 3 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5" onclick="window.location = 'invoice.php';">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" onclick="window.location='productDescription.php'; product('Samsung Galaxy A01');" style="width: 18rem;">
                                <img src="resource/product_img/mob1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Samsung Galaxy A01</h5>
                                    <p class="card-text text-center col-12"> Rs. 90000.00</p>
                                    <p class="card-text text-center col-12"> 5 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/mob3.jpg" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Samsung Galaxy A32</h5>
                                    <p class="card-text text-center col-12"> Rs. 85000.00</p>
                                    <p class="card-text text-center col-12"> 10 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/mob3.webp" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Huawei Nova Y70</h5>
                                    <p class="card-text text-center col-12"> Rs. 50000.00</p>
                                    <p class="card-text text-center col-12"> 2 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/mob2.png" class="card-img-top" style="height:190px;" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">Huawei Nova 71</h5>
                                    <p class="card-text text-center col-12"> Rs. 30000.00</p>
                                    <p class="card-text text-center col-12"> 1 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row pb-3 d-none" id="phone2">
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/apple.jfif" class="card-img-top" style="height:190px ;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Apple iPhone 13</h5>
                                    <p class="card-text text-center col-12"> Rs. 100000.00</p>
                                    <p class="card-text text-center col-12"> 3 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/mob1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Samsung Galaxy A11</h5>
                                    <p class="card-text text-center col-12"> Rs. 90000.00</p>
                                    <p class="card-text text-center col-12"> 5 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-lg-3 mt-2 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/mob3.jpg" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Samsung Galaxy A50</h5>
                                    <p class="card-text text-center col-12"> Rs. 85000.00</p>
                                    <p class="card-text text-center col-12"> 10 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/mob3.webp" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Huawei Nova Y73</h5>
                                    <p class="card-text text-center col-12"> Rs. 50000.00</p>
                                    <p class="card-text text-center col-12"> 2 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-lg-3 mt-2 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/mob2.png" class="card-img-top" style="height:190px;" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">Huawei Nova Y72</h5>
                                    <p class="card-text text-center col-12"> Rs. 30000.00</p>
                                    <p class="card-text text-center col-12"> 1 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
        <div class="col-12 pt-3">
            <div class="row border-primary border-2">
                <div class="col-12">
                    <span class="fs-2 text-dark fw-bold">Cameras</span>&nbsp;&nbsp;
                    <span class="fs-6 text-dark see" id="seemore1" onclick="seeMore1();">See More &RightArrow;</span>
                    <span class="fs-6 text-dark d-none see" onclick="seeMore1();" id="showless1">Show Less &UpArrow;</span>
                </div>
                <div class="col-12 mt-3">
                    <div class="row pb-3">

                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam1.jfif" class="card-img-top" style="height:190px ;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Canon EOS R5 1</h5>
                                    <p class="card-text text-center col-12"> Rs. 100000.00</p>
                                    <p class="card-text text-center col-12"> 3 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-lg-3 mt-2 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam1.JPG" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Fujifilm Finepix Camera</h5>
                                    <p class="card-text text-center col-12"> Rs. 90000.00</p>
                                    <p class="card-text text-center col-12"> 5 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam2.jfif" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Nikon Coolpix Camera</h5>
                                    <p class="card-text text-center col-12"> Rs. 85000.00</p>
                                    <p class="card-text text-center col-12"> 10 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam2.JPG" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Nikon </h5>
                                    <p class="card-text text-center col-12"> Rs. 50000.00</p>
                                    <p class="card-text text-center col-12"> 2 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/canon1.JPG" class="card-img-top" style="height:190px;" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">Panasonic Lumix</h5>
                                    <p class="card-text text-center col-12"> Rs. 30000.00</p>
                                    <p class="card-text text-center col-12"> 1 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row pb-3 d-none" id="cam2">
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam5.jpg" class="card-img-top" style="height:190px ;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Apple iPhone 12</h5>
                                    <p class="card-text text-center col-12"> Rs. 100000.00</p>
                                    <p class="card-text text-center col-12"> 3 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam7.jpg" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Samsung Galaxy A01</h5>
                                    <p class="card-text text-center col-12"> Rs. 90000.00</p>
                                    <p class="card-text text-center col-12"> 5 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam8.jpg" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Samsung Galaxy A32</h5>
                                    <p class="card-text text-center col-12"> Rs. 85000.00</p>
                                    <p class="card-text text-center col-12"> 10 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam9.jpg" class="card-img-top" style="height: 190px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Huawei Nova Y70</h5>
                                    <p class="card-text text-center col-12"> Rs. 50000.00</p>
                                    <p class="card-text text-center col-12"> 2 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 offset-2 offset-lg-0 col-lg-2 ms-lg-5 mt-3">
                            <div class="card" style="width: 18rem;">
                                <img src="resource/product_img/cam1.jfif" class="card-img-top" style="height:190px;" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">Huawei Nova 71</h5>
                                    <p class="card-text text-center col-12"> Rs. 30000.00</p>
                                    <p class="card-text text-center col-12"> 1 Items available</p>
                                    <div class="col-12 d-grid">
                                        <div class="row pe-3 ps-3">
                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Buy Now</button>
                                            <button class="btn btn-primary mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Add to Cart</button>
                                            <button class="btn btn-warning mt-2 col-lg-11">Add to Watchlist</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>



    <?php require "footer.php"; ?>





    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>
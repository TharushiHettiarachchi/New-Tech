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

<body class="body body1">
    <?php require "header.php"; ?>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
                <div class="col-12 fs-1 text-dark text-center">Cart</div>
                <div class="col-7">
                    <div class="row">
                        <div class="input-group mb-3 offset-4">
                            <input type="text" class="form-control" placeholder="Search cart" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search fs-5"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row pb-3">
                                <div class="col-12 offset-2 offset-lg-0 col-lg-4 mt-3" id="c1">
                                    <div class="card" style="width: 18rem;">
                                        <p class="text-center col-12 card-header">Seller : Sahan Perera</p>
                                        <img src="resource/product_img/cam1.jfif" class="card-img-top" style="height:190px ;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Apple iPhone 12</h5>
                                            <p class="card-text text-center col-12 text-success fs-3"> Rs. 100000.00</p>
                                            <p class="card-text text-center col-12"> <span class="fs-3 text-danger">3</span>&nbsp; Items available</p>
                                            <div class="col-12 d-grid">
                                                <div class="row">
                                                    <div class="col-3 text-end">Qty :</div>
                                                    <div class="col-6">
                                                        <input type="number" min="0" value="1" class="col-12 form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">Delivery fee : Rs. 300.00</div>
                                            <div class="col-12 d-grid">
                                                <div class="row pe-3 ps-3">
                                                    <button class="btn btn-primary mt-3 col-12">Buy Now</button>
                                                    <button class="btn btn-warning mt-2 col-12" onclick="remove1();">Remove</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-12 offset-2 offset-lg-0 col-lg-4 mt-3" id="c2">
                                    <div class="card" style="width: 18rem;">
                                        <p class="text-center col-12 card-header">Seller : Sahan Perera</p>
                                        <img src="resource/product_img/mob1.png" class="card-img-top" style="height:190px ;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Samsung Galaxy A01</h5>
                                            <p class="card-text text-center col-12 text-success fs-3"> Rs. 900000.00</p>
                                            <p class="card-text text-center col-12"> <span class="fs-3 text-danger">5</span>&nbsp; Items available</p>
                                            <div class="col-12 d-grid">
                                                <div class="row">
                                                    <div class="col-3 text-end">Qty :</div>
                                                    <div class="col-6">
                                                        <input type="number" min="0" value="1" class="col-12 form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">Delivery fee : Rs. 300.00</div>
                                            <div class="col-12 d-grid">
                                                <div class="row pe-3 ps-3">
                                                    <button class="btn btn-primary mt-3 col-12">Buy Now</button>
                                                    <button class="btn btn-warning mt-2 col-12" onclick="remove2();">Remove</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-12 offset-2 offset-lg-0 col-lg-4 mt-3" id="c3">
                                    <div class="card" style="width: 18rem;">
                                        <p class="text-center col-12 card-header">Seller : Sahan Perera</p>
                                        <img src="resource/product_img/mob3.webp" class="card-img-top" style="height:190px ;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Huwawei Nova Y70</h5>
                                            <p class="card-text text-center col-12 text-success fs-3"> Rs. 50000.00</p>
                                            <p class="card-text text-center col-12"> <span class="fs-3 text-danger">2</span>&nbsp; Items available</p>
                                            <div class="col-12 d-grid">
                                                <div class="row">
                                                    <div class="col-3 text-end">Qty :</div>
                                                    <div class="col-6">
                                                        <input type="number" min="0" value="1" class="col-12 form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">Delivery fee : Rs. 300.00</div>
                                            <div class="col-12 d-grid">
                                                <div class="row pe-3 ps-3">
                                                    <button class="btn btn-primary mt-3 col-12">Buy Now</button>
                                                    <button class="btn btn-warning mt-2 col-12" onclick="remove3();">Remove</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>


                            </div>






                        </div>
                        <div class="col-12 col-lg-4 p-3">
                            <div class="row">
                                <div class="col-12 border-silver border border-2 rounded-top rounded-bottom p-4 bg-light">
                                    <div class="row">
                                        <div class="col-12 text-center fs-3">Summary</div>
                                        <div class="col-12 pt-4">
                                            <div class="row">
                                                <div id="items" class="col-4 text-end">Items (3)</div>
                                                <div id="itemp" class="col-8 text-end">Rs. 240000.00</div>
                                            </div>
                                        </div>
                                        <div class="col-12 pt-4">
                                            <div class="row">
                                                <div class="col-4 text-end">Delivery Fee</div>
                                                <div id="delivery" class="col-8 text-end">Rs. 900.00</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr/>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 text-end">Total</div>
                                                <div id="total" class="col-8 text-end">Rs. 240900.00</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr/>
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
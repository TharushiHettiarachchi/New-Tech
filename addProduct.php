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
                        <li class="breadcrumb-item"><a href="myProducts.php">My Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                    </ol>
                </nav>
                <div class="col-12 fs-2 text-center">Add New Product</div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-3 p-3">
                            <label class="form-label fw-bold text-4">Product Title</label>
                            <input type="text" class="form-control col-12" />
                        </div>
                        <div class="col-12 p-3">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <select class="form-select">
                                        <option>Category</option>
                                        <option>Mobile Phones</option>
                                        <option>Cameras</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-4 pt-3 pt-lg-0">
                                    <select class="form-select">
                                        <option>Brand</option>
                                        <option>Apple</option>
                                        <option>Samsung</option>
                                        <option>Canon</option>

                                    </select>
                                </div>
                                <div class="col-12 col-lg-4 pt-3 pt-lg-0">
                                    <select class="form-select">
                                        <option>Model</option>
                                        <option>iPhone 12</option>
                                        <option>Galaxy M01</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="col-12 p-3">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <label class="form-label">Price of a Product</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <label class="form-label">Delivery Fee around Colombo</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <label class="form-label">Delivery Fee Out of Colombo</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-12 p-3">
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" min="0" class="form-control" />
                                </div>
                                <div class="col-lg-4 col-12">
                                    <label class="form-label">Condition</label>
                                    <select class="form-select">
                                        <option>Used</option>
                                        <option>BrandNew</option>
                                    </select>

                                </div>
                                <div class="col-lg-4 col-12">
                                    <label class="form-label">Colour</label>
                                    <select class="form-select">
                                        <option>Black</option>
                                        <option>Silver</option>


                                    </select>

                                </div>
                            </div>


                        </div>
                        <div class="col-12">
                            <label class="text-center fs-3">Product Description</label>
                            <textarea class="col-12" cols="30" rows="15"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 fs-3">Product Images</div>
                                <div class="col-lg-6 col-12">
                                    <div class="row p-3">
                                        <div class="col-4 product border border-secondary border-3 rounded" style="height: 200px;"></div>
                                        <div class="col-4 product border border-secondary border-3 rounded" style="height: 200px;"></div>
                                        <div class="col-4 product border border-secondary border-3 rounded" style="height: 200px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 pt-lg-5 pt-1 mt-5">
                                    <input type="file" class="d-none" id="imageuploader" multiple />
                                    <label for="imageuploader" class="col-lg-6 col-12 btn btn-primary">Add Product Images</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 pt-3 pt-lg-0">
                            <div class="alert alert-success" role="alert">
                                Note: We will charge 5% from each product price
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-10 offset-1 btn btn-primary mt-3 mb-3">Add Product</div>
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
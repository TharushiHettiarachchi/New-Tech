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
                        <li class="breadcrumb-item active" aria-current="page">My Products</li>
                    </ol>
                </nav>
                <div class="col-12 fs-2 text-center">My Products</div>

                <div class="col-12">
                    <div class="row p-3">
                        <div class="col-lg-3 col-12 p-3">
                            <div class="col-12">
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <button class="btn btn-primary col-12" onclick="window.location='addProduct.php';">Add Product</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-primary border-1 p-3 rounded">
                                <div class="col-12 fs-3 pb-2">Sort By...</div>
                                <div class="input-group mb-3 col-12">
                                    <input type="text" class="form-control" placeholder="Search cart" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search fs-5"></i></button>
                                </div>
                                <div class="col-12">
                                    <select class="col-12 form-select">
                                        <option>Sort By Price</option>
                                        <option>Price Highest To Lowest</option>
                                        <option>Price Lowest To Highest</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-2">
                                    <select class="col-12 form-select">
                                        <option>Sort By Quantity</option>
                                        <option>Quantity Highest To Lowest</option>
                                        <option>Quantity Lowest To Highest</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-2">
                                    <select class="col-12 form-select">
                                        <option>Sort By Brand</option>
                                        <option>Apple</option>
                                        <option>Samsung</option>
                                        <option>Huawei</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-2">
                                    <select class="col-12 form-select">
                                        <option>Sort By Condition</option>
                                        <option>Brand New</option>
                                        <option>Used</option>

                                    </select>
                                </div>
                                <div class="col-12 mt-2">
                                    <select class="col-12 form-select">
                                        <option>Sort By Active Time</option>
                                        <option>Newest to Oldest</option>
                                        <option>Oldest to Newest</option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6 d-grid p-3">
                                            <button class="btn btn-primary">Search</button>
                                        </div>
                                        <div class="col-6 d-grid p-3">
                                            <button class="btn btn-warning">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-5">
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="resource/product_img/apple.jfif" class="img-fluid rounded-start h-100" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center">Apple iPhone 12</h5>
                                                    <span class="card-text text-center col-12"> Rs. 100000.00</span><br />
                                                    <span class="card-text text-center col-12"> 3 Items available</span></br>
                                                    <div class="form-check form-switch col-12 offset-2 text-start">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Disable Product</label>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <div class="row pe-3 ps-3">
                                                            <button class="btn btn-primary mt-3 col-12 col-lg-5" onclick="window.location = 'updateProduct.php';">Update</button>
                                                            <button class="btn btn-warning mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Delete</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="resource/product_img/apple.jfif" class="img-fluid rounded-start h-100" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center">Apple iPhone 12</h5>
                                                    <span class="card-text text-center col-12"> Rs. 100000.00</span><br />
                                                    <span class="card-text text-center col-12"> 3 Items available</span></br>
                                                    <div class="form-check form-switch col-12 offset-2 text-start">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Disable Product</label>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <div class="row pe-3 ps-3">
                                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Update</button>
                                                            <button class="btn btn-warning mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Delete</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="resource/product_img/apple.jfif" class="img-fluid rounded-start h-100" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center">Apple iPhone 12</h5>
                                                    <span class="card-text text-center col-12"> Rs. 100000.00</span><br />
                                                    <span class="card-text text-center col-12"> 3 Items available</span></br>
                                                    <div class="form-check form-switch col-12 offset-2 text-start">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Disable Product</label>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <div class="row pe-3 ps-3">
                                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Update</button>
                                                            <button class="btn btn-warning mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Delete</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="resource/product_img/apple.jfif" class="img-fluid rounded-start h-100" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center">Apple iPhone 12</h5>
                                                    <span class="card-text text-center col-12"> Rs. 100000.00</span><br />
                                                    <span class="card-text text-center col-12"> 3 Items available</span></br>
                                                    <div class="form-check form-switch col-12 offset-2 text-start">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Disable Product</label>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <div class="row pe-3 ps-3">
                                                            <button class="btn btn-primary mt-3 col-12 col-lg-5">Update</button>
                                                            <button class="btn btn-warning mt-2 mt-lg-3 ms-lg-1 col-12 col-lg-6">Delete</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<div class="col-12">
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
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
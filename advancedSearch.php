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
                        <li class="breadcrumb-item active" aria-current="page">Advanced Search</li>
                    </ol>
                </nav>
                <div class="col-12 fs-1 text-dark text-center">Advanced Search</div>
                <div class="col-12 p-lg-3">
                    <div class="row">
                        <div class="col-lg-6 col-12 offset-lg-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search by Category" aria-label="Text input with dropdown button">
                                <button class="btn btn-outline-secondary dropdown-toggle col-lg-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Mobile Phones</a></li>
                                    <li><a class="dropdown-item" href="#">Camera</a></li>
                                    <li><a class="dropdown-item" href="#">Laptops</a></li>

                                </ul>
                                <button class="col-lg-2 col-12 rounded btn btn-primary mt-3 mt-lg-0 ms-lg-3">Search</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">Filter By <i class="bi bi-filter"></i></div>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-lg-2 col-12 mt-2 mt-lg-0">
                            <select class="col-12 form-select">
                                <option>Filter By Price</option>
                                <option>Price Highest To Lowest</option>
                                <option>Price Lowest To Highest</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-12 mt-2 mt-lg-0">
                            <select class="col-12 form-select">
                                <option>Filter By Quantity</option>
                                <option>Quantity Highest To Lowest</option>
                                <option>Quantity Lowest To Highest</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-12 mt-2 mt-lg-0">
                            <select class="col-12 form-select">
                                <option>Filter By Brand</option>
                                <option>Apple</option>
                                <option>Samsung</option>
                                <option>Huawei</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-12 mt-2 mt-lg-0">
                            <select class="col-12 form-select">
                                <option>Filter By Model</option>
                                <option>iPhone 12</option>
                                <option>Galaxy A10</option>
                                <option>Galaxy A32</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-12 mt-2 mt-lg-0">
                            <select class="col-12 form-select">
                                <option>Filter By Condition</option>
                                <option>Brand New</option>
                                <option>Used</option>

                            </select>
                        </div>
                        <div class="col-lg-2 col-12 mt-2 mt-lg-0">
                            <select class="col-12 form-select">
                                <option>Filter By Active Time</option>
                                <option>Newest to Oldest</option>
                                <option>Oldest to Newest</option>

                            </select>
                        </div>
                        <div class="col-12 p-3">
                            <div class="row">
                                <div class="col-12 col-lg-1 text-center offset-lg-1 mt-2">Price From</div>
                                <div class="col-12 col-lg-4">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-1 text-center mt-2">To</div>
                                <div class="col-12 col-lg-4">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-3">
                            <div class="row">
                                <div class="col-12 border border-primary border-2 rounded pt-5" style="height: 400px;">
                                    <div class="row">
                                        <i class="bi bi-search col-12 fs-1 text-center"></i>
                                        <div class="col-12 fs-1 text-secondary text-center">No Items Searched Yet...</div>
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
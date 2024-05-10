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
                        <li class="breadcrumb-item active" aria-current="page">Purchased History</li>
                    </ol>
                </nav>
                <div class="col-12 fs-1 text-dark text-center">Purchased History</div>
                <div class="col-12 p-3">
                    <table class="table">
                        <thead class="bg-secondary text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date & Time</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                <div class="card mb-3" style="max-width: 400px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="resource/product_img/apple.jfif" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center">Apple iPhone 12</h5>
                                                    <span class="card-text text-center col-12"> Black | Used</span><br />
                                                    <span class="card-text text-center col-12"> Seller : Sujeewa Perera</span></br>
                                                  
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>Rs. 100000.00</td>
                                <td>2022.10.12 22:14:32</td>
                                <td>
                                    <div class="row">
                                        <button class="col-12 col-lg-6 btn btn-primary m-1">FeedBacks</button>
                                        <button class="col-12 col-lg-6 btn btn-danger m-1">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row p-3">2</th>
                                <td>
                                <div class="card mb-3" style="max-width: 400px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="resource/product_img/apple.jfif" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center">Apple iPhone 12</h5>
                                                    <span class="card-text text-center col-12"> Black | Used</span><br />
                                                    <span class="card-text text-center col-12"> Seller : Sujeewa Perera</span></br>
                                                  
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>Rs. 100000.00</td>
                                <td>2022.10.12 22:14:32</td>
                                <td>
                                    <div class="row">
                                        <button class="col-12 col-lg-6 btn btn-primary m-1">FeedBacks</button>
                                        <button class="col-12 col-lg-6 btn btn-danger m-1">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
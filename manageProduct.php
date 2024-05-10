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
                        <li class="breadcrumb-item"><a href="adminPanel.php">Admin Panel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                    </ol>
                </nav>
                <div class="col-12 fs-1 text-dark text-center">Manage Products</div>
                <div class="col-7">
                    <div class="row">
                        <div class="input-group mb-3 offset-4">
                            <input type="text" class="form-control" placeholder="Search a Product" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search fs-5"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-3">
                    <table class="table">
                        <thead class="bg-secondary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Registered Date & Time</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td> <img src="resource/product_img/apple.jfif" style="height:50px ;" /></td>
                                <td>Apple iPhone 12</td>
                                <td>Rs. 100000.00</td>
                                <td>2022.10.12 22:14:32</td>
                                <td>
                                    
                                        <button class="col-12 col-lg-6 btn btn-primary m-1">Block</button>
                                
                                    
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td> <img src="resource/product_img/mob3.webp" style="height:50px ;" /></td>
                                <td>Samsung Galaxy M01</td>
                                <td>Rs. 75000</td>
                                <td>2022.10.12 22:14:32</td>
                                <td>
                                    
                                        <button class="col-12 col-lg-6 btn btn-primary m-1">Block</button>
                                
                                    
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
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
        <div class="col-12  fs-2 text-center">Admin Panel</div>
        <div class="col-12">
            <div class="row p-3">
                <div class="col-12 col-lg-2 border border-2 border-primary rounded p-3">
                    <div class="row">
                    <div class="col-12 p-2">
                            <div class="col-12 btn btn-primary" onclick="window.location = 'manageUser.php';">Manage Users</div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="col-12 btn btn-primary"  onclick="window.location = 'manageProduct.php';">Manage Products</div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="col-12 btn btn-primary">View All Sellings</div>

                        </div>
                        <div class="col-12 p-2">
                            <label>Sellings From</label>
                            <input class="form-control" type="date"/>
                        </div>
                        <div class="col-12 p-2">
                            <label>Sellings To</label>
                            <input class="form-control" type="date"/>

                        </div>
                        <div class="col-12 p-2">
                            <div class="col-12 btn btn-primary">View  Sellings</div>

                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-6 col-lg-4 p-2">
                            <div class="col-12 p-5 btn btn-primary bg-info">Monthly Earning<br/>Rs.13000000</div>
                        </div>
                        <div class="col-6 col-lg-4 p-2">
                            <div class="col-12 btn btn-primary p-5">Daily Earning <br/>Rs.700000</div>
                        </div>
                        <div class="col-6 col-lg-4 p-2">
                            <div class="col-12 btn btn-primary p-5 bg-info">Today's Sellings<br/>5 Items</div>

                        </div>
                        <div class="col-6 col-lg-4 p-2">
                            <div class="col-12 btn btn-primary p-5">Monthly Selling <br/>48 Items</div>
                        </div>
                        <div class="col-6 col-lg-4 p-2">
                            <div class="col-12 btn btn-primary p-5 bg-info">Total Sellings <br/>1200 Items</div>

                        </div>
                        <div class="col-6 col-lg-4 p-2">
                            <div class="col-12 btn btn-primary p-5">Total Engagements <br/>10</div>
                        </div>

                        <div class="col-12 p-3">
                            <div class="row">
                                <div class="col-6 col-lg-4 offset-lg-2">
                                    <div class="card" style="height:450px; max-width :18rem;">
                                    <h3 class="text-center p-1"><i class="bi bi-award-fill"></i>&nbsp;Most Sold Item</h3>
                                        <img src="resource/product_img/apple.jfif" class="card-img-top" style="height:190px ;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Apple iPhone 12</h5>
                                            <p class="card-text text-center col-12"> Rs. 100000.00</p>
                                            <p class="card-text text-center col-12">No. of Sellings : 50</p>
                                            <p class="card-text text-center col-12">Seller : Sujeewa Perera</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="card" style="height: 450px; max-width:18rem;">
                                    <h3 class="text-center p-1"><i class="bi bi-award-fill"></i>&nbsp;Most Famous Seller</h3>
                                        <img src="resource/prof2.jpg" class="card-img-top" style="height:190px ;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Sujeewa Perera</h5>
                                            <p class="card-text text-center col-12 text-secondary">sujeewaperera12@yahoo.com</p>
                                            <p class="card-text text-center text-secondary col-12">0766365147</p>
                                            
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
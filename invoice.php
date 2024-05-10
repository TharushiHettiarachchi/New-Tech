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
        <div class="col-12">
            <div class="row">
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-4 col-lg-2 d-grid offset-5 offset-lg-8">
                            <button class="btn btn-danger"> <i class="bi bi-file-earmark-pdf-fill"></i>&nbsp;Save as PDF</button>
                        </div>
                        <div class="col-3 col-lg-1 d-grid">
                            <button class="btn btn-primary"><i class="bi bi-printer-fill"></i>&nbsp;Print</button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr/>
                </div>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-1">
                            <img src="resource/icon.png" style="height:100px ;" />
                        </div>
                        <div class="col-5 col-lg-3 offset-6 offset-lg-8">
                            <div class="row">
                                <div class="col-12 title1 fs-3">NEW TECH</div>
                                <div class="col-12">17,Suhada Mawatha, Colombo 7</div>
                                <div class="col-12">0761231234</div>
                                <a href="newtech@gmail.com">newtech@gmail.com</a>
                            </div>

                        </div>

                    </div>
                </div>
                <div>
                    <hr />
                </div>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="row">
                                <div class="col-12 fs-3">BILLED TO :</div>
                                <div class="col-12 fs-4">Tharushi Hettiarachchi</div>
                                <div class="col-12">No 91, Jayanthi Mawatha, Himbutana</div>
                                <a href="tharushihettiarachchi13@gmail.com">tharushihettiarachchi13@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-5 col-lg-3 offset-1 offset-lg-6">
                            <div class="row pt-3">
                                <div class="col-12 fs-2">INVOICE 01</div>
                                <div class="text-secondary">Invoice Data : 2022.10.12 22:09:45</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-5 p-3">
                    <table class="table">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Apple iPhone 12</td>
                                <td>Rs. 100000.00</td>
                                <td>1</td>
                                <td>Rs. 100000.00</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Samsung Galaxy M01</td>
                                <td>Rs. 75000.00</td>
                                <td>1</td>
                                <td>Rs. 75000.00</td>
                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="col-4 col-lg-2 offset-5 offset-lg-7 text-center fs-4">Sub Total</div>
                <div class=" col-3 col-lg-2">Rs. 175000.00</div>
                <div class=" col-4 col-lg-2 offset-5 offset-lg-7 text-center fs-4">Discount</div>
                <div class="col-3 col-lg-2">Rs. 00.00</div>
                <div class="col-4 col-lg-2 offset-5 offset-lg-7 text-center fs-4">Grand Total</div>
                <div class= "col-3 col-lg-2 fs-6 border-end-0 border-start-0 border-3 border border-dark">Rs. 175000.00</div>
                <div class="col-12 p-3">
                    <div class="alert alert-primary" role="alert">
                        Note : You Can Return the products within 14 days
                    </div>

                </div> 
                <div class="col-12">
                    <hr/>
                </div>
                <div class="col-12 text-secondary text-center">This is a computer generated bill. Valid without a Signature</div>
                <div class="col-12">
                    <hr/>
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
<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sidebar.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="sidebar.css"> -->

    <title>Product CRUD</title>
</head>
<body>

<div class="sidenav">

        <div class="title">
            <h4>Equipmates</h4>
        </div>
        <a href="">Admin</a>
        <a href="">Dashboard</a>
        <a href="staff-page.php">Staff</a>
        <a href="product-page.php">Products</a>
        <a href="#clients">Logout</a>
</div>


<div class="main">
       <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Details
                            <a href="product-create.php" class="btn btn-primary float-end">Add products</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><h5><b>ID<h5><b></th>
                                    <th><h5><b>Product Name<h5><b></th>
                                    <th><h5><b>Category<h5><b></th>
                                    <th><h5><b>Size<h5><b></th>
                                    <th><h5><b>Weight<h5><b></th>
                                    <th><h5><b>Price<h5><b></th>
                                    <th><h5><b>Quantity in stock<h5><b></th>
                                    <th><h5><b>Availability<h5><b></th>
                                    <th><h5><b>Action<h5><b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM product";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $product)
                                        {
                                            ?>
                                            <tr>
                                                <td><h5><?= $product['id']; ?><h5></td>
                                                <td><h5><?= $product['name']; ?><h5></td>
                                                <td><h5><?= $product['category']; ?><h5></td>
                                                <td><h5><?= $product['size']; ?><h5></td>
                                                <td><h5><?= $product['weight']; ?><h5></td>
                                                <td><h5><?= $product['price']; ?><h5></td>
                                                <td><h5><?= $product['quantity_in_stock']; ?><h5></td>
                                                <td><h5><?= $product['availability']; ?><h5></td>
                                                <td>
                                                    <a href="product-view.php?id=<?= $product['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="product-edit.php?id=<?= $product['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="product-code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_product" value="<?=$product['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
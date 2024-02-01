<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>product Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>product Add 
                            <a href="product-page.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="product-code.php" method="POST">

                            <div class="mb-3">
                                <label>product Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <!-- category -->
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-select">
                                    <option value="">Select Category</option>
                                    <option value="Fitness" <?php if(isset($_POST['category']) && $_POST['category'] == 'Fitness') { echo 'selected'; } ?>>Fitness</option>
                                    <option value="Sports" <?php if(isset($_POST['category']) && $_POST['category'] == 'Sports') { echo 'selected'; } ?>>Sports</option>
                                    
                                </select>
                                <?php
                                    if(isset($_POST['category']) && !validate_field($_POST['category'])){
                                ?>
                                        <p class="text-danger my-1">Select product category</p>
                                <?php
                                    }
                                ?>
                            </div>

                            <!-- category end -->

                            <div class="mb-3">
                                <label>Size</label>
                                <input type="text" name="size" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Weight</label>
                                <input type="text" name="weight" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Quantity in stock</label>
                                <input type="text" name="quantity_in_stock" class="form-control">
                            </div>  

                            <!-- availability -->
                            <div class="mb-3">
                                <label class="form-label">availability</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="availabilityActive" name="availability" value="Available" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'Available') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="availabilityActive">Available</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="availabilityDeactivated" name="availability" value="Unavailable" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'Unavailable') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="availabilityDeactivated">Unavailable</label>
                                    </div>
                                </div>
                                <?php
                                    if((!isset($_POST['availability']) && isset($_POST['save'])) || (isset($_POST['availability']) && !validate_field($_POST['availability']))){
                                ?>
                                        <p class="text-danger my-1">Select product availability</p>
                                <?php
                                    }
                                ?>
                            </div>

                            <!-- availability end-->



                            <div class="mb-3">
                                <button type="submit" name="save_product" class="btn btn-primary">Save product</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

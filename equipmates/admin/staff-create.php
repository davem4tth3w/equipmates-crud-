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

    <title>Staff Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Staff Add 
                            <a href="staff-page.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="staff-code.php" method="POST">

                            <div class="mb-3">
                                <label>Staff Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Staff Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Staff Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Staff Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <!-- position -->
                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <select name="position" id="position" class="form-select">
                                    <option value="">Select position</option>
                                    <option value="Staff" <?php if(isset($_POST['position']) && $_POST['position'] == 'Staff') { echo 'selected'; } ?>>Staff</option>
                                    <option value="Cashier" <?php if(isset($_POST['position']) && $_POST['position'] == 'Cashier') { echo 'selected'; } ?>>Cashier</option>
                                    <option value="Manager" <?php if(isset($_POST['position']) && $_POST['position'] == 'Manager') { echo 'selected'; } ?>>Manager</option>
                                </select>
                                <?php
                                    if(isset($_POST['position']) && !validate_field($_POST['position'])){
                                ?>
                                        <p class="text-danger my-1">Select Staff Position</p>
                                <?php
                                    }
                                ?>
                            </div>

                            <!-- position end -->

                            <!-- status -->
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="statusActive" name="status" value="Active" <?php if(isset($_POST['status']) && $_POST['status'] == 'Active') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="statusActive">Active</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="statusDeactivated" name="status" value="Inactive" <?php if(isset($_POST['status']) && $_POST['status'] == 'Inactive') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="statusDeactivated">Inactive</label>
                                    </div>
                                </div>
                                <?php
                                    if((!isset($_POST['status']) && isset($_POST['save'])) || (isset($_POST['status']) && !validate_field($_POST['status']))){
                                ?>
                                        <p class="text-danger my-1">Select staff status</p>
                                <?php
                                    }
                                ?>
                            </div>

                            <!-- status end-->



                            <div class="mb-3">
                                <button type="submit" name="save_staff" class="btn btn-primary">Save Staff</button>
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

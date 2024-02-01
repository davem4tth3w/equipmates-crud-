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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>staff Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>staff Edit 
                            <a href="staff-page.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $staff_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM staff WHERE id='$staff_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $staff = mysqli_fetch_array($query_run);
                                ?>
                                <form action="staff-code.php" method="POST">
                                    <input type="hidden" name="staff_id" value="<?= $staff['id']; ?>">

                                    <div class="mb-3">
                                        <label>Staff Name</label>
                                        <input type="text" name="name" value="<?=$staff['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Staff Email</label>
                                        <input type="email" name="email" value="<?=$staff['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Staff Phone</label>
                                        <input type="text" name="phone" value="<?=$staff['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Staff address</label>
                                        <input type="text" name="address" value="<?=$staff['address'];?>" class="form-control">
                                    </div>
                                        <!-- position -->
                                        <div class="mb-3">
                                            <label for="position" class="form-label">position</label>
                                            <select name="position"  value="<?=$staff['position'];?>" class="form-select">
                                                <option value="">Select position</option>
                                                <option value="Staff" <?php if(isset($_POST['position']) && $_POST['position'] == 'Staff') { echo 'selected'; } ?>>Staff</option>
                                                <option value="Cashier" <?php if(isset($_POST['position']) && $_POST['position'] == 'Cashier') { echo 'selected'; } ?>>Cashier</option>
                                                
                                            </select>
                                            <?php
                                                if(isset($_POST['position']) && !validate_field($_POST['position'])){
                                            ?>
                                                    <p class="text-danger my-1">Select product position</p>
                                            <?php
                                                }
                                            ?>
                                        </div>


                                         <!-- status -->
                            <div class="mb-3">
                                <label class="form-label">status</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="statusActive" name="status" value="<?=$staff['status'];?>" value="Active" <?php if(isset($_POST['status']) && $_POST['status'] == 'Active') { echo 'checked'; } ?>>
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
                                        <p class="text-danger my-1">Select product status</p>
                                <?php
                                    }
                                ?>
                            </div>

                            <!-- status end-->


                                    <div class="mb-3">
                                        <button type="submit" name="update_staff" class="btn btn-primary">
                                            Update staff
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
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

    <title>Staff View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Staff View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Staff Name</label>
                                        <p class="form-control">
                                            <?=$staff['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Staff Email</label>
                                        <p class="form-control">
                                            <?=$staff['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Staff Phone</label>
                                        <p class="form-control">
                                            <?=$staff['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Staff Address</label>
                                        <p class="form-control">
                                            <?=$staff['address'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Position</label>
                                        <p class="form-control">
                                            <?=$staff['position'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Status</label>
                                        <p class="form-control">
                                            <?=$staff['status'];?>
                                        </p>
                                    </div>

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
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
    

    <title>Equipmates | Staff</title>
</head>
<body>

<div class="sidenav">

        <div class="title">
            <h4>Equipmates</h4>
        </div>
        <a href=" ">Admin</a>
        <a href=" ">Dashboard</a>
        <a href="staff-page.php">Staff</a>
        <a href="product-page.php">Products</a>
        <a href=" ">Logout</a>
</div>


<div class="main">
       <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Staff Details
                            <a href="staff-create.php" class="btn btn-primary float-end">Add Staff</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><h5><b>ID<h5><b></th>
                                    <th><h5><b>Staff Name<h5><b></th>
                                    <th><h5><b>Email<h5><b></th>
                                    <th><h5><b>Phone<h5><b></th>
                                    <th><h5><b>Address<h5><b></th>
                                    <th><h5><b>Position<h5><b></th>
                                    <th><h5><b>Status<h5><b></th>
                                    <th><h5><b>Action<h5><b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM staff";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $staff)
                                        {
                                            ?>
                                            <tr>
                                                <td><h5><?= $staff['id']; ?><h5></td>
                                                <td><h5><?= $staff['name']; ?><h5></td>
                                                <td><h5><?= $staff['email']; ?><h5></td>
                                                <td><h5><?= $staff['phone']; ?><h5></td>
                                                <td><h5><?= $staff['address']; ?><h5></td>
                                                <td><h5><?= $staff['position']; ?><h5></td>
                                                <td><h5><?= $staff['status']; ?><h5></td>
                                                <td>
                                                    <a href="staff-view.php?id=<?= $staff['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="staff-edit.php?id=<?= $staff['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="staff-code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_staff" value="<?=$staff['id'];?>" class="btn btn-danger btn-sm">Delete</button>
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
<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_staff']))
{
    $staff_id = mysqli_real_escape_string($con, $_POST['delete_staff']);

    $query = "DELETE FROM staff WHERE id='$staff_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "staff Deleted Successfully";
        header("Location: staff-page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "staff Not Deleted";
        header("Location: staff-page.php");
        exit(0);
    }
}

if(isset($_POST['update_staff']))
{
    $staff_id = mysqli_real_escape_string($con, $_POST['staff_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "UPDATE staff SET name='$name', email='$email', phone='$phone', address='$address', position='$position', status='$status' WHERE id='$staff_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "staff Updated Successfully";
        header("Location: staff-page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "staff Not Updated";
        header("Location: staff-page.php");
        exit(0);
    }

}


if(isset($_POST['save_staff']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "INSERT INTO staff (name,email,phone,address,position, status) VALUES ('$name','$email','$phone','$address','$position', '$status')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "staff Created Successfully";
        header("Location: staff-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "staff Not Created";
        header("Location: staff-create.php");
        exit(0);
    }
}

?>
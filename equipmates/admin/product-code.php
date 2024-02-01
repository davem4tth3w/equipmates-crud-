<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['delete_product']);

    $query = "DELETE FROM product WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "product Deleted Successfully";
        header("Location: product-page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Deleted";
        header("Location: product-page.php");
        exit(0);
    }
}

if(isset($_POST['update_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $weight = mysqli_real_escape_string($con, $_POST['weight']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity_in_stock = mysqli_real_escape_string($con, $_POST['quantity_in_stock']);
    $availability = mysqli_real_escape_string($con, $_POST['availability']);

    $query = "UPDATE product SET name='$name', category='$category', size='$size', weight='$weight', price='$price', quantity_in_stock='$quantity_in_stock', availability='$availability' WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "product Updated Successfully";
        header("Location: product-page.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Updated";
        header("Location: product-page.php");
        exit(0);
    }

}


if(isset($_POST['save_product']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $weight = mysqli_real_escape_string($con, $_POST['weight']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity_in_stock = mysqli_real_escape_string($con, $_POST['quantity_in_stock']);
    $availability = mysqli_real_escape_string($con, $_POST['availability']);

    $query = "INSERT INTO product (name,category,size,weight,price,quantity_in_stock, availability) VALUES ('$name','$category','$size','$weight','$price','$quantity_in_stock','$availability')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "product Created Successfully";
        header("Location: product-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Created";
        header("Location: product-create.php");
        exit(0);
    }
}

?>
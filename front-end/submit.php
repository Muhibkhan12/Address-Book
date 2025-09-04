<?php
session_start();
include('../Admin/connection.php');
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $cell_no = mysqli_real_escape_string($con, $_POST['cell_no']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $work_phone_no = mysqli_real_escape_string($con, $_POST['work_phone_no']);
    $remarks = mysqli_real_escape_string($con, $_POST['remarks']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    // Validate required fields
    if (empty($name) || empty($email)) {
        $_SESSION['error'] = "Name and Email are required fields.";
        header("Location: checkout.php?amount=$amount");
        exit();
    }
    // Insert data into customer table
    $query = "INSERT INTO customer (name, email, address, cell_no, dob, work_phone_no, remarks, category, amount) 
              VALUES ('$name', '$email', '$address', '$cell_no', '$dob', '$work_phone_no', '$remarks', '$category', '$amount')";
    
    if (mysqli_query($con, $query)) {
        // Clear cart after successful submission
        unset($_SESSION['cart']);
        $_SESSION['success'] = "Order placed successfully!";
        header("Location: home.php");
        exit();
    } else {
        $_SESSION['error'] = "Error saving data: " . mysqli_error($con);
        header("Location: checkout.php?amount=$amount");
        exit();
    }
} else {
    // Redirect if accessed directly without form submission
    header("Location: checkout.php");
    exit();
}
// Close database connection
mysqli_close($con);
?>
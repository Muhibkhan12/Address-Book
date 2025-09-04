<?php
session_start();
include('../Admin/connection.php');

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['pass']);

$sql = "SELECT * FROM admin WHERE email='$email' AND pass='$password'";
$run = mysqli_query($con, $sql);

if (!$run) {
    die("Query Error: " . mysqli_error($con));
}

if (mysqli_num_rows($run) == 1) {
    $row = mysqli_fetch_assoc($run);
    $_SESSION['username'] = $row['name'];
    header('Location: ../Admin/index.php');
    exit();
} else {
    $_SESSION['error_msg'] = "Email or Password does not match!!";
    header('Location: login.php');
    exit();
}
?>

<?php
include('connection.php');
if (isset($_POST['submitBtn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    // Handle Image
    $old_image = $_POST['old_image'];
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    if (!empty($image_name)) {
        $upload_path = 'jewellery_images/' . $image_name;
        move_uploaded_file($image_tmp, $upload_path);
        $image = $upload_path;
    } else {
        $image = $old_image;
    }
    // Update Query
    $sql = "UPDATE `jewellery` SET name='$name', price='$price', description='$description', category='$category', image='$image' WHERE id=$id";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header('location:jewellery.php');
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
} else {
    echo "Invalid Request";
}
?>

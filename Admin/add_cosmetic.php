<<?php
include("header.php");
?>

<?php
if (isset($_POST['submitBtn'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    if ($image_type == "image/webp" || $image_type == "image/png" || $image_type == "image/jpg") {
        if ($image_size <= 1000000) { //1000000 KB = 1MB
            $folder = "cosmetic_images/";
            $folder = $folder . $image_name;

            include('connection.php');
            $sql = "INSERT INTO `cosmetic`(`name`, `image`, `price`, `description` , `category`) VALUES ('$name','$folder','$price', '$description', '$category')";
            $query = mysqli_query($con, $sql);
            if ($query) {
                move_uploaded_file($image_tmp_name, $folder);
                $_SESSION["successMessage"] = "Category Added Successfully!!";
                echo "<script>window.location.href='cosmetic.php'</script>";
            } else {
                $_SESSION["error_msg"] = "Category Not Added.";
                echo "<script>window.location.href='cosmetic.php'</script>";
            }
        } else {
            $_SESSION["error_msg"] = "Image size should be less than or equal to 1 MB!!";
            echo "<script>window.location.href='cosmetic.php'</script>";
        }
    } else {
        $_SESSION["error_msg"] = "Image format not Supprted!!";
            echo "<script>window.location.href='cosmetic.php'</script>";
    }
}
?>

<div class="container" style="margin-top: 200px;">
    <div class="row justify-content-center">
        <div class="col-8 card shadow">
            <form action="add_cosmetic.php" method="post" enctype="multipart/form-data">
                <div class="my-3">
                    <h1 class="text-primary text-center text-uppercase">Add Cosmetic</h1>
                </div>

                <div class="my-3">
                    <label for="">Enter Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>

                <div class="my-3">
                    <label for="">Select Image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>

                 <div class="my-3">
                    <label for="">Enter Price</label>
                    <input type="number" name="price" id="" class="form-control">
                </div>

                <div class="my-3">
                    <label for="">Add Description</label>
                    <input type="text" name="description" id="" class="form-control">
                </div>

                <div class="my-3">
                    <label for="">Select Category</label>
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option selected>Select category</option>
                        <option value="skin_care">Skin Care</option>
                        <option value="hair_care">Hair Care</option>
                        <option value="fragrances">Fragrances</option>
                        <option value="body">Bath&Body</option>
                        <option value="make_up">Make Up</option>
                    </select>
                </div>

                <div class="my-3 text-center">
                    <input type="submit" value="ADD" class="btn btn-primary w-75" name="submitBtn">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>
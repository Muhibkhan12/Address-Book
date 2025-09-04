<?php
include('header.php');
$id=$_GET['id'];
echo $id;
include('connection.php');
$sql="SELECT * FROM `jewellery` WHERE id=$id";
$query=mysqli_query($con,$sql);
$row = mysqli_fetch_array($query); // ✅ This line was missing
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8 card shadow">
            <form action="update_jewellery.php" method="post" enctype="multipart/form-data">
                <div class="my-3">
                    <h1 class="text-primary text-center text-uppercase">Edit Product</h1>
                </div>
                <div class="my-3">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                </div>

                <div class="my-3">
                    <label for="name">Enter Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo ($row['name']); ?>">
                </div>
                
                <div class="my-3">
                    <img src="<?php echo ($row['image']); ?>" alt="Product Image" height="100">
                </div>
                <div class="my-3">
                    <input type="hidden" name="old_image" class="form-control" value="<?php echo ($row['image']); ?>">
                </div>
                
                <div class="my-3">
                    <label for="image">Enter Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="my-3">
                    <label for="price">Enter Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="<?php echo ($row['price']); ?>">
                </div>

                <div class="my-3">
                    <label for="description">Add Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="<?php echo ($row['description']); ?>">
                </div>

                <div class="my-3">
                    <label for="category">Select Category</label>
                    <select class="form-select" id="category" name="category">
                        <option value="<?php echo ($row['category']); ?>" selected><?php echo ($row['category']); ?></option>
                        <option value="skin_care">Skin Care</option>
                        <option value="hair_care">Hair Care</option>
                        <option value="fragrances">Fragrances</option>
                        <option value="body">Bath&Body</option>
                        <option value="make_up">Make Up</option>
                    </select>
                </div>

                <div class="my-3 text-center">
                    <input type="submit" value="Save" class="btn btn-primary w-75" name="submitBtn">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>

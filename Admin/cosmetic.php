<?php
include('header.php');
?>

<?php
if (isset($_SESSION['successMessage'])) { ?>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['successMessage'];
                                            unset($_SESSION['successMessage']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
if (isset($_SESSION['error_msg'])) { ?>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['error_msg'];
                                            unset($_SESSION['error_msg']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="container" style="margin-top: 200px;">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="add_cosmetic.php" class="btn btn-primary"><b>+</b> Add Cosmetic</a>
                </div>
                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Cosmetic Image</th>
                                    <th>Cosmetic Name</th>
                                    <th>Cosmetic Price</th>
                                    <th>Cosmetic Description</th>
                                    <th>Cosmetic Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('connection.php');
                                $sql = "SELECT * FROM cosmetic ORDER BY id DESC";
                                $run = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($run)) {
                                ?>
                                    <tr>
                                        <td class="align-middle"><img src="<?php echo $row[3]; ?>" alt="" height="150"></td>
                                        <td class="align-middle"><?php echo $row[1]; ?></td>
                                        <td class="align-middle"><?php echo $row[2]; ?></td>
                                        <td class="align-middle"><?php echo $row[4]; ?></td>
                                        <td class="align-middle"><?php echo $row[5]; ?></td>
                                        <td class="align-middle">
                                            <a href="updateCosmetics.php?id=<?php echo $row[0]; ?>"><i class="fa-solid fa-pen-to-square text-info"></i></a> |
                                            <a href="delete_cosmetic.php?id=<?php echo $row[0]; ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- row -->
</div> <!-- container -->
<!-- END -->

<?php
include("footer.php");
?>
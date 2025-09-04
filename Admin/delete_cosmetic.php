<?php
$id=$_GET['id'];
include('connection.php');
$image_row="SELECT * FROM `cosmetic` WHERE id=$id";
$run_image_row=mysqli_query($con,$image_row);
// print_r($run_image_row);
$row=mysqli_fetch_array($run_image_row);
// print_r($row);
$img=$row['image'];
//echo $img;
unlink($img);




$sql="DELETE FROM `cosmetic` WHERE id=$id";
$query=mysqli_query($con,$sql);
if($query){
    header('location:cosmetic.php');
}

?>
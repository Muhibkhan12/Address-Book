<?php
include('header.php');
include('connection.php');

$sql = "(
 SELECT c.product_id AS id, c.type, SUM(c.quantity) AS total_sold, j.name, j.price, j.image 
 FROM cart c
 JOIN jewellery j ON c.product_id = j.id
 WHERE c.type = 'jewellery'
 GROUP BY c.product_id, c.type, j.name, j.price, j.image
)
UNION ALL
(
 SELECT c.product_id AS id, c.type, SUM(c.quantity) AS total_sold, co.name, co.price, co.image 
 FROM cart c
 JOIN cosmetic co ON c.product_id = co.id
 WHERE c.type = 'cosmetic'
 GROUP BY c.product_id, c.type, co.name, co.price, co.image
)
ORDER BY total_sold DESC
LIMIT 10;
";

$result = mysqli_query($con, $sql);
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Top 10 Products</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-weight: 600;
            font-size: 28px;
            margin-bottom: 40px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .product-image-wrapper {
            text-align: center;
            padding: 20px 0;
            background-color: #fafafa;
        }

        .product-image {
            max-height: 160px;
            object-fit: contain;
        }

        .product-info {
            padding: 16px;
            text-align: center;
        }

        .product-name {
            font-size: 16px;
            font-weight: 500;
            color: #333333;
            margin: 0 0 8px;
        }

        .product-price {
            color: #27ae60;
            font-size: 15px;
            font-weight: 600;
            margin: 0;
        }

        .product-sales {
            margin-top: 4px;
            color: #999999;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <h1>Top 10 Best-Selling Products (From Cart)</h1>
            <div class="product-grid">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="<?php echo $row['image']; ?>" class="product-image" alt="<?php echo $row['name']; ?>">
                        </div>

                        <div class="product-info">
                            <p class="product-name"><?php echo $row['name']; ?></p>
                            <p class="product-price">$<?php echo number_format($row['price'], 2); ?></p>
                            <p class="product-sales">Sold: <?php echo $row['total_sold']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>

<?php include('footer.php'); ?>
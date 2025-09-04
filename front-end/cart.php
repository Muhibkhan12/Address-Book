<?php
session_start();

include('../Admin/connection.php');

// === Add to Cart ===
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `cosmetic` WHERE id='$id'";
    $run = mysqli_query($con, $query);
    $product = mysqli_fetch_array($run);

    if ($product) {
        $product_type = 'cosmetic';
    } else {
        $query1 = "SELECT * FROM `jewellery` WHERE id='$id'";
        $run1 = mysqli_query($con, $query1);
        $product = mysqli_fetch_array($run1);
        $product_type = 'jewellery';
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$id] = [
            'name' => $product['name'],
            'price' => $product['price'],
            'image' => $product['image'],
            'quantity' => 1
        ];
    }

    $checkQuery = "SELECT * FROM cart WHERE product_id='$id' AND type='$product_type'";
    $checkRun = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($checkRun) > 0) {
        mysqli_query($con, "UPDATE cart SET quantity = quantity + 1 WHERE product_id='$id' AND type='$product_type'");
    } else {
        mysqli_query($con, "INSERT INTO cart (product_id, quantity, type) VALUES ('$id', 1, '$product_type')");
    }

    header('location:cart.php');
    exit();
}

// === Remove from Cart ===
if (isset($_GET['remove'])) {
    $rem_id = $_GET['remove'];
    unset($_SESSION['cart'][$rem_id]);
    header('location:cart.php');
    exit();
}
if (isset($_GET['clear'])) {
    unset($_SESSION['cart']);
    header("Location: cart.php");
    exit();
}

include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* General Styling */
        .kenne-cart-area {
            padding: 50px 0;
            background-color: #f9f9f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .breadcrumb-area {
            padding: 30px 0;
            background-color: #fff;
            border-bottom: 1px solid #eee;
        }

        .breadcrumb-content h2 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .breadcrumb-content ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            gap: 10px;
        }

        .breadcrumb-content ul li {
            font-size: 14px;
            color: #888;
        }

        .breadcrumb-content ul li.active {
            font-weight: 600;
            color: #333;
        }

        /* Table Styling */
        .table-content {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            padding: 20px;
            overflow-x: auto;
        }

        .table thead th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            background-color: #f1f1f1;
            padding: 15px;
        }

        .table tbody td {
            vertical-align: middle;
            padding: 15px;
        }

        .kenne-product-remove a {
            color: #ff4d4f;
            font-size: 18px;
            transition: 0.3s;
        }

        .kenne-product-remove a:hover {
            color: #d9363e;
        }


        .qtybutton {
            padding: 8px 12px;
            cursor: pointer;
            background-color: #f1f1f1;
            user-select: none;
            font-size: 14px;
        }

        /* Totals and Actions */
        .cart-page-total {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-top: 30px;
        }

        .cart-page-total h2 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .cart-page-total ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .cart-page-total ul li {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            font-size: 16px;
            border-bottom: 1px dashed #ccc;
        }

        .cart-page-total a {
            display: inline-block;
            padding: 10px 30px;
            background-color: #222;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .cart-page-total a:hover {
            background-color: #555;
        }

        /* Coupon Section */
        .coupon-all {
            display: flex;
            justify-content: end;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
            gap: 10px;
        }

        .coupon input.input-text {
            padding: 10px;
            border: 1px solid #ccc;
            width: 250px;
            border-radius: 5px;
        }

        .coupon input.button,
        .coupon2 input.button {
            background-color: #444;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .coupon input.button:hover,
        .coupon2 input.button:hover {
            background-color: #000;
        }

        /* Responsive Improvements */
        @media (max-width: 768px) {
            .coupon-all {
                flex-direction: column;
                align-items: flex-start;
            }

            .cart-page-total {
                margin-left: 0 !important;
            }
        }
    </style>

</head>

<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Shoping Cart
        </span>
    </div>
</div>


<div class="kenne-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="javascript:void(0)">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="kenne-product-remove">Remove</th>
                                    <th class="kenne-product-thumbnail">Image</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="kenne-product-price">Unit Price</th>
                                    <th class="kenne-product-quantity">Quantity</th>
                                    <th class="kenne-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($_SESSION['cart'])) {
                                    $grand_total = 0;
                                    foreach ($_SESSION['cart'] as $key => $item) {
                                        $item_total = $item['quantity'] * $item['price'];
                                        $grand_total += $item_total;
                                ?>
                                        <tr>
                                            <td class="kenne-product-remove">
                                                <a href="cart.php?remove=<?php echo $key; ?>"><i class="fa fa-trash" title="Remove"></i></a>
                                            </td>
                                            <td class="kenne-product-thumbnail">
                                                <a href="javascript:void(0)">
                                                    <img src="../Admin/<?php echo $item['image']; ?>" height="150" alt="Product Image">
                                                </a>
                                            </td>
                                            <td class="kenne-product-name">
                                                <a href="javascript:void(0)"><?php echo $item['name']; ?></a>
                                            </td>
                                            <td class="kenne-product-price">
                                                <span class="amount">$<?php echo number_format($item['price'], 2); ?></span>
                                            </td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <input class="cart-plus-minus-box" value="<?php echo $item['quantity']; ?>" type="text" readonly style="width: 50px; text-align: center; border: 1px solid #ccc; border-radius: 4px;">
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">$<?php echo number_format($item_total, 2); ?></span>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6">Your Cart Is Empty</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <?php if (!empty($_SESSION['cart'])): ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon2">
                                        <!-- <input class="button" name="update_cart" value="Update cart" type="submit"> -->
                                         <a href="cart.php?clear" style="background-color: black; color:white; padding:13px; font-weight:bold;">CLEAR CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal <span>$<?php echo number_format($grand_total, 2); ?></span></li>
                                        <li>Total <span>$<?php echo number_format($grand_total, 2); ?></span></li>
                                    </ul>
                                    <a href="checkout.php?amount=<?php echo $grand_total; ?>">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
<?php
include('header.php');
include('../Admin/connection.php');
?>

<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Top 10 Customers by Amount</h4>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-0 text-muted ">Name</th>
                                    <th scope="col" class="px-0 text-muted ">Email</th>
                                    <th scope="col" class="px-0 text-muted  text-end">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Query to get top 10 customers by amount
                                $query = "SELECT name, email, amount FROM customer ORDER BY amount DESC LIMIT 10";
                                $result = mysqli_query($con, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td class='px-0'>" . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td class='px-0'>" . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . "</td>";
                                        echo "<td class='px-0 text-dark fw-medium text-end'>$" . number_format($row['amount'], 2) . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3' class='px-0 text-center'>No customers found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
mysqli_close($con);
?>
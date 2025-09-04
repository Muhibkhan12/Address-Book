<?php
session_start();
$amount = isset($_GET['amount']) ? $_GET['amount'] : 0;
include('header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-lg-7 col-xl-6 m-b-50">
            <div class="bor10 p-lr-40 p-t-30 p-b-40 m-lr-0-xl p-lr-15-sm">
                <h4 class="mtext-109 cl2 p-b-30 text-center">
                    User Information Form
                </h4>

                <form action="submit.php" method="POST">
                    <div class="m-b-20">
                        <label class="stext-110 cl2">Name</label>
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" type="text" name="name" required>
                    </div>

                    <div class="m-b-20">
                        <label class="stext-110 cl2">Email</label>
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" type="email" name="email" required>
                    </div>

                    <div class="m-b-20">
                        <label class="stext-110 cl2">Address</label>
                        <textarea class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" name="address" rows="2"></textarea>
                    </div>

                    <div class="m-b-20">
                        <label class="stext-110 cl2">Cell No</label>
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" type="text" name="cell_no">
                    </div>

                    <div class="m-b-20">
                        <label class="stext-110 cl2">Date of Birth</label>
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" type="date" name="dob">
                    </div>

                    <div class="m-b-20">
                        <label class="stext-110 cl2">Work Phone No</label>
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" type="text" name="work_phone_no">
                    </div>

                    <div class="m-b-20">
                        <label class="stext-110 cl2">Remarks</label>
                        <textarea class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" name="remarks" rows="2"></textarea>
                    </div>

                    <div class="m-b-20">
                        <label class="stext-110 cl2">Category</label>
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" type="text" name="category">
                    </div>

                    <div class="m-b-30">
                        <label class="stext-110 cl2">Amount</label>
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15 w-100 border" type="number" step="0.01" name="amount" value="<?php echo htmlspecialchars($amount, ENT_QUOTES, 'UTF-8'); ?>">
                    </div>

                    <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer w-100">
                        Confirm
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
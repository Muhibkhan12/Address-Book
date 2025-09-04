<?php
include('header.php');
include('../Admin/connection.php');

$search_query = isset($_GET['search']) ? $_GET['search'] : '';
if (!empty($search_query)) {
    $sql = "SELECT * FROM `jewellery` WHERE name LIKE '%$search_query%' OR description LIKE '%$search_query%'";
} else {
    $sql = "SELECT * FROM `jewellery`";
}
$run = mysqli_query($con, $sql); 
?>

<!-- Video Banner -->
<div class="video-banner-container" style="width: 100%; position: relative; height: 700px; overflow: hidden;">
    <video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover; display: block;">
        <source src="videos/jewellery_banner.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<div class="bg0 m-t-23">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">All Products</button>
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".earrings">Earrings</button>
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".necklace">Necklace</button>
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bracelets">Bracelets</button>
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".rings">Rings</button>
            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Filter
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <form method="GET" action="" class="bor8 dis-flex p-l-15">
                    <button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search"
                        placeholder="Search products..." value="<?php echo htmlspecialchars($search_query); ?>"
                        id="search-input">
                </form>
                <?php if (!empty($search_query)): ?>
                    <div class="p-t-10">
                        <span class="stext-102 cl6">Search results for: "<?php echo htmlspecialchars($search_query); ?>"</span>
                        <a href="?" class="stext-102 cl1 hov-cl2 trans-04 m-l-10">Clear search</a>
                    </div>
                <?php endif; ?>

            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Sort By
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Default
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Popularity
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Average rating
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Newness
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: Low to High
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: High to Low
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col2 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Price
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    All
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $0.00 - $50.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $50.00 - $100.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $100.00 - $150.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $150.00 - $200.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $200.00+
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col3 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Color
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Black
                                </a>
                            </li>

                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Blue
                                </a>
                            </li>

                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Grey
                                </a>
                            </li>

                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Green
                                </a>
                            </li>

                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Red
                                </a>
                            </li>

                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    White
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col4 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Tags
                        </div>

                        <div class="flex-w p-t-4 m-r--5">
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Fashion
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Lifestyle
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Denim
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Streetstyle
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Crafts
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row isotope-grid">
            <?php while ($row = mysqli_fetch_array($run)) {
                // Determine category class based on product name or other criteria
                $category_class = '';
                $product_name = strtolower($row[1]);
                if (strpos($product_name, 'earring') !== false) {
                    $category_class = 'earrings';
                } elseif (strpos($product_name, 'necklace') !== false) {
                    $category_class = 'necklace';
                } elseif (strpos($product_name, 'bracelet') !== false) {
                    $category_class = 'bracelets';
                } elseif (strpos($product_name, 'ring') !== false) {
                    $category_class = 'rings';
                }
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $category_class; ?>">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="../Admin/<?php echo $row[3]; ?>" alt="IMG-PRODUCT">
                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1"
                                data-id="<?php echo $row['id']; ?>"
                                data-title="<?php echo htmlspecialchars($row[1]); ?>"
                                data-price="<?php echo $row[2]; ?>"
                                data-img="../Admin/<?php echo $row[3]; ?>"
                                data-desc="<?php echo htmlspecialchars($row[4]); ?>">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <span class="stext-104 cl4 p-b-6">
                                    <?php echo $row[1]; ?>
                                </span>

                                <span class="stext-105 cl3">
                                    $<?php echo $row[2]; ?>
                                </span>
                            </div>
                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Load More -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>

        <!-- Modal Template -->
        <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" style="display: flex; justify-content: center; align-items: center;">
            <div class="overlay-modal1 js-hide-modal1"></div>
            <div class="container">
                <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent" style="margin: 0 auto; max-width: 900px;">
                    <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                        <img src="images/icons/icon-close.png" alt="CLOSE">
                    </button>
                    <div class="row">
                        <div class="col-md-6 col-lg-7 p-b-30">
                            <div class="p-l-25 p-r-30 p-lr-0-lg">
                                <div class="wrap-slick3 flex-sb flex-w">
                                    <div class="wrap-slick3-dots"></div>
                                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                    <img id="modal-image" src="" height="400">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 p-b-30">
                            <div class="p-r-50 p-t-5 p-lr-0-lg">
                                <h4 class="mtext-105 cl2 js-name-detail p-b-14" id="modal-title"></h4>
                                <span class="mtext-106 cl2" id="modal-price"></span>
                                <p class="stext-102 cl3 p-t-23" id="modal-desc"></p>
                                <div class="p-t-33">
                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class="size-204 flex-w flex-m respon6-next">
                                            <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>
                                                <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
                                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">Add to cart</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Modal functionality
    document.querySelectorAll('.js-show-modal1').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('modal-title').textContent = this.getAttribute('data-title');
            document.getElementById('modal-price').textContent = '$' + this.getAttribute('data-price');
            document.getElementById('modal-image').src = this.getAttribute('data-img');
            document.getElementById('modal-desc').textContent = this.getAttribute('data-desc');

            // ✅ This line sets the href with product ID
            document.querySelector('.js-addcart-detail').href = `cart.php?id=${this.getAttribute('data-id')}`;

            document.querySelector('.js-modal1').classList.add('show-modal1');
        });
    });


    document.querySelectorAll('.js-hide-modal1').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelector('.js-modal1').classList.remove('show-modal1');
        });
    });
    // Category Filter Functionality
    document.querySelectorAll('.filter-tope-group button').forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            document.querySelectorAll('.filter-tope-group button').forEach(btn => {
                btn.classList.remove('how-active1');
            });

            // Add active class to clicked button
            this.classList.add('how-active1');

            // Get filter value
            const filterValue = this.getAttribute('data-filter');
            const products = document.querySelectorAll('.isotope-item');

            // Show/hide products based on filter
            products.forEach(product => {
                if (filterValue === '*') {
                    // Show all products
                    product.style.display = 'block';
                } else {
                    // Show products matching the category
                    const category = filterValue.replace('.', '');
                    if (product.classList.contains(category)) {
                        product.style.display = 'block';
                    } else {
                        product.style.display = 'none';
                    }
                }
            });
        });
    });

    // Search button toggle functionality
    document.querySelector('.js-show-search').addEventListener('click', function() {
        const searchPanel = document.querySelector('.panel-search');
        const searchIcon = document.querySelector('.icon-search');
        const closeIcon = document.querySelector('.icon-close-search');

        if (searchPanel.classList.contains('dis-none')) {
            searchPanel.classList.remove('dis-none');
            searchIcon.classList.add('dis-none');
            closeIcon.classList.remove('dis-none');
        } else {
            searchPanel.classList.add('dis-none');
            searchIcon.classList.remove('dis-none');
            closeIcon.classList.add('dis-none');
        }
    });

    // Filter button toggle functionality
    document.querySelector('.js-show-filter').addEventListener('click', function() {
        const filterPanel = document.querySelector('.panel-filter');
        const filterIcon = document.querySelector('.icon-filter');
        const closeIcon = document.querySelector('.icon-close-filter');

        if (filterPanel.classList.contains('dis-none')) {
            filterPanel.classList.remove('dis-none');
            filterIcon.classList.add('dis-none');
            closeIcon.classList.remove('dis-none');
        } else {
            filterPanel.classList.add('dis-none');
            filterIcon.classList.remove('dis-none');
            closeIcon.classList.add('dis-none');
        }
    });
</script>

<?php include('footer.php'); ?>
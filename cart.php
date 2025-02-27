

<?php
// Include database connection file
require 'sm-admin/core/database.php';

// Check if product ID is provided in the URL
if (isset($_GET['id'])) {
    // Retrieve product details based on the product ID
    $product_id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch product details
        $product = mysqli_fetch_assoc($result);
        // Display product details
        echo "<h2>{$product['name']}</h2>";
        echo "<p>Price: ₹{$product['salesprice']}</p>";
        // Add to cart functionality can also be included here if needed
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}

// Close connection
mysqli_close($con);
?>


<!-- ##### Header Area Start ##### -->
<?php include 'header.php'; ?>
<!-- ##### Header Area End ##### -->

<!-- ##### Welcome Area Start ##### -->
<div class="breadcumb-area clearfix dzsparallaxer auto-init" data-options='{direction: "normal"}'>
    <div class="divimage dzsparallaxer--target" style="width: 100%; background-image: url(img/bg-img/banner.png)"></div>
    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">PRODUCTS</h2>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Welcome Area End ##### -->

<section class="about-us-area ico-about-bg section-padding-100-70 clearfix">
    <div class="bub-right" id="feat">
        <section class="container my-5">
            <div class="row">
                <div class="col-md-8">
                    <!-- Cart Items List -->
                    <div class="cart-item">
                        <?php
                        // Check if cart is not empty
                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $product) {
                                ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- Display product image -->
                                    </div>
                                    <div class="col-md-5">
                                        <h4><?php echo $product['name']; ?></h4>
                                        <p><?php echo $product['salesprice']; ?>₹</p>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" value="1">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No items in the cart</p>";
                        }
                        ?>
                    </div>
                    <!-- Add more cart items here -->
                </div>

                <div class="col-md-4">
                    <!-- Cart Summary -->
                    <div class="border p-3 mb-3"> 
                    <h3 class="mb-3">Cart Summary</h3>
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>₹</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Tax</span>
                        <span> ₹</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Total</span>
                        <span> ₹</span>
                    </div>
                    <button class="btn btn-warning w-100 mt-3">Proceed to Checkout</button>
                </div> 
                </div>
            </div>
        </section>
    </div>
</section>

<!-- ##### Footer Area Start ##### -->
<?php include 'footer.php'; ?>
<!-- ##### Footer Area End ##### -->

<!-- ########## All JS ########## -->
<!-- jQuery js -->
<script src="js/jquery.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins.js"></script>
<!-- Parallax js -->
<script src="js/dzsparallaxer.js"></script>
<!-- Active js -->
<script src="js/script.js"></script>
</body>
</html>

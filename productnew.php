 
    <!-- ##### Header Area Start ##### -->
    <?php
   
// Include database connection file
require 'sm-admin/core/database.php';

// Write SQL query to select all products
$query = "SELECT * FROM products";

// Execute the query
$result = mysqli_query($con, $query);

// Check if query was successful
if (!$result) {
    echo "Error fetching data: " . mysqli_error($con);
    exit;
}
?>
      <?php include'header.php' ?>
      <style>
          .cart-item {
    margin-bottom: 1rem;
}

/* Banner */
.banner-image {
    background: url('img/banner.jpg') no-repeat center center / cover;
    min-height: 600px;
}

/* Feature Products Card */
.card-title a {
    color: #333; 
    text-decoration: none; 
}

/* Media queries for responsive adjustments */
@media (max-width: 768px) {
    .banner-image {
        min-height: 300px; /* Adjust banner image for smaller devices */
    }
}
@media (min-width: 768px) {
    .col-sm-3 {
        width: 25%;
        margin-bottom: 20px;
    }
} 
      </style>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix dzsparallaxer auto-init" data-options='{direction: "normal"}'>
        <div class="divimage dzsparallaxer--target" style="width: 100%; background-image: url(img/bg-img/banner.png)"></div>
        <!-- breadcumb content -->
        <div class="breadcumb-content" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">PRODUCTS</h2>
                            <!--<ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">-->
                            <!--    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
                            <!--    <li class="breadcrumb-item active" aria-current="page">Products</li>-->
                            <!--</ol>-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->
    <section class="about-us-area ico-about-bg section-padding-100-70 clearfix">
        <div class="bub-right" id="feat">
          
           <div class="container">
<div class="row">
    <?php
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-sm-3">
            <div class="card h-100">
                <?php
                // Output product image if image path is not empty
                if (!empty($row['image_path'])) {
                    // Construct the image path
                    $imagePath = './product_images/' . $row['image_path'];
                    
                    // Output the image
                    echo '<img src="' . $imagePath . '" class="card-img-top" alt="' . $row['name'] . '">';
                } else {
                    // Output placeholder image if image path is empty
                    echo '<img src="placeholder.jpg" class="card-img-top" alt="Placeholder Image">';
                }
                ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <p class="card-text"><?php echo $row['brand']; ?></p>
                    <p class="card-text"><?php echo $row['salesprice']; ?></p>
                    <form action="#" method="GET">
                        <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                        <input type="hidden" name="salesprice" value="&#8377;<?php echo $row['salesprice']; ?>">
                        <input type="hidden" name="quantity" value="1">
                        <input type="submit" class="btn btn-warning" value="Add to Cart">
                    </form>
                </div>
            </div>
        </div>
        <?php
        $count++;
        if ($count % 4 == 0) {
            echo '</div><div class="row row-margin-bottom">';
        }
    }
    ?>
</div>




</div>
    </section>
    
    <?php
// Free result set
mysqli_free_result($result);

// Close connection
mysqli_close($con);
?>
    <!-- ##### Footer Area Start ##### -->
   <?php include'footer.php'; ?>
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
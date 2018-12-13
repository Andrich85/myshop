

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './config.php'; ?>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
	<?php include("./views/bundles/bundlescss.php") ?>
</head>

<body class="animsition">
        <!-- Header -->
	<?php include("./views/shared/_header.php") ?>
         <!-- Carousel -->
	<?php include("./views/home/carousel.php") ?>
        <!-- Banner -->
        <?php include("./views/home/productcategories.php") ?>
	<!-- New Product -->
        <?php include("./views/home/newproduct.php") ?>
        <!-- Our Offers ->
        <?php include("./views/home/offers.php") ?>
        <!-- Banner 2 -->
        <?php include("./views/home/banner2.php") ?>
        <!-- Blog -->
        <?php include("./views/shared/_blog.php") ?>
         <!-- Instagram -->
        <?php include("./views/shared/_instagram.php") ?>
         <!-- Shipping -->
        <?php include("./views/shared/_shipping.php") ?>
	  <!-- Footer -->
        <?php include("./views/shared/_footer.php") ?>
        <!-- Back to Top-->
        <?php include("./views/shared/_backToTop.php") ?>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
        <!-- Scripts -->
        <?php include("./views/home/scripts.php") ?>

</body>
</html>

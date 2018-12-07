
<?php
require_once('./repository/session.inc.php');
IF (!isset($_COOKIE["USER"]))
{
 $cookie_value = rand(19293939, 3278372872) + rand(393989183,488493894) + rand (838138783,4948948);
 setcookie("USER",$cookie_value);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bundle CSS -->
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

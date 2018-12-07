<?php 
IF (!isset($_COOKIE["USER"]))
{
 $cookie_value = rand(192939, 32782) + rand(3939183,4883894) + rand (838138783,4948);
 setcookie("USER",$cookie_value);
}
?>


<head>
	<title>Shopping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
            <?php include("./views/bundles/bundlescss.php") ?>
            <?php include("./config.php") ?>
</head>
<body class="animsition">

	<!-- Header -->
	<?php include("./views/shared/_header.php") ?>
        <!-- Bread Crumb -->
	<?php include("./views/shared/_breadcrumb.php") ?>
	
        <!-- Shop Content -->
	<?php include("./views/shop/shop-content.inc.php") ?>

        <!-- Footer -->
	<?php include("./views/shared/_footer.php") ?>

        <!-- Back to Top-->
        <?php include("./views/shared/_backToTop.php") ?>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>

        <!-- Back to Top-->
        <?php include("./views/product-detail/scripts.php") ?>

</body>
</html>

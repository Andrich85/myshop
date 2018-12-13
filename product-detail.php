<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <?php require_once './config.php'; ?>
            <?php include("./views/bundles/bundlescss.php") ?>
</head>
<body class="animsition">

	<!-- Header -->
	<?php include("./views/shared/_header.php") ?>
        <!-- Bread Crumb -->
	<?php include("./views/shared/_breadcrumb.php") ?>
	
        <!-- Product Detail Content -->
	<?php include("./views/product-detail/product-detail-content.php") ?>

        <!-- Related Products -->
        <?php include("./views/shared/_relatedproducts.php") ?>

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

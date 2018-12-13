<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once './config.php'; ?>
       
</head>




?>

<body class="animsition">

	<!-- Header -->
	<?php include("./views/shared/_header.php") ?>
        <!-- Bread Crumb -->
	<?php include("./views/shared/_breadcrumb.php") ?>
	
       <!-- Login Content -->
	<?php include("./views/login/login-content.inc.php") ?>
        
        

        <!-- Footer -->
	<?php include("./views/shared/_footer.php") ?>

        <!-- Back to Top-->
        <?php include("./views/shared/_backToTop.php") ?>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>

        <!-- Back to Top-->
        <?php include("./views/register/scripts.php") ?>

</body>
</html>

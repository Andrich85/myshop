<head>
	<title>Register</title>
	<meta chasrset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
            <?php require_once './config.php'; ?>
            <?php include("./views/bundles/bundlescss.php") ?>
         
       
</head>
<body class="animsition">
    
            <?php
            //require_once ('../../controllers/products/product.inc.php');
            
            $_registerController = new controllers\Register();

            ?>

	<!-- Header -->
	<?php include("./views/shared/_header.php") ?>
        <!-- Bread Crumb -->
	<?php include("./views/shared/_breadcrumb.php") ?>
	
        <?php if(isset($_POST["userName"]))
                { 
                   
        
                    
                     ?>
                    
                            <section class="bgwhite p-t-55 p-b-65">
                                        <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
                                                                <div class="row" style="text-align:center">
                                                                <h3 class="m-text26 p-b-36 p-t-15"> <?= $_output ?> </h3> 
                                                                </div>
                                                    </div>
                                                </div>
                                        </div>
                                </section>
                <?php 
                 
                }
                else
                {
                    if(isset($_GET["verify"]))
                        {
                            ?>
                                <section class="bgwhite p-t-55 p-b-65">
                                        <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
                                                                <div class="row" style="text-align:center">
                                                                <h4 class="m-text26 p-b-36 p-t-15"> <?= $_registerController ->verifyEmail($_GET["email"], $_GET["hash"]); ?> </h4> 
                                                                </div>
                                                    </div>
                                                </div>
                                        </div>
                                </section>

                        <?php 
                        }
                        else
                        {
                            include("./views/register/register-content.inc.php");
                        }
            ?>
                    
                
              

	<?php  }?>
        
        

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

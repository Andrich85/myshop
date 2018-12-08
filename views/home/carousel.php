<?php
//require_once ('../../controllers/products/product.inc.php');
require_once ('./controllers/products/product.inc.php');

use controllers\Product;
$_controller = new controllers\Product();
$model = $_controller ->productCategories();
?>

<!-- Carousel -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
                             <?php foreach ($model as $item){ ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(<?= $item->ThumbnailL ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							<?= $item->Name ?>
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
                             <?php } ?>

			</div>
		</div>
	</section>


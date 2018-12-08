<?php
//require_once ('../../controllers/products/product.inc.php');
require_once ('./controllers/products/product.inc.php');

use controllers\Product;
$_controller = new controllers\Product();
$model = $_controller ->productCategories();
?>
	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				
					
                                    <?php foreach ($model as $item){ ?>
                            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                                    <!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
                                            <img src="<?= $item -> ThumbnailS ?>">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								<?= $item -> Name ?>
							</a>
						</div>
					</div>
                            </div>
                                    <?php } ?>
				

			</div>
		</div>
	</section>

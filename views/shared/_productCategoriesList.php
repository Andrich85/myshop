<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/config.php'; ?>

<?php

$_productCategoriesListController = new controllers\Product();
$model = $_productCategoriesListController ->productCategories();
?>





    <input class="hidden" id="category-selected" />
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1" data-category-id="40000" onclick="refreshProductGallery()">
									All
								</a>
							</li>
                                                         <?php foreach ($model as $item){ ?>   
							<li class="p-t-4">
								<a href="#" data-category-id ="<?= $item-> Id ?>" onclick="refreshProductGallery()" class="s-text13" >
									<?= $item-> Name ?>
								</a>
							</li>
                                                         <?php } ?>
						</ul>

						
					</div>
			
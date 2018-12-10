<?php
//require_once ('../../controllers/products/product.inc.php');
require_once ('./controllers/products/product.inc.php');

use controllers\Product;
$_registerController = new controllers\Product();
$model = $_registerController ->featuredItems();
?>

<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
                                           <?php foreach ($model as $item){ ?>            
                        
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
                                                        <div class="block2-img wrap-pic-w of-hidden pos-relative <?php if($item-> Discount > 0) {echo "block2-labelsale";}; if($item->New >0) {echo "block2-labelnew";};?>block2-labelnew">
								<img src="<?= $item->Thumbnail?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4" data-cart="<?=$item -> Id ?>">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="addToCart (<?=$item -> Id ?>)">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.php?id=<?=$item->Id ?>" class="block2-name dis-block s-text3 p-b-5">
									<?= $item-> Name ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									<?php if ($item->Discount > 0) { echo ""
                                                                                            . "<span class='block2-oldprice m-text7 p-r-5'>";
                                                                                                    echo $item-> Price;
                                                                                                    echo  "</span>"
                                                                                            . "<span class='block2-newprice m-text8 p-r-5'>";
                                                                                                     echo ($item-> Price - $item-> Discount);
                                                                                            echo "</span>";
                                                                                        } 


                                                                                        else {echo ""
                                                                                            . "<span class='block2-price m-text6 p-r-5'>";
                                                                                                    echo $item-> Price ;
                                                                                            echo "</span>";
                                                                                                } ?>
								</span>
							</div>
						</div>
					</div>
                                          <?php } ?>
				
				</div>
			</div>

		</div>
	</section>

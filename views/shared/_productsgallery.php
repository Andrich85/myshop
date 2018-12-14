<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/config.php'; ?>
<?php
$_productGalleryController = new controllers\Shop();
if (isset($_GET['productCategory']))
{
        if($_GET['productCategory'] == "undefined" && $_GET['filter'] == "undefined" )
        {
            $model = $_productGalleryController ->productsGallery($_GET['productCategory'], $_GET['filter']);
        }
        if($_GET['productCategory'] == "undefined" && $_GET['filter'] != "undefined" )
        {
            $model = $_productGalleryController ->productsGallery($_POST['productCategory'], null);
        }
        if($_GET['productCategory'] != "undefined" && $_GET['filter'] != "undefined" )
        {
            $model = $_productGalleryController ->productsGallery(null, null);
        }
        if($_GET['productCategory'] != "undefined" && $_GET['filter'] == "undefined" )
        {
            $model = $_productGalleryController ->productsGallery(null, $_GET['filter']);
        }
}
 else {
    $model = $_productGalleryController ->productsGallery(null, null);
}
?>
<section id="productsGallery">
<!-- Product -->
					<div class="row">
                                            <?php foreach ($model as $item){ ?>           
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative <?php if($item-> Discount > 0) {echo "block2-labelsale";} elseif($item->New = 1) {echo "block2-labelnew";};?>">
									<img src="<?= $item->Thumbnail?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
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
</section>
<?php
//require_once ('../../controllers/products/product.inc.php');
require_once ('./controllers/products/product.inc.php');
$_controller = new controllers\Product();
$model = $_controller ->productDetailContent($_GET["id"]);
?>

<?php foreach ($model as $item){ ?>
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
                                            <?php if ($item -> Picture1 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture1;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture1;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture2 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture2;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture2;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture3 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture3;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture3;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                           if ($item -> Picture4 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture4;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture4;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture5 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture5;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture5;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture6 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture6;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture6;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture7 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture7;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture7;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture8 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture8;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture8;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture9 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture9;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture9;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            if ($item -> Picture10 != null)
                                            {
                                                echo "<div class='item-slick3' data-thumb=";
                                                echo $item -> Picture10;
                                                echo ">";
                                                echo "<div class='wrap-pic-w'>";
                                                echo "<img src=";
                                                echo $item -> Picture10;
                                                echo " alt='IMG-PRODUCT'>";
                                                echo "</div> ";
                                                echo "</div>";
                                            }
                                            ?>

					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?= $item -> Brand ?> - <?= $item -> Name ?>
				</h4>

				<span class="m-text17">
					EUR <?= $item -> Price ?>
				</span>

				<p class="s-text8 p-t-10">
					<?= $item->Description ?>
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Choose an option</option>
								<option>Size S</option>
								<option>Size M</option>
								<option>Size L</option>
								<option>Size XL</option>
							</select>
						</div>
					</div>

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="color">
								<option>Choose an option</option>
								<option>Gray</option>
								<option>Red</option>
								<option>Black</option>
								<option>Blue</option>
							</select>
						</div>
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="addToCartByQuantity(<?= $item-> Id ?>, document.getElementsByName('num-product')[0].value)">
									Add to Cart
								</button>
                                                                <script>
                                                                </script>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">SKU: MUG-01</span>
					<span class="s-text8">Categories: Mug, Design</span>
				</div>

				<!--  -->
				

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $item -> AdditionalInformations ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
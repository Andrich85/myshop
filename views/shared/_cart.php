<?php
//require_once ('../../controllers/shoppingCart/shoppingCart.inc.php');

$model = [];
 

if(isset($_POST["cartAction"]))
{
    include ('./../../controllers/shoppingcart/shoppingcart.inc.php');
    
    
    $_controller = new controllers\ShoppingCart();
    
    $action = $_POST["cartAction"];
    $productId = $_POST["productId"];
    $quantity;
    if ( isset($_POST["quantity"]) )
    {
        $quantity = $_POST["quantity"];
    }
    
    


        switch ($action) {
            
            case "Add":
               $model =  $_controller->addToShoppingCart($productId);
                break;
              case "AddQuantity":
               $model =  $_controller->addToShoppingCartByQuantity($productId,$quantity);
                break;
            case "Delete":
                $model =  $_controller->deleteFromShoppingCart($productId);
                break;
            case "Reset":
                $model = $_controller->reset();
                break;
            default:
                $model = $_controller ->getContentBySessionId($_controller->SessionId);
                break;
        }
    
}

else{
    include ('./controllers/shoppingcart/shoppingcart.inc.php');
    $_controller  = new controllers\ShoppingCart();
    $model = $_controller -> getContentBySessionId($_controller->SessionId);
}

$sum = 0;
$total = 0;
foreach($model as $key=>$value){
  if(isset($value->Quantity))
     $sum += $value->Quantity;
     $total += $value->Price * $value->Quantity;
}


?>


<section id="_cart">

<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?= $sum ?></span>
<div class="header-cart header-dropdown">
                                        
							<ul class="header-cart-wrapitem">
                                                            <?php foreach ($model as $item) { ?>
								<li class="header-cart-item">
									<div class="header-cart-item-img" onclick="deleteFromCart (<?=$item -> ProductId ?>)">
										<img src="<?= $item -> Thumbnail ?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<?= $item -> ProductName ?>
                                                                                    
										</a>

										<span class="header-cart-item-info">
                                                                                    <?= $item -> Quantity ?> x 	<?= $item -> Price ?>
										</span>
									</div>
								</li>
                                                            <?php }?>	
							</ul>

							<div class="header-cart-total">
								Total:  <?= $total ?> Eur
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
                                                <script>
                                                    /*[ Show header dropdown ]
                                                ===========================================================*/
                                                $('.js-show-header-dropdown').on('click', function(){
                                                    $(this).parent().find('.header-dropdown')
                                                });

                                                var menu = $('.js-show-header-dropdown');
                                                var sub_menu_is_showed = -1;

                                                for(var i=0; i<menu.length; i++){
                                                    $(menu[i]).on('click', function(){ 

                                                            if(jQuery.inArray( this, menu ) == sub_menu_is_showed){
                                                                $(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
                                                                sub_menu_is_showed = -1;
                                                            }
                                                            else {
                                                                for (var i = 0; i < menu.length; i++) {
                                                                    $(menu[i]).parent().find('.header-dropdown').removeClass("show-header-dropdown");
                                                                }

                                                                $(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
                                                                sub_menu_is_showed = jQuery.inArray( this, menu );
                                                            }
                                                    });
                                                }

                                                $(".js-show-header-dropdown, .header-dropdown").click(function(event){
                                                    event.stopPropagation();
                                                });

                                                $(window).on("click", function(){
                                                    for (var i = 0; i < menu.length; i++) {
                                                        $(menu[i]).parent().find('.header-dropdown').removeClass("show-header-dropdown");
                                                    }
                                                    sub_menu_is_showed = -1;
                                                });
                                                </script> 

                          
   
    
    
</section>                     
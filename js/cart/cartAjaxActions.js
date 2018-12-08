function deleteFromCart (id){

    $.ajax(
        {
            type:"POST",
            url: "views/shared/_cart.php", 
            success: function(result){
                $("#_cart").html(result);

                },

            dataType: 'html',
            data:
                {
                  cartAction : "Delete",
                  productId : id                         
                }
        });

}

function updateCartContent()
{
    $.ajax(
        {
            type:"POST",
            url: "views/shared/_cart.php", 
            success: function(result){
                $("#_cart").html(result);

                },

            dataType: 'html',
            data:
                {
                  cartUpdated: 1                       
                }
        });
       $.ajax(
        {
            type:"POST",
            url: "views/shoppingcart/shoppingcart-content.inc.php", 
            success: function(result){
                $("#shopping-cart-content").html(result);

                },
            data: {
                
                cartUpdated : 1
            },
            dataType: 'html'
        
        }); 
    
}

function deleteFromCartCallBack (id){

    $.ajax(
        {
            type:"POST",
            url: "views/shared/_cart.php", 
            success: function(result){
                $("#_cart").html(result);

                },

            dataType: 'html',
            data:
                {
                  cartAction : "Delete",
                  productId : id,
                  cartUpdated: 1
                }
        });

}


function addToCart (id){

    $.ajax(
        {
            type:"POST",
            url: "views/shared/_cart.php", 
            success: function(result){
                $("#_cart").html(result);

                },

            dataType: 'html',
            data:
                {
                  cartAction : "Add",
                  productId : id                         
                }
        });

}
  
function addToCartByQuantity (id, quantity){

    $.ajax(
        {
            type:"POST",
            url: "views/shared/_cart.php", 
            success: function(result){
                $("#_cart").html(result);

                },

            dataType: 'html',
            data:
                {
                  cartAction : "AddQuantity",
                  productId : id,
                  quantity : quantity
                }
        });

}

function deleteFromCartAndRefreshContent (id){
    deleteFromCartCallBack(id);
     $.ajax(
        {
            type:"POST",
            url: "views/shoppingcart/shoppingcart-content.inc.php", 
            success: function(result){
                $("#shopping-cart-content").html(result);

                },
            data: {
                
                cartUpdated : 1
            },
            dataType: 'html'
        
        }); 
}
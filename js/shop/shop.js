
function refreshProductGallery()
{
    var filter = $('#sorting').find(":selected").val();
    var productCategory = $(event.target).attr('data-category-id');
    
    if (productCategory == null)
    {
        productCategory =  $("#category-selected").text;
    }
    else
    {
        $("#category-selected").text = productCategory;
    }
 
    $.ajax(
                                                {
                                                    type:"GET",
                                                    url: "views/shared/_productsgallery.php?productCategory=" + productCategory + "&filter=" + filter + "", 
                                                    success: function(result){
                                                       
                                                        $("#productsGallery").html(result);
                                                      

                                                        },

                                                    dataType: 'html',
                                                   
                                            })
                                            event.preventDefault();
                                            
}


function refreshProductGallery()
{
    
    
    var filter = $('#sorting').find(":selected").val();
    
    // if the refresh is fired by the priceFilter
    if ($(event.target).parent().find('button').length != 0)
    {
    	$('#priceFilter').show();
    	var priceMin = $('#value-lower').text();
    	var priceMax = $('#value-upper').text();
  
    	$('#priceFilterText').text("Price Min: " + priceMin + "- Price Max: " + priceMax);
    }

	// if the refresh is fired by the categoryList
    if ($(event.target).attr('data-category-id') != null) {
    	$('#categoryFilter').show();
    	$('#priceFilterText').text();
			var productCategory = $(event.target).attr('data-category-id');
			var productBrand = $(event.target).attr('data-brand-id');

			if (productCategory == null)
			{
				productCategory =  $("#category-selected").text();

			}
			else
			{
				$("#category-selected").text(productCategory);

			}

			  if (productBrand == null)
			{

				productBrand = $("#brand-selected").text();
			}
			else
			{

				$("#brand-selected").text(productBrand);
			}

    }
  

    $.ajax(
                                                {
                                                    type:"GET",
                                                    url: "views/shared/_productsgallery.php?productCategory=" + productCategory + "&priceMin=" + priceMin + "&priceMax=" + priceMax + "&brand=" + productBrand + "&filter=" + filter + "", 
                                                    success: function(result){
                                                       
                                                        $("#productsGallery").html(result);
                                                        //createSlider();
                                                      

                                                        },

                                                    dataType: 'html',
                                                   
                                            })
                                            event.preventDefault();
                                             

	                    
}

function createSlider()
{
    var filterBar = document.getElementById('filter-bar');
      noUiSlider.create(filterBar, {
	        start: [ 0, 200 ],
	        connect: true,
	        range: {
	            'min': 0,
	            'max': 100
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
                          
}

function deleteFilter()
{
    $(event.target).parent().hide();
    var filter =  $(event.target).parent().attr('id');
    if (filter == "priceFilter")
    {
         document.getElementById('value-lower').innerHTML = 0;
         document.getElementById('value-upper').innerHTML = 100;
         resetPriceFilter();
    }
   
    refreshProductGallery;
    
}

function resetPriceFilter()
{
	 	$('.noui-handle-upper').parent().css('left','100%');
         $('.noui-handle-lower').parent().css('left','0%');
         $('.noUi-connect').css('right','0%');
         
}
$(document).ready(function(){createSlider()});
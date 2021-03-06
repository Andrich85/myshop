<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                
                         
				<!-- ProductCategoriesList -->
                                <?php include $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/myshop/views/shared/_productCategoriesList.php' ?>
                                <!-- BrandsList -->
                                <?php include $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/myshop/views/shared/_brandsList.php' ?>
                                <!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4" onclick="refreshProductGallery()">
										Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
                        </div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting" id="sorting" onchange="refreshProductGallery()">
									<option value="defalt">Default Sorting</option>
									<option value="defalt">Popularity</option>
									<option value="lowToHigh">Price: low to high</option>
									<option value="highToLow">Price: high to low</option>
								</select>
							</div>
                                                      
<!--							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>-->
						</div>
                               

<!--						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>-->
					</div>
                                        <div class="row">
                                            <div class="applied-filters-wrapper">
                                                            <div class="applied-filter" id="priceFilter" style="display:none">
                                                                <p id="priceFilterText">Price Min: 40</p>
                                                                <span class="applied-filter-remove" onclick="deleteFilter()">x</span>
                                                            </div>
                                                            
                                                            <div class="applied-filter" id="categoryFilter" style="display:none">
                                                                <p id="categoryFilterText">Cases</p>
                                                                <span class="applied-filter-remove" onclick="deleteFilter()">x</span>
                                                            </div>
                                                             <div class="applied-filter" id="brandFilter" style="display:none">
                                                                <p>Brand</p>
                                                                <span class="applied-filter-remove" onclick="deleteFilter()">x</span>
                                                            </div>
                                                            
                                                            
                                                        
                                                        </div>
                                        </div>
                                                       
                                        <?php
                                        include $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/views/shared/_productsgallery.php';  ?>
					

<!--					 Pagination 
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>-->
				</div>
			</div>
		</div>
	</section>
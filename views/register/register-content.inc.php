<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row" style="text-align:center;display:table">


				<div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
		
					<!-- Register -->
					<div class="row">
                                            <form class="leave-comment" method="POST" id="new-user-form">
                                                <h4 class="m-text26 p-b-36 p-t-15">
							New user registration.
						</h4>

                                                       
                                                        <div class="bo4 of-hidden size15 m-b-20">
                                                                <input class="sizefull s-text7 p-l-22 p-r-22" id="userName"  type="text" name="userName" placeholder="User Name" required>                                                     
                                                                </div>
                                                        
                                                         <div class="bo4 of-hidden size15 m-b-20">
                                                             <input class="sizefull s-text7 p-l-22 p-r-22"  type="email" id="email" name="email" placeholder="Email" required>                                                     
                                                                </div>
                                                        
                                                        <div class="bo4 of-hidden size15 m-b-20">
                                                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" id="password" name="password" placeholder="Password" required>                                                     
                                                                </div>
                                                        
                                                        <div class="bo4 of-hidden size15 m-b-20">
                                                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="rpassword" placeholder="Repeat Password">  
                                                                </div>
     
                                                         
						<div class="w-size55">
							<!-- Button -->
							<button onclick="askValidation(document.getElementById('userName').value,document.getElementById('email').value,document.getElementById('password').value)"  class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Register
							</button>
                                                        <br>
                                                        
						</div>   
                                                
                                            </form>
                                            
					</div>
                                        <div class="row">
                                                <div class="alert alert-danger" style="display:none" id="validation-message"></div>
                                            </div>
                                            

					
				</div>
			</div>
		</div>
	</section>
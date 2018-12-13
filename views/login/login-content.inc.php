<?php

if(isset($_POST["userName"]))
    {
        
        $rememberDuration = (int) (60 * 60 * 24 * 365.25);
        $_loginController -> login($_POST["userName"],$_POST["password"],$rememberDuration);
         
    } 
    
 
if(isset($_POST["logout"]))
    {
        $array = (array)$GLOBALS["Authorization"];
        if(!empty($array))
        {
            $GLOBALS["Authorization"] ->   logOutEverywhere();
        }
        else
        {
            try
            { require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/config.php';}
            catch (Exception $e)  {
                    $a = $e -> getMessage();
            }
           
            $GLOBALS["Authorization"] ->   logOutEverywhere();
        }
        
         
    } 
    
 ?>

<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row centered" style="display:table">


				<div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
		
					<!-- Register -->
                                        
					<div class="row" style="text-align:center">
                                            <form class="leave-comment" method="POST" id="login-form">
                                                <h4 class="m-text26 p-b-36 p-t-15 left">
							Login
						</h4>

                                                        <div class="bo4 of-hidden size15 m-b-20">
                                                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="userName" name="userName" placeholder="User Name" required>
                                                        </div>
                                                       
                                                        <div class="bo4 of-hidden size15 m-b-20">
                                                                <input class="sizefull s-text7 p-l-22 p-r-22" type="password" id="password" name="password" placeholder="Password" required>                                                     
                                                                </div>
                                                        
     
                                                         
						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" onclick="logIn(document.getElementById('userName').value,document.getElementById('password').value)">
								Log in
							</button>
						</div>   

                                            </form>
					</div>

					
				</div>
			</div>
		</div>
	</section>
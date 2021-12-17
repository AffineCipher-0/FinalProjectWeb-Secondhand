<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_barang"])) {
	//this is product list array
	$list_barang = $_POST["id_barang"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($list_barang);
	//here we are creating cookie and name of cookie is product_list
	setcookie("list_barang",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>

	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

					<div class="login-marg">
						<!-- Billing Details -->
						
						
						<!-- /Billing Details -->
						
						
								<form onsubmit="return false" id="login" class="login100-form ">
									<div class="billing-details jumbotron">
                                    	<div class="section-title">
											<h2 class="login100-form-title p-b-49" >Login</h2>
                                    	</div>
                                   
                                    
                                    	<div class="form-group">
                                       		<label for="email">Email</label>
                                        	<input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
                                    	</div>
                                    
                                    	<div class="form-group">
                                       		<label for="email">Password</label>
                                        	<input class="input input-borders" type="password" name="password" placeholder="password" id="Password" required>
                                    	</div>
                                    
                                    
                                        <input class="primary-btn btn-block"   type="submit"  Value="Login">
                                        
                                        <div class="panel-footer"><div class="alert alert-light"><h4 id="e_msg"></h4></div></div>
                                    
                                	</div>
                                
								</form>
                           
						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				
				<!-- /row -->
			</div>
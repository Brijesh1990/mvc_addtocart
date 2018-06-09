
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
                  <?php
				  if(!isset($_SESSION["uid"]))
				  
				  {
				  
				  
				  ?>
                  
                  
                  
                  
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    
                    
                    
                    
					<li class="dropdown menu__item">
						<a href="mens.php" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select Product<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.php"><img src="images/woo1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											
                                            <?php
											
											
											foreach($cat as $cat1)
											{
											?>
                                            
                                            
                                            <li><a href="product.php?catid=<?php echo base64_encode($cat1["catid"]);?>"><?php echo $cat1["catname"];?></a></li>
                                            
                                            
                                            
                                            <?php
											
											}
											?>
											
                                            
                                            
                                            
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					
					<li class=" menu__item"><a class="menu__link" href="feedback.php">Feedback Us</a></li>
					<li class=" menu__item"><a class="menu__link" href="gallery.php">Gallery</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">contact</a></li>
                    
                    <?php
					
				  }
				  
				  
				  else
				  
				  {
				  
				  
				  ?>
                   
                   
					<li class=" menu__item"><a class="menu__link" href="profile.php">Profile</a></li>
                    
                    
                    
					<li class=" menu__item"><a class="menu__link" href="changepassword.php">change Password</a></li>
                    
                  
                  
                  
					<li class="dropdown menu__item">
						<a href="mens.php" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select Product<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.php"><img src="images/woo1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											
                                            <?php
											
											
											foreach($cat as $cat1)
											{
											?>
                                            
                                            
                                            <li><a href="product.php?catid=<?php echo base64_encode($cat1["catid"]);?>"><?php echo $cat1["catname"];?></a></li>
                                            
                                            
                                            
                                            <?php
											
											}
											?>
											
                                            
                                            
                                            
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
                    
                    
                    
    
					<li class=" menu__item"><a class="menu__link" href="viewcart.php">View Cart</a></li>
                    
 
 
 
					<li class=" menu__item"><a class="menu__link" href="checkout.php">checkout</a></li>
                    
                    
                    
                    
					<li class=" menu__item"><a class="menu__link" href="vieworder.php">View Order</a></li>
 
 
 
					<li class=" menu__item"><a class="menu__link" href="profile.php?lg">Logout</a></li>
                    
                                     
                  
                    
                                                   
                    
                      
                    
                    
                   
                   <?php
				  }
				  ?>
                    
                    
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.php">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>

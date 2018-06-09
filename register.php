<?php
include_once("controller/controller.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
<!-- header -->
<!-- //header-bot -->
<!-- banner -->


<?php
include("header.php");

?>



<?php
include("menu.php");

?>

<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Home/Login</h3>
	</div>
</div>
<!-- //banner -->
<!-- contact -->




	<div class="contact">
		
    
        
     			<h3 class="tittle">LoginForm</h3>
                
                
           <div class="list-group" style="width:60%; margin-left:20%">
           
           <div class="list-group-item active" style="background-color:#F93">User Login</div>
           
           <div class="list-group-item">     
                
			<form method="post">
			
                
                <div class="form-group">
                <label>Enter email :<span class="fa fa-user"></span>
                </label>
                
                <input type="text" name="em" required placeholder="Enter email" class="form-control">
                
                
                
                </div>
                
				  <div class="form-group">
                <label>Enter Password :<span class="fa fa-lock"></span>
                </label>
                
                <input type="password" name="pass" required placeholder="Enter Passwprd" class="form-control">
                
                
                
                </div>
                
                
                
				  <div class="form-group">
                <label>Enter FullName :<span class="fa fa-lock"></span>
                </label>
                
                <input type="text" name="fname" required placeholder="Enter Fullname" class="form-control">
                
                
                
                </div>
                
                
                
                
				  <div class="form-group">
                <label>Enter Address :<span class="fa fa-lock"></span>
                </label>
                
                <textarea name="address" required placeholder="Enter address" class="form-control"></textarea>
                
                
                
                
                </div>
                
                
                
				  <div class="form-group">
                <label>Enter Mobile:<span class="fa fa-lock"></span>
                </label>
                
                <input type="text" name="mob" required placeholder="Enter mobile" class="form-control">
                
                
                
                </div>
                
                
                
                
				  <div class="form-group">
                <label>Select country :<span class="fa fa-lock"></span>
                </label>
                
                <select  name="country" required  class="form-control">
  <option value="">-select country-</option>
  <?php
  foreach($cn as $cn1)
  
  {
  
  ?>
  
  <option value="<?php echo $cn1["cid"];?>"><?php echo $cn1["cname"];?></option>
  
  
  <?php
  }
  ?>
  
  </select>              
                
                
                </div>
                
                
                
                
				  <div class="form-group">
                <label>Select State :<span class="fa fa-lock"></span>
                </label>
                
                <select  name="state" required  class="form-control">
  <option value="">-select state-</option>
  <?php
  foreach($sn as $sn1)
  
  {
  
  ?>
  
  <option value="<?php echo $sn1["sid"];?>"><?php echo $sn1["sname"];?></option>
  
  
  <?php
  }
  ?>
  
  </select>              
                
                
                </div>
                
                
                
                
                
                
				  <div class="form-group">
                <label>Select City :<span class="fa fa-lock"></span>
                </label>
                
                <select  name="city" required  class="form-control">
  <option value="">-select city-</option>
  <?php
  foreach($ctn as $ctn1)
  
  {
  
  ?>
  
  <option value="<?php echo $ctn1["ctid"];?>"><?php echo $ctn1["ctname"];?></option>
  
  
  <?php
  }
  ?>
  
  </select>              
                
                
                </div>
                
                
                
                
             <div class="form-group">   
                
                	
		<input type="submit" name="adduser" value="Register"  class="btn btn-lg" style="background-color:#CE6700">
        
        
        <a href="register.php">New User</a>
				</div>
			</form>
		</div>
        </div>
        </div>
	</div>
    </div>

	
<!-- //contact -->

<!-- //product-nav -->
<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->

<?php
include("footer.php");

?>

<!-- //login -->
</body>
</html>

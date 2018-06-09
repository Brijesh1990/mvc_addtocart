<?php

include("controller/control.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel ::addsubcategory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	

    <?php
    include("header.php");
    
    ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="cols-grids panel-widget">
    
        <?php
		if(isset($_REQUEST["edsub"]))
		{
		?>
         
    	<h2>Update Product Here!</h2>
         <?php
		}
		else
		{
		?>
    	<h2>Add Product Here!</h2>
        
        <?php
		}
		?>
        
        
        
        
	<form method="post" enctype="multipart/form-data">
    <div class="form-group">
    <div class="list-group">
    
        <?php
		if(isset($_REQUEST["edsub"]))
		{
		?>
    <div class="list-group-item">Update Product</div>
    <?php
		}
		else
		{
			?>
    <div class="list-group-item">Add Product</div>
    <?php
		}
		?>
        
        
      
        
    <div class="list-group-item">
    <div class="form-group">
    <label>Select Categoey :</label>
    <select name="cat"  class="form-control">
    
    <option value="">-select category-</option>
    
    <?php
	foreach($cat as $cat1)
	{
		
		if($edsub[0]["catid"]==$cat1->catid)
	
	  {
	?>
    
    <option value="<?php echo $edsub[0]["catid"];?>" selected="selected"><?php echo $edsub[0]["catname"];?></option>
   
   
   <?php
	}
	
	else
	{
	?>
    
    
    <option value="<?php echo $cat1->catid;?>"><?php echo $cat1->catname;?></option>
   
   <?php
	}
	}
	?>
    </select>
    
    </div>
    </div>
     
     
     
        
    <div class="list-group-item">
    
    
    <div class="form-group">
    <label>Select SubCategoey :</label>
    <select name="subcat"  class="form-control">
    
    <option value="">-select subcategory-</option>
    
    <?php
	foreach($subcategory as $subcat1)
	{
		
		if($edsub[0]["subcatid"]==$subcat1->subcatid)
	
	  {
	?>
    
    <option value="<?php echo $edsub[0]["subcatid"];?>" selected="selected"><?php echo $edsub[0]["subcatname"];?></option>
   
   
   <?php
	}
	
	else
	{
	?>
    
    
    <option value="<?php echo $subcat1->subcatid;?>"><?php echo $subcat1->subcatname;?></option>
   
   <?php
	}
	}
	?>
    </select>
    
    </div>
    </div>
     
        
   
        
    
    <div class="list-group-item">
     <div class="form-group">
    <label>Select Product images :</label>
    <input type="file" name="img"  class="form-control">
    
    </div>
    </div>
    
    
    
    <div class="list-group-item">
     <div class="form-group">
    <label>Enter Product name :</label>
    <input type="text" name="pname"  class="form-control">
    
    </div>
    </div>
   
   
   
    <div class="list-group-item">
     <div class="form-group">
    <label>Select product qty:</label>
    <input type="text" name="qty"  class="form-control">
    
    </div>
    
    </div>
    
    
    
    <div class="list-group-item">
     <div class="form-group">
    <label>Prodct Price :</label>
    <input type="text" name="price"  class="form-control">
    
    </div>
    </div>    
    
    
    
    <div class="list-group-item">
    <div class="form-group">
    <label>Select Color :</label>
    <select name="colname"  class="form-control">
    
    <option value="">-select color</option>
    
    <?php
	foreach($color as $color1)
	{
		
		if($edsub[0]["colid"]==$color1->colid)
	
	  {
	?>
    
    <option value="<?php echo $edsub[0]["colid"];?>" selected="selected"><?php echo $edsub[0]["colname"];?></option>
   
   
   <?php
	}
	
	else
	{
	?>
    
    
    <option value="<?php echo $color1->colid;?>"><?php echo $color1->colname;?></option>
   
   <?php
	}
	}
	?>
    </select>
    
    </div>
    </div>
     
     
     
     
     <div class="list-group-item">
    <div class="form-group">
    <label>Select Size :</label>
    <select name="sizename"  class="form-control">
    
    <option value="">-select size-</option>
    
    <?php
	foreach($size as $size1)
	{
		
		if($edsub[0]["sizeid"]==$size1->sizeid)
	
	  {
	?>
    
    <option value="<?php echo $size1[0]["sizeid"];?>" selected="selected"><?php echo $size1[0]["sizename"];?></option>
   
   
   <?php
	}
	
	else
	{
	?>
    
    
    <option value="<?php echo $size1->sizeid;?>"><?php echo $size1->sizename;?></option>
   
   <?php
	}
	}
	?>
    </select>
    
    </div>
    </div>
     
     
     
    
    
    
    <div class="form-group">
    <label>Enter description</label>
    
    <textarea name="pdesc" class="form-control"><?php echo $edsub[0]["description"];?></textarea>
    </div>
    <?php
		if(isset($_REQUEST["edsub"]))
		{
		?>
         
    
    <div class="form-group">
    <input type="submit" name="updproduct" value="Update Product!"  class="btn btn-danger btn-lg">
    
    </div>
    
    
    <?php
		}
	 
		else
		{
			?>
    
    
    <div class="form-group">
    <input type="submit" name="addproduct" value="Add Product!"  class="btn btn-success btn-lg">
    
    </div>
    
    <?php
	
		}
	 
	 
		?>
    
     </form>
    </div>
    </div>
    </div>
   
    
     </div>
    </div>
    </div>
    
    
    
    
	
</div>
</div>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--inner block end here-->
<!--copy rights start here-->


<?php

include("footer.php");

?>




<!--COPY rights end here-->
</div>
<!--slider menu-->
    
    
    <?php
    include("sidebar.php");
    
    ?>
    
    
    
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>

              

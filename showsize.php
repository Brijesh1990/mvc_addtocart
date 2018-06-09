<?php
include("controller/control.php");


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Grids :: w3layouts</title>
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
    	<h2>Show Category Here!</h2>
	
    <div class="form-group">
    <div class="list-group">
    <div class="list-group-item">Show Category</div>
    <div class="list-group-item">
    
    
    <div class="form-group">
   
   
   <table align="center" class="table-responsive table-hover table-striped table-bordered" style="width:100%">
   <tr>
   <th>Sizeid</th>
   <th>sizename</th>
   <th>Created_date</th>
   <th>Created_time</th>
      <th>Description</th>
   <th>Action</th>
   </tr>
   
   <?php
   foreach($size as $size1)
   
   {
   
   
   ?>
   
   
   <tr>
   
   <td><?php echo $size1->sizeid;?></td>
   
   <td><?php echo $size1->sizename;?></td>
   
    <td><?php echo $size1->created_date;?></td>
    
     <td><?php echo $size1->created_time;?></td>



  
   <td><?php echo $size1->description;?></td>  
   
   <td><a href="showsize.php?delsize=<?php echo base64_encode($size1->sizeid);?>" title="Click for Delete color" onClick="return confirm('Are you sure to delete')"><span class="fa fa-remove" style="color:red; font-size:35px"></span>
   
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
   
   <a href="addsize.php?eidsize=<?php echo base64_encode($size1->sizeid);?>" title="Click for edit color" onClick="return confirm('Are you sure to edit')"><span class="fa fa-edit" style="color:green; font-size:35px"></span>
   
   
   
   </td> 
   
   
   
   
   
   
   
   </tr>
   
   <?php
   
   }
   
   ?>
   
   
   
   </table>
    
    
    
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

              

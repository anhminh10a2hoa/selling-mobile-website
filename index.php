<?php
ob_start();
session_start();
include_once('admin/database.php');
include_once('modules/online/counterUser.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/success.css">
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/category.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
	<div class="container">
    	<div class="row">
			<?php
			//	logo
			include_once('modules/logo/logo.php');
			
			//	search
			include_once('modules/search/search_box.php');
			
			//	cart
			include_once('modules/cart/cart_notify.php');
			?>      
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <?php
	//	Menu responsive
	include_once('modules/category/menu_responsive.php');
	?>
</div>
<div class="sticky">
    <div class="small_heading">
        <h5 class="colr">THỐNG KÊ</h5>
    </div>
	<div style="clear:both"></div>
    Số người online: <?php echo $rowsOnline;?><br>
    Số lượt truy cập: <?php echo $rowsUser;?>
</div>  
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<nav>
                	<?php
					//	Menu
					include_once('modules/category/menu.php');
					?>
                </nav>
            </div>
        </div>
        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            	<!--	Slider	-->
				
                <?php
				//	Slide
				include_once('modules/slide/slide.php');
				?>
                <!--	End Slider	-->
                
                <?php
				//	Master page
				if(isset($_GET['page_layout'])){
					
					switch($_GET['page_layout']){
						case 'category': include_once('modules/category/category.php');
						break;
						case 'product': include_once('modules/product/product.php');
						break;	
						case 'search': include_once('modules/search/search.php');
						break;
						case 'cart': include_once('modules/cart/cart.php');
						break;
						case 'success': include_once('modules/cart/success.php');
						break;
					}
				}
				else{
					include_once('modules/product/product_featured.php');
					include_once('modules/product/product_lastest.php');
				}
				?>
                
            </div>
            
            <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
            	<?php
				//	Banner
				include_once('modules/banner/banner.php');
				?>
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->

<div id="footer-top">
	<div class="container">
    	<div class="row">
			<?php
			//	Logo Footer 
			include_once('modules/logo/logo_footer.php');
			
			//	Address
			include_once('modules/address/address.php');
			
			//	Service
			include_once('modules/service/service.php');
			
			//	Hotline
			include_once('modules/hotline/hotline.php');
			?>
        </div>
    </div>
</div>

<!--	Footer	-->
<?php
//	Footer
include_once('modules/footer/footer.php');
?>
<!--	End Footer	-->

</body>
</html>

<?php require("./classes/main.class.php");?>
<!DOCTYPE HTML>
<head>
    <title>Nerds & Gamers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="shortcut icon" href="images/favicon.png" />
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script src="js/jquery.openCarousel.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
</head>
<body>
<!-------------------------------------------------Header--------------------------------------------------------------->
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" width="250"/></a>
					</div>
						<div class="header_top_right">
							  <div class="search_box">
							  	<span>Buscar</span>
					     		<form>
					     			<input type="text" value=""><input type="submit" value="">
					     		</form>
					     		<div class="clear"></div>
					     	</div>
					</div>
			     <div class="clear"></div>
  		    </div>
<!-------------------------------------------------Menu--------------------------------------------------------------->
  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="index.html">Home</a>
						</li>
                        <li>
							<a href="?noticias">Notícias</a>
						</li>

						<?php Main::menu();?>

						<li>
							<a href="#">Categorias</a>
							<ul>
								<?php Main::categorias();?>

							</ul>
						</li>
						<li>
							<a href="?conta">Minha Conta</a>
						</li>
						<li>
							<a href="contact.html">Fale Conosco</a>
						</li>
					</ul>
					 <span class="left-ribbon"> </span>
      				 <span class="right-ribbon"> </span>

  		    </div>
<!-------------------------------------------------/Menu--------------------------------------------------------------->


<!---------------------------------------------------Banner Slider-------------------------------------------------------->
  		     <div class="header_bottom">
  		     <div  id="header_bottom" class="nivoSlider">
	  	      	<img src="images/banners/teste1.jpg" title="alskjçadslkadsçlkadsçlkjasdjasdkljksadjkçlsadçjlksdajlk" />
	  	      	<img src="images/banners/teste2.jpg" title="alskjçadslkadsçlkadsçlkjasdjasdkljksadjkçlsadçjlksdajlk" />


	      </div>
                 <div class="clear"></div>
	      </div>
   		</div>
   </div>
<!-------------------------------------------------/ Header---------------------------------------------------------->
  <div class="main">
      <div class="content">
<!-------------------------------------------------Novidades---------------------------------------------------------->
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Latest Products</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                </div>
			               <span>
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>
				   </div>
    	       </div>
<!-------------------------------------------------/Novidades---------------------------------------------------------->

    	  <div class="content_bottom">
    	    <div class="wrap">
<!-------------------------------------------------Categorias---------------------------------------------------------->
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>Browse All Categories</h3>
							      <li><a href="#">Appliances</a></li>
							      <li><a href="#">Sports Equipments</a></li>
							      <li><a href="#">Computers & Electronics</a></li>
							      <li><a href="#">Office supplies</a></li>
							      <li><a href="#">Health & Beauty</a></li>
							       <li><a href="#">Home & Garden</a></li>
							       <li><a href="#">Apparel</a></li>
							       <li><a href="#">Toys & Games</a></li>
							       <li><a href="#">Automotive</a></li>
						  	 </ul>
						</div>
						<div class="buters-guide">
						<h3>Buyers Guide</h3>
						<p><span>We want you to be happy with your purchase.</span></p>
						<p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
					  </div>
					  <div class="add-banner">
					  	<img src="images/camera.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Electronics</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
					    <div class="add-banner add-banner2">
					  	<img src="images/computer.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Computers</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
    	    	</div>
<!-------------------------------------------------/Categorias---------------------------------------------------------->

<!-------------------------------------------------Recentes---------------------------------------------------------->
                <div class="content-bottom-right">
    	    	<h3>Browse All Categories</h3>
	            <div class="section group">
				  <div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					  <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					 <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
			   </div>
			   <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					  <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					 <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
			   </div>
			   <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					  <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					 <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
			    </div>
                    <div class="product-articles">
			      <h3>Browse All Categories</h3>
			      <ul>
			      	<li>
			      <div class="article">
			      	<p><span>Aenean vitae massa dolor</span></p>
			      	<p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      <li>
			       <div class="article">
			      	<p><span>Phasellus sollicitudin consectetur</span></p>
			      	<p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      </ul>
			    </div>
		      </div>
<!-------------------------------------------------/Recentes---------------------------------------------------------->
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>
   <div class="footer">
   	  <div class="wrap">
			 <div class="copy_right">
				<p><i>Designed By: </i>Neon Tecnologia </p>
		   </div>
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="#">Termos de Uso</a> : </li>
		   		<li><a href="#">Politica de Privacidade</a> : </li>
		   		<li><a href="contact.html">Contato</a>  </li>

		   	</ul>
		   </div>
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
            $('#header_bottom').nivoSlider({
                effect: 'random',
                prevText: '',
                nextText: '' ,
                pauseTime: 5000,
                animSpeed: 200
            });


		});
	</script>
    <a href="#" id="toTop"> </a>
    <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>


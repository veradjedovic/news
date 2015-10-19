<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>The News Reporter a Magazine Category Flat Bootstarp Responsive Website Template| Singlepage :: w3layouts</title>
<link href="./view/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="./view/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="./view/js/jquery.min.js"></script>
<script type="text/javascript" src="./view/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="index.html">
							<h6>the</h6>
							<h1>News <span>Reporter</span></h1>
						</a>
					</div>
				</div>
					<div class="social-icons">
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="rss"></i></a></li>
						<li><div class="facebook"><div id="fb-root"></div>
							
							<div id="fb-root"></div>
							</div></li>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
	   						
	   						<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
							

					</div>
					<div class="clearfix"></div>
				<div class="header-right">
					<div class="top-menu">
						<ul>        
							<li><a href="index.html">Home</a></li> |  
							<li><a href="about.html">About Us</a></li> |   
							<li><a href="contact.html">Contact Us</a></li>  |   
							<li><a id="modal_trigger" href="#modal" class="btn1">Login</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form>
					<label>Email / Username</label>
					<input type="text" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form>
					<label>Full Name</label>
					<input type="text" />
					<br />

					<label>Email Address</label>
					<input type="email" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">Send me occasional email updates</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script></li> |   
							<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Subscribe</a></li>
						</ul>
					</div>
					<!---pop-up-box---->  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<ul>         
					<?php 
				/************************************************************************************************/
					$allCategories = MainCats::getAll("WHERE main_cat_status = 1");
						foreach($allCategories as $category){?>
							<li><a href="index.php?controller=Home&method=<?php echo $category->main_cat_name; ?>"><?php echo $category->main_cat_name; ?></a></li>
					<?php } 
				/**************************************************************************************************/
						?>
				</ul>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="blog-main-content">		
				<div class="col-md-9 total-news">
					
					[VIEW]
	
	<ul class="comment-list">
		  		   <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
		  		   <li><img src="./view/images/avatar.png" class="img-responsive" alt="">
		  		   <div class="desc">
		  		   <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
		  		   </div>
		  		   <div class="clearfix"></div>
		  		   </li>
		  	  </ul>
				 <div class="content-form">
					 <h3>Leave a comment</h3>
					<form>
						<input type="text" placeholder="Name" required/>
						<input type="text" placeholder="Email" required/>
						<input type="text" placeholder="Phone" required/>
						<textarea placeholder="Message"></textarea>
						<input type="submit" value="SEND"/>
				   </form>
						 </div>
			</div>	
				
				<div class="col-md-3 side-bar">
					<div class="l_g_r">
									<div class="posts">
										<h4>Recent posts</h4>
										<h6><a href="#">Aliquam tincidunt mauris</a></h6>
										<h6><a href="#">Vestibulum auctor lipsum</a></h6>
										<h6><a href="#">Nunc dignissim risus</a></h6>
										<h6><a href="#">Cras ornare tristiqu</a></h6>
									</div>
									<div class="recent-comments">
										<h4>Recent Comments</h4>
										<h6><a href="#">Amada Doe <span>on</span> Hello World!</a></h6>
										<h6><a href="#">Peter Doe <span>on</span> Photography</a></h6>
										<h6><a href="#">Steve Roberts <span>on</span> HTML5/CSS3</a></h6>
										<h6><a href="#">Doe Peter<span>on</span> Photography</a></h6>
									</div>
									<div class="archievs">
										<h4>Archives</h4>
										<h6><a href="#">October 2014</a></h6>
										<h6><a href="#">September 2014</a></h6>
										<h6><a href="#">August 2014</a></h6>
										<h6><a href="#">July 2014</a></h6>
									</div>
								<div class="categories">
										<h4>Categories</h4>
										<h6><a href="#">Vivamus vestibulum nulla</a></h6>
										<h6><a href="#">Integer vitae libero ac risus e</a></h6>
										<h6><a href="#">Vestibulum commo</a></h6>
										<h6><a href="#">Cras iaculis ultricies</a></h6>
								</div>						

								</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer text-center">
				<div class="bottom-menu">
					<ul>                 
						<li><a href="index.html">World  News</a></li> |
						<li><a href="sports.html">Sports</a></li> |
						<li><a href="tech.html">Techology</a></li> |
						<li><a href="business.html">Business</a></li> |
						<li><a href="movies.html">Movies</a></li> |
						<li><a href="movies.html">Entertainment</a></li> |
						<li><a href="books.html">Books</a></li> |
						<li><a href="movies.html">Culture</a></li> |
						<li><a href="classifieds.html">Classifieds</a></li> |
						<li><a href="blog.html">Blogs</a></li>							
					</ul>
				</div>
				<div class="copyright text-center">
					<p>The News Reporter &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
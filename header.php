<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Capacitacion_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'capacitacion-wordpress' ); ?></a>

	<!--================= Back offcanvas Start Here =================--> 
	<div class="back-offcanvas"></div>
	<div class="back-canvas">
		<div class="close-btn">
			<a id="nav-close" class="nav-close">
				<div class="back-close">
					<span class="line1"></span>
					<span class="line2"></span>
				</div>
			</a>
		</div>
		<div class="offback-logo">
			<a href="index.html" class="logo-text"> <img src="assets/images/logo.png" alt="logo"></a>
		</div>
		<div class="offcanvas-text">
			<p>Education every new parents knows the feeling nothing more than for everyone to get at some sleep.But at least you’ve got Google. start building your first prototype today!</p>
		</div>

		<div class="back-title back-small-title">
			<h2>Get in Touch</h2>
		</div> 
		<div class="canvas-contact">
			<div class="address-area">
				<div class="address-list">
					<div class="info-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
					</div>
					<div class="info-content">
						<h4 class="title">Address</h4>
						<em>06 Mymen KR. New York City</em>
					</div>
				</div>
				<div class="address-list">
					<div class="info-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
					</div>
					<div class="info-content">
						<h4 class="title">Email</h4>
						<em><a href="mailto:backtheme@gmail.com">backtheme@gmail.com</a></em>
					</div>
					</div>
				<div class="address-list">
					<div class="info-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					</div>
					<div class="info-content">
						<h4 class="title">Phone</h4>
						<em>+02596 5874 59857</em>
					</div>
				</div>
			</div>
			<ul class="social-links">                                    
				<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<!--================= Back offcanvas End Here =================-->

	<!--================= Header Section Start Here =================-->
	<header id="back-header" class="back-header site-header">
		<!--================= Topbar Section Start Here =================-->
		<div class="toolbar-area hidden-md">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="toolbar-text">
							<div class="latest-news-title">LATEST NEWS</div>
							<div class="latest-news">
								<div class="back-topbar-slider owl-carousel">
									<div>Because you deserve nothing but the truth</div>
									<div>Pandemic impact mental health global view</div>
									<div>Drunk driving law by on country and arrest</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="toolbar-content">
							<div class="toolbar-sl-share">
								<ul>
									<li class="back-follow">Follow Us</li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--================= Topbar Section End Here =================-->
		<div class="menu-part">
			<div class="container">
				<!--================= Back Menu Start Here =================-->
				<div class="back-main-menu">
					<nav>
						<!--================= Menu Toggle btn =================-->
						<div class="menu-toggle">
							<div class="logo site-branding"><a href="index.html" class="logo-text"> <img class="back-logo-dark" src="assets/images/logo.png" alt="logo"> <img class="back-logo-light" src="assets/images/light-logo.png" alt="logo"> </a></div>

							<div id="site-navigation" class="searchbar-part back-search-mobile main-navigation">
								<ul>
									<li class="back-dark-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light1"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark1"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></li>
									<li class="back_search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></li>
									<li class="back-sign"><a href="login.html">Sign In</a></li>
									<li id="nav-expanders" class="nav-expander bar">
										<span class="back-hum1"></span>
										<span class="back-hum2"></span>
										<span class="back-hum3"></span>
									</li>
								</ul>                                 
								<form class="search-form">
									<input type="text" class="form-input" placeholder="Search Here">
									<button type="submit" class="form-button">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
									</button>
								</form>
							</div>

							<button type="button" id="menu-btn">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!--================= Menu Structure =================--> 
						<div class="back-inner-menus">
							<?php
							/**
							 * wp_nav_menu() Displays a navigation menu.
							 * 
							 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
							 */
							$args = array(
								//'menu'				=> "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
								'menu_class'		=> "back-menus back-sub-shadow", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
								'menu_id'			=> "backmenu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
								'container'			=> "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
								//'container_class'	=> "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
								//'container_id'		=> "", // (string) The ID that is applied to the container.
								//'fallback_cb'		=> "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
								//'before'			=> "", // (string) Text before the link markup.
								//'after'				=> "", // (string) Text after the link markup.
								//'link_before'		=> "", // (string) Text before the link text.
								//'link_after'		=> "", // (string) Text after the link text.
								//'echo'				=> "", // (bool) Whether to echo the menu or return it. Default true.
								//'depth'				=> "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
								//'walker'			=> "", // (object) Instance of a custom walker class.
								'theme_location'	=> "primary-header-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
								//'items_wrap'		=> "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
								//'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
							);
							wp_nav_menu( $args );
							?>
							
							<div class="searchbar-part back-search-desktop"> 
								<ul>
									<li class="back-dark-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></li>
									<li class="back_search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></li>
									<li class="back-sign"><a href="login.html">Sign In</a></li>
									<li id="nav-expander" class="nav-expander bar">
										<span class="back-hum1"></span>
										<span class="back-hum2"></span>
										<span class="back-hum3"></span>
									</li>
								</ul>                                  
								<form class="search-form">
									<input type="text" class="form-input" placeholder="Search Here">
									<button type="submit" class="form-button">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
									</button>
								</form>
							</div>                                
						</div>                            
					</nav>
				</div>
				<!--=================  Back Menu End Here  =================-->
			</div>
		</div>
	</header>
	<!--================= Header Section End Here =================-->

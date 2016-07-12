<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package polo_s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<!-----
	ENQUEUE THESE
	
	<!-- Bootstrap Core CSS 
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS  
	<link href="css/simple-sidebar.css" rel="stylesheet">

	<!---- Site Style 
	<link href="css/style.css" rel="stylesheet">
	<!---- Sliderfy Style
	<link href="bower_components/sliderify/dist/css/sliderify.css" rel="stylesheet">
	
------>


<body <?php body_class(); ?>>

<div id="wrapper" class="site">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Polo Web
                    </a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Blogs</a>
                </li>               
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper content" class="site-content">
        		<!-- <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'polo_s' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<?php else : ?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		 <div class="header">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-4 col-xs-6 logo">
                                            <img src="<?php bloginfo('template_url'); ?>/images/site-logo.png" class="logo-img" alt="">
                                            <div class="logo-left-block col-md-7">
                                                <img src="<?php bloginfo('template_url'); ?>/images/logo-text.png"  class="logo-text-png" alt="">
                                                <span>An Awsome Website</span>
                                            </div> 
                                                                         
                                        </div>
                                        <div class="col-md-8 pull-rights">
                                            <div class="menu">
                                                <ul>
                                                    <li class="menu-item">
                                                    <span class="menu-list-title">
                                                        Home
                                                    </span>  
                                                     <span class="menu-item-desc">Back to home</span>
                                                    </li>
                                                    
                                                    <li class="menu-item">
                                                      <span class="menu-list-title">  
                                                       Products                                        
                                                      </span>  
                                                         <span class="menu-item-desc">What we have for you</span>    
                                                    </li>
                                                    <li class="menu-item">
                                                      <span class="menu-list-title">  
                                                      Services
                                                      </span>  
                                                     <span class="menu-item-desc">Things we do</span>
                                                    </li>
                                                    
                                                    <li class="menu-item">
                                                      <span class="menu-list-title">  Blog</span>  
                                                      <span class="menu-item-desc">Follow our updates</span>
                                                    </li>
                                                
                                                    <li class="menu-item">
                                                       <span class="menu-list-title"> Contact</span>  
                                                       <span class="menu-item-desc">Ways to reach us</span>
                                                    </li>
                                                   
                                                </ul>
                                            </div>                            
                                        </div>
                                    </div>
                                    </div>
                                </div>
                         </div>
	</header><!-- #masthead -->

        
        
        
           




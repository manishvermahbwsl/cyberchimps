<?php
/**
 * FIXME: Edit Title Content
 *
 * FIXME: Edit Description Content
 *
 * Please do not edit this file. This file is part of the Response core framework and all modifications
 * should be made in a child theme.
 * FIXME: POINT USERS TO DOWNLOAD OUR STARTER CHILD THEME AND DOCUMENTATION
 *
 * @category Response
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>

<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	
	<title><?php wp_title(''); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action('response_before_wrapper'); ?>

<div id="wrapper" class="container-fluid">	
	
	<?php do_action('response_masthead_content'); ?>

	<?php do_action('response_before_header_container'); ?>
	
	<header class="row-fluid">
		
		<?php do_action('response_before_header'); ?>
		
		<div class="span8">
			<hgroup>
				<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
		</div><!-- .span8 -->
		<div class="span4">
			<?php // TODO: Create some type of hook to allow elements to be placed here ?>
		</div><!-- .span4 -->
		
		<?php do_action('response_after_header'); ?>
		
	</header><!-- .row-fluid -->
	
	<?php do_action('response_after_header_container'); ?>
	
	<?php do_action('response_before_navigation'); ?>
	
	<div id="navigation" class="container-fluid">
		<nav class="main-navigation row-fluid">
    	<div class="navbar">
  			<div class="navbar-inner">
    			<div class="container">
						<?php wp_nav_menu( array( 'theme_location'  => 'primary', 'menu_class' => 'nav', 'walker' => new bootstrap_walker(), 'fallback_cb' => 'HS_fallback_menu' ) ); ?>
          </div>
        </div>
      </div>
		</nav><!-- .main-navigation .row-fluid -->
	</div><!-- #navigation .container-fluid -->

	<?php do_action('response_after_navigation'); ?>
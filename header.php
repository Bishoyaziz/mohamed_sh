<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mohamed_sh
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
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
		<div class="sidebar">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',	
					'items_wrap'     => '<ul><li></li></ul>',
					'link_before' 	 => '<img src="/wp-content/themes/mohamed_sh/assets/images/icons/Asset 2-8.png" />'					
				) );
				wp_nav_menu($args); 
				$settings = array(
					'link_before' 	 => '<img src="/wp-content/themes/mohamed_sh/assets/images/icons/Asset 2-8.png" />'
			    );
			   
			   wp_nav_menu( $settings );
			?>
        </div>
				
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
</div>
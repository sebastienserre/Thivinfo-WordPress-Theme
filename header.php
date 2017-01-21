<!Doctype html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class() ?> itemscope="itemscope" itemtype="http://schema.org/WebPage" >
		<header id="masthead" class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
			<?php echo thfo_header_logo() ?>
            <?php do_action('header_right'); ?>

		</header>
        <div class="clear"></div>
		<nav id="site-navigation" class="main-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary' ) ); ?>
		</nav>


		<div class="clear"></div>

        <main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
				<?php get_sidebar('left');
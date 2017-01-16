<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
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

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="content" class="site-content wrapper">
        <header id="masthead" class="site-header" role="banner">
            <div class="wrapper">
                <div class="row-1">
	                <?php $description  = get_field("header_copy","option");?>
                    <div class="logo column-1">
                        <a href="<?php bloginfo('url');?>">
                            <img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="logo">
                        </a>
                    </div><!--.logo .column-1-->
                    <?php if($description):?>
                        <div class="column-2 copy">
                            <?php echo $description;?>
                        </div><!--.column-2-->
                    <?php endif;?>
                </div><!--.row-1-->
                <nav id="site-navigation" class="main-navigation row-2" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'acstarter' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav><!-- #site-navigation -->
            </div><!-- wrapper -->
        </header><!-- #masthead -->

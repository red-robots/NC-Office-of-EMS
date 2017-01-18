<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-tools template-two-column"); ?>>
    <div class="column-1">
	    <?php wp_nav_menu( array( 'theme_location' => 'tools' ) ); ?>
    </div><!--.column-1-->
    <div class="column-2">
        <h1><?php the_title();?></h1>
        <?php if(get_the_content()):
            the_content();
        endif;?>
    </div><!--.column-2-->
</article><!-- #post-## -->

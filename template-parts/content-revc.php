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
        <div class="row-1">
            <h2><?php the_title();?></h2>
	        <?php wp_nav_menu( array( 'theme_location' => 'revc' ) ); ?>
        </div>
        <div class="row-2">
            <h2>Tools</h2>
            <?php wp_nav_menu( array( 'theme_location' => 'tools' ) ); ?>
        </div>
    </div><!--.column-1-->
    <div class="column-2">
        <header>
            <h1><?php the_title();?></h1>
        </header>
        <?php if(get_the_content()):?>
            <div class="copy">
                <?php the_content();?>
            </div>
        <?php endif;?>
    </div><!--.column-2-->
</article><!-- #post-## -->

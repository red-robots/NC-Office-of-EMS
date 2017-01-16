<?php
/**
 * Template part for displaying page content in index.php.
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <?php get_template_part('template-parts/slides','index');?>
</article><!-- #post-## -->

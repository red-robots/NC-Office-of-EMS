<?php
/**
 * Template part for displaying page content in page-leadership.php.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-leadership"); ?>>
	<header>
        <h1><?php the_title();?></h1>
    </header>
	<?php if(get_the_content()):?>
        <div class="copy">
			<?php the_content();?>
        </div>
	<?php endif;?>
</article><!-- #post-## -->

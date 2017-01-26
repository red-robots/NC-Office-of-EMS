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
    <?php $args = array(
        'post_type'=>'leadership',
        'posts_per_page'=>-1,
        'order_by'=>'menu_order',
    );
    $query = new WP_Query($args);
    if($query->has_posts()):?>
        <div class="wrapper>">
            <?php while($query->have_posts()):?>
                <div class="leader">

                </div><!--.leader-->
            <?php endwhile;?>
        </div><!--.wrapper-->
    <?php wp_reset_postdata();
    endif;?>
</article><!-- #post-## -->

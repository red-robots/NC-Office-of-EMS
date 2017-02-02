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
    <?php
    $phone_text = get_field("phone_text",13);
    $email_text = get_field("email_text",13);
    $args = array(
        'post_type'=>'leadership',
        'posts_per_page'=>-1,
        'order_by'=>'menu_order',
        'order'=>'ASC',
    );
    $query = new WP_Query($args);
    if($query->have_posts()):?>
        <div class="wrapper">
            <?php while($query->have_posts()): $query->the_post();?>
                <?php $image = get_field("picture");
	            $copy = get_field("bio");
	            $title = get_field("title");
	            $phone = get_field("phone");
	            $email = get_field("email");?>
                <div class="leader clear-bottom">
	                <?php if($image):?>
                        <div class="column-1">
                            <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                        </div><!--.column-1-->
                        <div class="column-2 info">
                        <?php else: ?>
                            <div class="row-1 info">
                        <?php endif;?>
                            <h2><?php the_title();?></h2>
                            <?php if($title):?>
                                <div class="title">
                                    <?php echo $title;?>
                                </div><!--.title-->
                            <?php endif;?>
                            <?php if($copy):?>
                                <div class="copy">
                                    <?php echo $copy;?>
                                </div><!--.copy-->
                            <?php endif;?>
                            <?php if($email):?>
                                <div class="email">
                                    <?php echo $email_text.' <a href="mailto:'.$email.'">'.$email.'</a>';?>
                                </div><!--.email-->
                            <?php endif;?>
                            <?php if($phone):?>
                                <div class="phone">
                                    <?php echo $phone_text.' '.$phone;?>
                                </div><!--.phone-->
                            <?php endif;?>
                        </div><!--.column-2 || .row-1-->
                </div><!--.leader-->
            <?php endwhile;?>
        </div><!--.wrapper-->
        <?php wp_reset_postdata();
    endif;?>
</article><!-- #post-## -->

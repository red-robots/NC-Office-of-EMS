<div id="home-banner-container">
	<?php
	$querySlides = array(
		'post_type' => 'slides',
        'posts_per_page'=>-1,
	);
	// The Query
	$the_query = new WP_Query( $querySlides );
	?>
	<?php
	// The Loop
	if ( $the_query->have_posts()) : ?>
		<div class="flexslider">
			<ul class="slides">
				<?php while ( $the_query->have_posts() ) : ?>
					<?php $the_query->the_post(); ?>
					<li>
						<?php
                        /*If there is to be a link to the slide
                          lets find out if it's an external link
                          or a pdf */
						if(get_field('optional_link')!="") {
							$link = get_field('optional_link');
						} elseif(get_field('optional_pdf')!="") {
							$link = get_field('optional_pdf');
						} else {
							$link = "";
						}

						?>



						<?php if($link !=="") : ?>
						<a href="<?php echo $link; ?>" target="_blank">
							<?php endif;  // end if has link ?>
							<div id="home-banner-pic" class="js-blocks">

								<?php if(get_field('photo')!="") { ?>
									<img src="<?php the_field('photo'); ?>" />
								<?php } ?>
							</div><!-- home banner pic -->

							<div id="home-banner-right"  class="js-blocks">
								<h2><?php the_field('header_text'); ?></h2>
								<div class="subheader"><?php the_field('sub_header_text'); ?></div>
								<div class="banner-text">
									<?php the_field('slide_text'); ?>
									<?php  if($link !=="") : ?>
										<br>

										<?php the_field('optional_link_text'); ?>

									<?php endif; // end if has link  ?>
								</div><!-- banner text -->
							</div><!-- home banner right -->
							<?php  if($link !=="") : ?>
						</a>
					<?php endif; // end if has link ?>
					</li>
				<?php endwhile; ?>
			</ul><!-- slides -->
		</div><!-- .flexslider -->
	<?php endif; // end loop ?>
	<?php wp_reset_postdata(); ?>
</div><!-- home banner container -->


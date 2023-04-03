<div class="homepage_vacancies review">
  <div class="row csk">
		<?php 
			$review = new WP_Query( array(
				'post_type' => 'testimonials',
				'posts_per_page' => 3,
				'order' => 'DESC',
				'orderby' => 'date',
				)
			);
      
			if ($review->have_posts()) {
				while ($review->have_posts()) {
					$review->the_post();

			?>		
				<div class="col-md-6 col-lg-4 col-xs-12 col-review">
				  <div class="csk_blurb">
            <img class="quote_icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/quote.png'?>" alt="<?php the_title();?>">
            <div class="blurb_top">
                <h5>
                  <?php the_title();?>
                </h5>
                <img class="rating" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/five_star.png'?>" alt="<?php the_title();?>">

            </div>
            <div class="blurb_bottom">
                <?php the_excerpt();?>
            </div>
				  </div>
				</div>
			<?php
				}
			} else {
				echo 'no posts found';
			}
			  wp_reset_postdata();
    ?>	
  </div>
</div>
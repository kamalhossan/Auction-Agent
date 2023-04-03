<div class="csk_blogs_section">
        <div class="row csk">
        <?php
              // adding features categorys post query here
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              query_posts('post_type=post&post_status=publish&posts_per_page=3&order=DESC&paged='. $paged);
              if(have_posts()) :
                while (have_posts()) : the_post();
               
              ?>
                <div class="col-md-6 col-lg-4 col-xs-12 col_blogs">
                  <div class="csk_blogs">
                  <?php echo the_post_thumbnail();?>  
                  <h2 class="csk_post_title">
                    <a href="<?php echo the_permalink(); ?>"> <?php the_title(); ?></a>
                  </h2>
                    <div class="csk_excerpt">
                      <p><?php the_excerpt();?></p>
                    </div>
                    <div class="csk_post_meta">
                      <div class="csk_date">
                        <?php echo the_time('M j, Y'); ?>
                      </div>
                      <div class="csk_permalink">
                        <a class="read_more cs_btn" href="<?php echo the_permalink(); ?>">Read More &#8594;</a>
                      </div>
                    </div>
                  </div>
                </div>    
      <?php
      endwhile;
      endif;
      wp_reset_query();
     ?>
</div>
<?php
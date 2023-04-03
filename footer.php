</main><!-- .main-wrap start in header.php-->

<?php 
// if( ! houzez_is_half_map() && ! houzez_is_splash() ) {
// 	if(houzez_is_dashboard()) { 
// 		get_template_part('template-parts/dashboard/dashboard-footer'); 
// 	} else {
		
// 		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
// 			get_template_part('template-parts/footer/main'); 
// 		}

// 		get_template_part('template-parts/listing/compare-properties'); 
// 	}
// }

// if( houzez_is_half_map() ) {
// 	get_template_part('template-parts/listing/compare-properties');
// 	get_template_part('template-parts/listing/partials/mobile-map-switch');
// }

// if( wp_is_mobile() ) {
// 	get_template_part('template-parts/search/mobile-search'); 
// }

// if( !houzez_is_login_page() ) { 
// 	get_template_part('template-parts/login-register/modal-login-register'); 
// }
// get_template_part('template-parts/login-register/modal-reset-password-form'); 

// get_template_part('template-parts/listing/listing-lightbox'); 

// if(is_singular('property')) {
// 	get_template_part( 'property-details/mobile-property-contact');
// 	get_template_part( 'property-details/lightbox');
// }

// if( ( is_singular('houzez_agency') && houzez_option('agency_form_agency_page', 1) ) || ( is_singular('houzez_agent') && houzez_option('agent_form_agent_page', 1) ) ) {
//     get_template_part('template-parts/realtors/contact', 'form'); 
// }

// if(houzez_is_dashboard()) { 
// 	if( isset($_GET['hpage']) && $_GET['hpage'] == 'leads' ) {
// 		get_template_part('template-parts/dashboard/board/leads/new-lead-panel');

// 	} elseif( isset($_GET['hpage']) && $_GET['hpage'] == 'deals' ) {
// 		get_template_part('template-parts/dashboard/board/deals/new-deal-panel');

// 	} elseif( (isset($_GET['hpage']) && $_GET['hpage'] == 'enquiries') || (isset($_GET['hpage']) && ($_GET['hpage'] == 'lead-detail' && $_GET['tab']== 'enquires'))  ) {
// 		get_template_part('template-parts/dashboard/board/enquires/add-new-enquiry');
// 	}
// }
$custom_logo = houzez_option( 'custom_logo', false, 'url' );
?>
<footer class="footer-wrap footer-wrap-custom">
	<div class="container">
		<div class="row footer_row_csk">
			<div class="footer_col footer_col_one">
					<div class="footer_logo_img">
						<?php if( !empty( $custom_logo ) ) { ?>
						<img class="footer_logo" src="<?php echo esc_url( $custom_logo ); ?>" alt="logo">
					<?php } ?>
					</div>
					<div class="footer_newsletter inner_content">
							<?php 
								echo do_shortcode( '[forminator_form id="11411"]');
							?>
					</div>
			</div>
			<div class="footer_col footer_col_two">
				<h4 class="footer_title">Buying</h4>
				<div class="inner_content">
						<?php 
							if ( has_nav_menu( 'Buying_menu' ) ) :
								wp_nav_menu( array (
									'theme_location' => 'Buying_menu',
									'container' => '',
									'container_class' => '',
									'menu_class' => 'buying-nav-item ',
									'menu_id' => 'custom-nav',
									'depth' => 4,
									'walker' => new houzez_nav_walker()
								));

							endif;
						?>
				</div>
			</div>
			<div class="footer_col footer_col_three">
				<h4 class="footer_title">Quick Links</h4>
				<div class="inner_content">
						<?php 
							if ( has_nav_menu( 'Quick_links' ) ) :
								wp_nav_menu( array (
									'theme_location' => 'Quick_links',
									'container' => '',
									'container_class' => '',
									'menu_class' => 'quick-nav-item ',
									'menu_id' => 'custom-nav',
									'depth' => 4,
									'walker' => new houzez_nav_walker()
								));

							endif;
						?>
				</div>
			</div>
			<div class="footer_col footer_col_four">
				<h4 class="footer_title">Contact Us</h4>
				<div class="inner_content">
					<p>If you have a question feel free to contact our property team who will be happy to assist you with your query.</p>

					<div class="icon_list">
						<div class="content">
						<i aria-hidden="true" class="fas fa-map-marker-alt"></i>	2 Mason Street, Bury, Lancashire, BL9 0RH
						</div>
					</div>
					<div class="icon_list">
						<div class="content">
						<i aria-hidden="true" class="fas fa-phone-alt"></i>Call us <a href="tel:0161 791 3099">0161 791 3099</a>
						</div>
					</div>
					<div class="icon_list">
						<div class="content">
							<i aria-hidden="true" class="far fa-envelope"></i> <a href="mailto:info@auctionagent.co.uk">info@auctionagent.co.uk</a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="row footer_bottom">
			<div class="footer_bottom_one">
				<div class="copywrite">
					<p>Copyright © 2023 Auction Agent, All Rights Reserved | Designed by <a target="_blank" href="promedia66.co.uk">ProMedia66</a></p>
				</div>
			</div>
			<div class="footer_bottom_two">
					<div class="footer_social_list">
							<div class="icon">
								<a target="_blank" href="https://www.facebook.com/auctionagentpropertyauction/"><i class="fab fa-facebook"></i></a>
							</div>
							<div class="icon">
								<a target="_blank" href="https://twitter.com/Auction_Agents"><i class="fab fa-twitter"></i></a>
							</div>
							<div class="icon">
								<a target="_blank" href=""><i class="fab fa-linkedin"></i></a>
							</div>
							<div class="icon">
								<a target="_blank" href=""><i class="fab fa-instagram"></i></a>
							</div>
					</div>
			</div>
		</div>
	</div>
</footer>

<?php

wp_footer(); ?>

</body>
</html>

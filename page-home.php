<?php get_header();  ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row"><?php motoPressSlider( "home-slider" ) ?></div>
				</div>
			</section>
			<section class="services"> 
				<div class="container">
					<h1><?php _e( 'Our Services', 'learnwp' ); ?></h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="services-item">

								<?php 
								if(is_active_sidebar( 'services-1' )){
									dynamic_sidebar( 'services-1' );
								} 
								?>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								
								<?php 
								if(is_active_sidebar( 'services-2' )){
									dynamic_sidebar( 'services-2' );
								} 
								?>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								
								<?php 
								if(is_active_sidebar( 'services-3' )){
									dynamic_sidebar( 'services-3' );
								} 
								?>

							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-4 h-100">

							<?php
							 // Require a file called sidebar-home.php
							 get_sidebar('home'); 
							 ?>
							 	
						</aside>
						<div class="news col-md-8">
							<div class="container">
								<h1><?php _e( 'Latest News', 'learnwp' ); ?></h1>
								<div class="row">
									<?php  

									// First Loop
									$featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=9,11' );

									if( $featured->have_posts() ):
										while( $featured->have_posts() ): 
										$featured->the_post();
									?>

									<div class="col-12">
										<?php get_template_part( 'template-parts/content', 'featured' ); ?>
									</div>
  
									<?php
										endwhile;
										wp_reset_postdata();
									endif;


									// Second Loop
									$args = array(
										'post_type' => 'post',
										'posts_per_page' => 2,
										'category__not_in' => array(8),
										'category__in' => array(9,21),
										'offset' => 2									);

									$secondary = new WP_Query($args);

									if( $secondary->have_posts() ):
										while( $secondary->have_posts() ): 
										$secondary->the_post();
									?>

									<div class="col-sm-6">
										<?php get_template_part( 'template-parts/content', 'secondary' ); ?>
									</div>
  
									<?php
										endwhile;
										wp_reset_postdata();
									endif;

									 ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="map">
				<iframe 
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0850497893207!2d112.62499331421243!3d-7.990153581897637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSekolah%20Menengah%20Kejuruan%20Negeri%204%20Malang!5e0!3m2!1sid!2sid!4v1617870577772!5m2!1sid!2sid" 
				width="100%" 
				height="300" 
				style="border:0;" 
				allowfullscreen="" 
				loading="lazy">
					
				</iframe>
			</section>
		</main>
	</div>
<?php get_footer(); ?>

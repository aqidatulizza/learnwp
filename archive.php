<?php get_header();  ?> 

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			
			<section class="middle-area">
				<div class="container">
					<div class="row">
	
						<div class="archive col-md-9">
							<?php 

							the_archive_title( '<h1 class="archive-title">', '</h1>' );
							the_archive_description();

							//if there are any posts.
							if( have_posts() ):
								//while have posts, show then to us.
								while( have_posts() ): the_post(); 

								// require the file which is at template-parts/content.php
								get_template_part( 'template-parts/content', 'archive' );

							 	endwhile; 
							 ?>

							 <div class="row">
							 	
							 	<div class="pages col-6 text-left">
							 		<?php previous_posts_link("<< Newer Posts"); ?>
							 	</div>
							 	<div class="pages col-6 text-right">
							 		<?php next_posts_link("Older Posts >>"); ?>
							 	</div>

							 </div>

							 <?php
							 else:
							 ?>

							  <p>Theré's nothing yet to be displayed</p>

							<?php endif; ?>
						</div>
						<aside class="sidebar col-md-3 h-100"><?php get_sidebar('blog'); ?></aside>
					</div>
				</div>
			</section> 
		</main>
	</div>
<?php get_footer(); ?>
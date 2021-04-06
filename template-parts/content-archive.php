 <article <?php post_class(); ?>> 
	<a href="<?php the_permalink(); ?>" style="text-decoration: none;"><h2><?php the_title(); ?></h2></a>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 250, 250 ) ); ?></a>

	<div class="meta-info">
		<p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
		<p>Categorie: <?php the_category( ' ' ); ?></p>
		<p><?php the_tags( 'Tags: ', ', '); ?></p>
	</div>
	<p><?php the_excerpt(); ?></p>
</article>
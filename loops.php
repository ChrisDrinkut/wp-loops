
*
* This snippet has a loop followed by two query loops (if that's what they're called)
*

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        
    <?php endwhile; ?>
<?php endif; ?>

*
* Life is the category name - this will grab 4 posts from that category ;)
*
<hr>
<!-- Cat -->
<?php $catquery = new WP_Query( 'category_name=life&posts_per_page=4' ); ?>

	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
	
	<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<?php the_post_thumbnail( 'medium' ); the_excerpt(); ?>

	<?php endwhile; ?> 
<?php wp_reset_postdata(); ?>


*
* Music is the category name - this will grab 4 posts from that category ;)
*
<hr>
<!-- Cat -->
<?php $catquery = new WP_Query( 'category_name=music&posts_per_page=4' ); ?>

	<?php while($catquery->have_posts()) : $catquery->the_post(); 
	the_post_thumbnail( 'medium' );
	the_excerpt();
	?>
	
	<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>

	<?php endwhile; ?> 
<?php wp_reset_postdata(); ?>

<?php get_header(); ?>

<?php 
	
	$args = array(
		'post_type' => 'work'
	);
	
	$the_query = new WP_Query( $args );
?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<div class="project-link">
		<a href="<?php  the_permalink() ;?>"><img src="<?php the_field( 'thumbnail' );?>"></a>
		<h3><a href="<?php  the_permalink() ;?>"><?php the_title() ;?></a></h3>
		<h4><?php the_field( 'type' );?></h4>
	</div>
<?php endwhile; else: ?>
	
	<h3> There is no work here </h3>

<?php endif; ?>
	<div class="clear"></div>
<?php get_footer(); ?>
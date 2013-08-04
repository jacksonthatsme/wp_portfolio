<?php get_header(); ?>
	<div class="description-container">
		<div class="overview">
			<h2><?php the_title() ;?></h2>
			<h3><?php the_field( 'type' );?></h3>
			<h4><strong>Completed: </strong><?php the_field( 'year' );?></h4>
			<h4><?php the_field( 'client' );?></h4>
			<h4><?php the_field( 'art_director' );?></h4>
			<div class="visit-btn"><?php the_field( 'visit' );?></div>
		</div>
		<div class="description">
			<p><?php the_field( 'description' );?></p>
		</div>
		<div class="clear"></div>
		<div class="project-video">
			<p><?php the_field( 'video' ) ;?></p>
		</div>
		<div class="project-images">
			<?php the_field( 'images' ) ;?>
		</div>
	</div>

<?php get_footer(); ?>
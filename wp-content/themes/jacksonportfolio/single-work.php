<?php get_header(); ?>
	<div class="description-container">
		<div class="overview">
			<h2><?php the_title() ;?></h2>
			<h3><?php the_field( 'type' );?></h3>
			<h4><strong>Completed in: </strong><?php the_field( 'year' );?><br>
			<strong>Client: </strong><?php the_field( 'client' );?></h4>
			<h4><a href="<?php the_field( 'url' );?>" target="_blank">Visit this website</a></h4>
		</div>
		<div class="description">
			<p><?php the_field( 'description' );?></p>
		</div>
		<div class="clear"></div>
		<div class="project-images">
			<?php the_field( 'images' ) ;?>
		</div>
	</div>

<?php get_footer(); ?>
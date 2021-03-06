<?php
/*
Single Post Template: Web Project
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<?php get_header(); ?>
	<div class="description-container">
		<div class="overview">
			<h2><?php the_title() ;?></h2>
			<h3><?php the_field( 'type' );?></h3>
			<h4><strong>Client: </strong><?php the_field( 'client' );?></h4>
			<h4><a href="<?php the_field( 'url' );?>"><strong>Visit this website</strong></a></h4>
		</div>
		<div class="description">
			<p><?php the_field( 'description' );?></p>
		</div>
		<div class="clear"></div>
	</div>

<?php get_footer(); ?>
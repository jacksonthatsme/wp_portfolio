<?php get_header(); ?>
<div id="about">
	<section class="bio-img">
		<img src="http://placekitten.com/370/260">
	</section>
	<section class="bio">
		<h2><?php the_field( 'bio' );?></h2>
	</section>
	<section class="contact">
		<h5>Contact</h5>
		<p><?php the_field( 'contact' );?></p>
	</section>
	<section class="friends">
		<h5>Friends</h5>
		<p><?php the_field( 'friends' );?></p>
	</section>
	<section class="tweet">
		<h5>Latest Tweets</h5>
		<p><?php the_field( 'colophon' );?></p>
	</section>
	<section class="colophon">
		<h5>About this website</h5>
		<p><?php the_field( 'colophon' );?></p>
	</section>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>
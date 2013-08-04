<!DOCTYPE html>
<!-- HTML STARTS -->
<html>
<!-- HEAD STARTS -->
<head>
	<title><?php wp_title('-', true, 'right'); bloginfo( 'name' );?></title>
	<?php wp_head(); ?>
</head>
<!-- HEAD ENDS -->
	<!-- BODY STARTS -->
	<body>
		<!-- HEADER START -->
		<header>
			<!-- L-CONTAINER -->
			<div class="l-container">
				<a href="<?php bloginfo( 'url' );?>"><h1>Jackson Lynch</h1></a>
				<?php
					$args = array (
						'menu' => 'main-menu'
					);
					
					wp_nav_menu( $args );
				?>
			</div>
			<!-- L-CONTAINER -->
		</header>
		<!-- HEADER END -->
		<!-- L-CONTAINER START -->
		<div class="l-container">
			<!-- CONTENT-CONTAINER START-->
			<div class="content-container">
			
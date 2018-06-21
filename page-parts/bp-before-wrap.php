<div id="main-content">
	<?php if ( !bp_is_user() ) { 
		if (!is_page( 'register' )) {
		if (!bp_is_group_single()) :
	?>
		<header id="xb-<?php the_title(); ?>" class="single">
		<div class="hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3));">	 
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
		</header>
	<?php endif;
		}
	} ?>
	<div class="container bp-container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
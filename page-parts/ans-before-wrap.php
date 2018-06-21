<div id="main-content">
	
		<header id="xb-<?php the_title(); ?>" class="single">
		<div class="hero-section" style="background-image: linear-gradient(#1b1d35,#2b2c41);">	 
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if(is_question()) { ?>
			<div class="ap-question-meta clearfix">
				<?php ap_question_metas(); // xss ok. ?>
			</div>
			<?php
				/**
				 * Action hook triggered after single question meta.
				 *
				 * @since 4.1.5
				 */
				do_action( 'ap_after_question_meta' );
			} ?>
		</div>
		</header>
	<div class="container ans-container">
		<div id="content-area" class="clearfix">
			<div id="left-area" class="full-width">
<!-- GROUP SECTION
================================================ -->
<section id="buddypress">

	<div id="item-header" role="complementary" data-bp-item-id="<?php bp_group_id(); ?>" data-bp-item-component="groups" class="groups-header single-headers">

		<span class="hidethis"><?php the_title(); ?></span>
		<?php bp_nouveau_group_header_template_part(); ?>

	</div><!-- #item-header -->

	<div id="item-nav">
		<?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

				<?php bp_get_template_part( 'groups/single/parts/item-nav' ); ?>

			<?php endif; ?>
	</div><!-- #item-nav -->
</section><!--END GROUP SECTION-->
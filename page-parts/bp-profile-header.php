<!-- PROFILE SECTION
================================================ -->
<section id="buddypress">
<div id="item-header" role="complementary" data-bp-item-id="<?php echo esc_attr( bp_displayed_user_id() ); ?>" data-bp-item-component="members" class="users-header single-headers">

	<span class="hidethis"><?php the_title(); ?></span>
	<?php bp_nouveau_member_header_template_part(); ?>

</div><!-- #item-header -->

<div id="item-nav">
	<?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

		<?php bp_get_template_part( 'members/single/parts/item-nav' ); ?>

	<?php endif; ?>
</div><!-- #item-nav -->
</section><!--END PROFILE SECTION-->
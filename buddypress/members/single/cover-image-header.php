<?php
/**
 * BuddyPress - Users Cover Image Header
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<?php

/**
 * Fires before the display of a member's header.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_member_header' ); ?>

<div id="cover-image-container">
	<a id="header-cover-image" href="<?php bp_displayed_user_link(); ?>"></a>

	<div id="item-header-cover-image" class="item-header-cover-image--member">
		<div id="item-header-avatar">
			<a href="<?php bp_displayed_user_link(); ?>">

				<?php bp_displayed_user_avatar( 'type=full' ); ?>

			</a>
		</div><!-- #item-header-avatar -->
		
		<div class="item-header__actions">
			<div class="item-header__actions__item"></div>
			<div class="item-header__actions__item"></div>
			<div class="item-header__actions__item"></div>
			<div class="item-header__actions__item"></div>
		</div>

		<div id="item-header-content">

			<?php if ( bp_is_active( 'activity' ) && bp_activity_do_mentions() ) : ?>
				<h2 class="user-nicename">@<?php bp_displayed_user_mentionname(); ?></h2>
			<?php endif; ?>

			<div id="item-buttons"><?php

				/**
				 * Fires in the member header actions section.
				 *
				 * @since 1.2.6
				 */
				do_action( 'bp_member_header_actions' ); ?></div><!-- #item-buttons -->

			<span class="activity" data-livestamp="<?php bp_core_iso8601_date( bp_get_user_last_activity( bp_displayed_user_id() ) ); ?>"><?php bp_last_activity( bp_displayed_user_id() ); ?></span>

			<?php

			/**
			 * Fires before the display of the member's header meta.
			 *
			 * @since 1.2.0
			 */
			do_action( 'bp_before_member_header_meta' ); ?>

			<div id="item-meta">

				<?php

				 /**
				  * Fires after the group header actions section.
				  *
				  * If you'd like to show specific profile fields here use:
				  * bp_member_profile_data( 'field=About Me' ); -- Pass the name of the field
				  *
				  * @since 1.2.0
				  */
				 do_action( 'bp_profile_header_meta' );

				 ?>

			</div><!-- #item-meta -->

		</div><!-- #item-header-content -->

	</div><!-- #item-header-cover-image -->
</div><!-- #cover-image-container -->

<?php

/**
 * Fires after the display of a member's header.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_member_header' ); ?>

<div id="template-notices" role="alert" aria-atomic="true">
	<?php

	/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
	do_action( 'template_notices' ); ?>

</div>
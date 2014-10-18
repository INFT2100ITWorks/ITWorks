<?php
/**
 * Template Name: Map + Jobs
 *
 * @package Jobify
 * @since Jobify 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="homepage-content" role="main">
		

			<div class="site-content full">
				<div class="entry-content">
					<?php echo do_shortcode( '[jobs]' ); ?>
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
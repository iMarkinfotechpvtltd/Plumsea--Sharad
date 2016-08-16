<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary">
		

			<section class="error-404-page">
				<header class="page-header-error">
					<h1>404! <span>error</span></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

 

	</div><!-- .content-area -->

<div class="page-footer-404">
<?php get_footer(); ?>
</div>
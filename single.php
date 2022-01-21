<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package trungta
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) {
			the_post();?>

		<div class="about-header u-center-text u-margin-bottom-big">
            <h2 class="heading-subpage"><?php the_title() ?></h2>
            <p class="paragraph-subpage">TÄN ON VAIHDETTAVA</p>
        </div>

	</main><!-- #main -->

<?php }
get_footer();

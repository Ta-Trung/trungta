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
			the_post();
			pageBanner(array(
				'title' => null,
				'subtitle'	=> null,
				'photo'	=> null
			));
			?>
		
		<!--SINGLES POSTS-->
		<section class="section-single">
			<div class="row">
				<div class="col">
					<div class="metabox metabox--position-up metabox--with-home-link">
						<p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i> 
						Blogin etusivuun</a> <span class="metabox__main"><a><?php the_author_posts_link(); ?> kirjoitti <?php the_time('n.j.y') ?> ja postattu tähän kategoriin nimellä <?php echo get_the_category_list(', '); ?></a></span></p>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col section-single__content">
                    <?php the_content() ?>
                </div>
		</section>
	</main><!-- #main -->

<?php }
get_footer();

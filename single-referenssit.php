<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package trungta
 */

if(is_single()) {
    get_header('page');
   }
   else {
    get_header();
   }
    wp_head();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) {
			the_post();
			pageBanner(array(
                'title' => NULL,
                'subtitle' => NULL,
                'photo' => NULL
                ))
			?>
		
		<!--SINGLES POSTS-->
		<section class="section-single">
			<div class="row">
				<div class="col">
					<div class="metabox metabox--position-up metabox--with-home-link">
						<p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link( 'referenssit' ) ?>"><i class="fa fa-home" aria-hidden="true"></i> 
						Referenssin etusivuun</a> <span class="metabox__main"><a><?php the_title() ?></a></span></p>
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

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trungta
 */

get_header();
?>

	<main id="primary" class="site-main">

    <div class="about-header u-center-text u-margin-bottom-big">
            <h2 class="heading-subpage">Tervetuloa blogkirjoitukseeni</h2>
            <p class="paragraph-subpage">Täällä saat vinkkiä ja ohjeita nettisivun toteutuksessa</p>
    </div>

    <div class="blog-section">
        <div class="row">
            <div class="col-3-of-4">
                <?php 
                    while(have_posts()) {
                        the_post(); ?>
                        <div class="post-item">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php }
                ?>
            </div>
        </div>
    </div>

	</main><!-- #main -->

<?php
get_footer();

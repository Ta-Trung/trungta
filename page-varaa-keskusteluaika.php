<?php
/**
 * The template for displaying for Varausjärejestelmä only
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trungta
 */

if(is_page()) {
    get_header('page');
   }
   else {
    get_header();
   }
    wp_head();
?>

	<main>

		<?php
		while ( have_posts() ) {
			the_post();
            pageBanner(array(
                'title' => NULL,
                'subtitle' => NULL,
                'photo' => NULL
                ))
		    ?>
        
        <!--META-->
        <div class="section-metabox">
            <div class="row">
                    <?php
                    $theParent = wp_get_post_parent_id(get_the_ID());
                    if ($theParent) { ?>
                    <div class="col">
                        <div class="metabox metabox--position-up metabox--with-home-link">
                            <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
                        </div>
                    </div>
            </div>
        </div>
        <?php }
        ?>

        
        <!--IMAGES-->
        <!--
        <div class="about-card">
            <div class="about-card__img">
                <img src=<?php echo get_theme_file_uri( 'images/trung-ta-lapi-1.png' ) ?> alt="Trung Ta" class="about-card__aboutimg">
            </div>
            <div class="about-card__info">
                <h2 class="heading-tertiary">Trung Ta</h2>
				<p class="paragraph-subpage"class="paragraph-subpage">Web-Kehittäjä</p>
            </div>
        </div>
        -->

        <section class="section-about">
            <div class="row">
                <div class="col content">
                    <h1 class="heading-subpage-second"><?php the_title() ?></h1>
                    <?php the_content() ?>
                </div>
            
            <!--
                <div class="col-1-of-2">
                    <?php the_post_thumbnail('portrait'); ?>
                    <nav class="section-about__nav">
                        <ul class="section-about__list">
                            <li><a href="<?php echo site_url('/tieto-trungista') ?>" class="section-about__link">Tieto Trungista</a></li>
                            <li><a href="<?php echo site_url('/palvelut') ?>" class="section-about__link">Palvelut</a></li>
                            <li><a href="<?php echo site_url('/refrenssit') ?>" class="section-about__link">Refrenssit</a></li>
                            <li><a href="<?php echo site_url('/varaa-keskusteluaika') ?>" class="section-about__link">Varaa keskusteluaika</a></li>
                            <li><a href="<?php echo site_url('/blog') ?>" class="section-about__link">Hyödyt julkaisut</a></li>
                        </ul>
                    </nav>
                </div>
            -->
            </div>
        </section>

	</main><!-- #main -->

<?php }
get_footer();

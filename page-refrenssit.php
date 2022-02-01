<?php
/**
 * The template for displaying all pages
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

get_header();
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

        <!--REFENSSIT-->
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exciting tours for adventurous people
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui.
                    </p>

                    <h3 class="heading-tertiary u-margin-bottom-small">Live adventures like you never have before</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
                    </p>

                    <a href="#" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                    </div>
                </div>
            </div>
        </section>

        <!--ICON BOX-->
        <section class="section-iconbox">
            <div class="row">
                <div class="col-1-of-3 section-iconbox__bg-dark">
                    <div class="section-iconbox__card-body">
                        <i class="section-iconbox__icon fas fa-bullhorn"></i>
                        <h3 class="heading-tertiary">
                            Sample Heading
                        </h3>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, expedita.
                    </div>
                </div>

                <div class="col-1-of-3 section-iconbox__bg-primary">
                    <div class="section-iconbox__card-body-primary">
                        <i class="section-iconbox__icon-primary fas fa-bullhorn"></i>
                        <h3 class="heading-tertiary">
                            Sample Heading
                        </h3>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, expedita.
                    </div>
                </div>

                <div class="col-1-of-3 section-iconbox__bg-dark">
                    <div class="section-iconbox__card-body">
                        <i class="section-iconbox__icon fas fa-bullhorn"></i>
                        <h3 class="heading-tertiary">
                            Sample Heading
                        </h3>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, expedita.
                    </div>
                </div>
            </div>
        </section>

	</main><!-- #main -->

<?php }
get_footer();

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trungta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!--NAVIGATION-->
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <?php 
                wp_nav_menu(array (
                    'theme_location'    => 'headerMenuLocation'
                ))
            ?>

            <!--
            <ul class="navigation__list">
                <li class="navigation__item"><a href="<?php echo site_url('/tieto-trungista') ?>" class="navigation__link"><span>01</span>Tieto Trungista</a></li>
                <li class="navigation__item"><a href="<?php echo site_url( '/palvelut') ?>" class="navigation__link"><span>02</span>Palvelut</a></li>
                <li class="navigation__item"><a href="<?php echo site_url( '/refrenssit' ) ?>" class="navigation__link"><span>03</span>Refrenssit</a></li>
                <li class="navigation__item"><a href="<?php echo site_url( '/varaa-keskusteluaika') ?>" class="navigation__link"><span>04</span>Varaa keskusteluaika</a></li>
                <li class="navigation__item"><a href="<?php echo site_url('/hyodyt-julkaisut') ?>" class="navigation__link"><span>05</span>Hyödyt julkaisut</a></li>
            </ul>
            -->
        </nav>
    </div>

    <!--HEADER-->
    <header class="header-page">
        <a href="<?php echo site_url() ?>"><img class="header-page__logo" src=<?php echo get_theme_file_uri( './images/trung-ta-logo-black.png' ) ?> alt="Trung Ta Logo"></a>
    </header>



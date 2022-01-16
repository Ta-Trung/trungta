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

<body>
    <!--NAVIGATION-->
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>Tieto Trungista</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Palvelut</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Refrenssit</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Hyödyt julkaisut</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Pyydä tarjous</a></li>
                </ul>
        </nav>
    </div>

    <!--HEADER-->
    <header class="header">
        <a href="#"><img class="header__logo" src=<?php echo get_theme_file_uri( './images/Trung-Ta-Logo.png' ) ?> alt="Trung Ta Logo"></a>
    </header>

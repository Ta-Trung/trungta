<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trungta
 */

?>

	        <!--Footer-->
			<footer class="footer">
            <div class="row">
                <div class="col-1-of-4 footer__logo-box">
                        <a href="#">
                            <img src=<?php echo get_theme_file_uri( './images/Trung-Ta-Logo.png' ) ?> alt="Trung Ta Logo" class="footer__logo">
                        </a>

                    <ul class="footer__social-links">
                        <li>
                            <a class="footer__link" href="#"><i class="footer__icon fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="footer__link" href="#"><i class="footer__icon fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="footer__link" href="#"><i class="footer__icon fab fa-youtube"></i></a>
                        </li>
                    </ul>

                    <p class="footer__copyright">
                        Copyright &copy; <span class="year">2021</span> Trung Ta
                        All rights reserved.
                    </p>
                </div>

            
                <div class="col-1-of-4">
                    <p class="footer__heading">Yhteystiedot</p>
                    <address class="footer__contacts">
                    <p class="footer__address">
                        Suomen nettimyynti Oy<br>
                        Trung Ta<br>
                        Palstakatu 7-9<br>
                        11100 Riihimäki<br>
                    </p>
                    <p>
                        <a class="footer__link" href="tel:+35844123776">+358440123776</a> (myös Whatappissa)
                    </p>
                </div>

                <div class="col-1-of-4">
                    <p class="footer__heading">Julkaisut</p>
                    <ul class="footer__nav">
                      <li><a class="footer__link" href="<?php echo site_url('/tietosuojaseloste')?>">Tietosuojaseloste</a></li>
                      <li><a class="footer__link" href="#">Pyydä tarjous</a></li>
                      <li><a class="footer__link" href="#">Hinnasto</a></li>
                    </ul>
                </div>

                <div class="col-1-of-4">
                    <p class="footer__heading">Ohjeet</p>
                    <ul class="footer__nav">
                      <li><a class="footer__link" href="<?php echo site_url( '/tietosuojaseloste' ) ?>">Tietosuojaseloste</a></li>
                      <li><a class="footer__link" href="#">Pyydä tarjous</a></li>
                      <li><a class="footer__link" href="#">Hinnasto</a></li>
                    </ul>
                </div>
            </div>
        </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

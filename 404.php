<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package trungta
 */

get_header();
pageBanner(array(
    'title' => "Oops 404!!",
    'subtitle'  => "Oletko varmaan syöttänyt osoitetta oikein?",
    'photo' =>  Null
))
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="row">
				<div class="col">
					<header class="not-found__page-header heading-tertiary">
						<h1 class="not-found__page-title"><?php esc_html_e( 'Etsimäsi sivu on poistettu tai siiretty muihin osoitteihin', 'trungta' ); ?></h1>
					</header><!-- .page-header -->

					<div class="not-found__page-content paragraph">
						<p><?php esc_html_e( 'Käytäthän alla olevaa hakukenttää tehdäksesi hakuja', 'trungta' ); ?></p>

							<?php
							get_search_form();
							?>

					</div><!-- .page-content -->
				</div>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();

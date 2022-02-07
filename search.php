<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package trungta
 */

get_header();
pageBanner(array(
    'title' => "Haun tulos",
    'subtitle'  => "Löydätkö haluamiasi sisältöjä?",
    'photo' =>  Null
))
?>

	<main id="primary" class="site-main">
		<div class="row search-result">
			<div class="col">
				<?php if ( have_posts() ) : ?>
					<header class="search-result__page-header">
						<h1 class="search-result__page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'trungta' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();

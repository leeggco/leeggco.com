<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


		<section id="primary">
			<div id="content" role="main">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
			<h4><a href="<?php the_permalink(); ?>"><?php	the_title(); ?></a></h4>
			<?php	endwhile;
				else :
					_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
				endif;
			?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>

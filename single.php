<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage leeggco
 * @since leeggco 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<article class="mod-post mod-post__type-post">
					<?php while ( have_posts() ) : the_post(); ?>
						<h2 class="mod-post__title"><?php the_title(); ?></h2>
						<div class="mod-post__entry">
							<?php the_content(); ?>
						</div>
					<?php endwhile; // end of the loop. ?>
					<p>评论已关闭</p>
				</article>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
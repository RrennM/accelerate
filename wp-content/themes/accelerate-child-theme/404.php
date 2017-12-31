<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<div class="lost">
		<div class="container">
			<h2>404!</h2>
			<h1>We lost our <span id="cat">cat</span> <span> page</span>!</h1>
			<p>But we have plenty of other pages to view while you're awaiting it's return (it could be a while).</p>
		</div>
	</div>

<?php get_footer(); ?>

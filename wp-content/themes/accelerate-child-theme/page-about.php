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
	

	<section id="primary" class="home-page hero-content about">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();

				$hero = get_field( 'hero_quote' );
				$header_title = get_field( 'header_title' );
				$header_desc = get_field( 'header_desc' );
				$size = 'full';

				$image_1 = get_field( 'image_1' );
				$title_1 = get_field( 'title_1' );
				$desc_1 = get_field( 'desc_1' );

				$image_2 = get_field( 'image_2' );
				$title_2 = get_field( 'title_2' );
				$desc_2 = get_field( 'desc_2' );

				$image_3 = get_field( 'image_3' );
				$title_3 = get_field( 'title_3' );
				$desc_3 = get_field( 'desc_3' );

				$image_4 = get_field( 'image_4' );
				$title_4 = get_field( 'title_4' );
				$desc_4 = get_field( 'desc_4' );


			 ?>

			<?php the_content(); ?>
				<p class="hero_desc"><?php echo $hero ?></p>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</section><!-- #primary -->

	<section class="about-content">
		<div class="header-content">
			<h4><?php echo $header_title; ?></h4>
			<p><?php echo $header_desc; ?></p>
		</div>

		<div class="about-line">
			
			<!-- Check to see if image fields are filled, if yes, display images -->
			<div class="about-img about-img-odd" id="about-1-img">
				<?php if($image_1) { 
					echo wp_get_attachment_image( $image_1, $size );
				} ?>
			</div>
			<div class="about-text" id="about-1-content">
				<h2><?php echo $title_1 ?></h2>
				<p><?php echo $desc_1 ?></p>
			</div>
		</div>

		<div class="about-line">
			
			<div class="about-text about-text-even" id="about-2-content">
				<h2><?php echo $title_2 ?></h2>
				<p><?php echo $desc_2 ?></p>
			</div>

			<!-- Check to see if image fields are filled, if yes, display images -->
			<div class="about-img" id="about-2-img">
				<?php if($image_2) { 
					echo wp_get_attachment_image( $image_2, $size );
				} ?>
			</div>
		</div>

		<div class="about-line">
			
			<!-- Check to see if image fields are filled, if yes, display images -->
			<div class="about-img about-img-odd" id="about-3-img">
				<?php if($image_3) { 
					echo wp_get_attachment_image( $image_3, $size );
				} ?>
			</div>
			<div class="about-text" id="about-3-content">
				<h2><?php echo $title_3 ?></h2>
				<p><?php echo $desc_3 ?></p>
			</div>
		</div>

		<div class="about-line">
			
			<div class="about-text about-text-even" id="about-4-content">
				<h2><?php echo $title_4 ?></h2>
				<p><?php echo $desc_4 ?></p>
			</div>

			<!-- Check to see if image fields are filled, if yes, display images -->
			<div class="about-img" id="about-4-img">
				<?php if($image_4) { 
					echo wp_get_attachment_image( $image_4, $size );
				} ?>
			</div>
		</div>
	</section> <!--End about-content section -->

	<section class="about-nav">
		<nav id="navigation" class="container">
			<div>
				<h2>Interested in working with us?<a class="button" href="<?php echo site_url('/contact/') ?>" style="margin-left: 50px">Contact Us</a></h2>
			</div>
		</nav>
		
	</section>

<?php get_footer(); ?>


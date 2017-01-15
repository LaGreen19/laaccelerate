<?php
/*
* Template Name: About Page
* Template Post Type: services
*/

get_header(); ?>


<section class="about-page">
	<div class="about-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<h3><span>Accelerate </span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->


<section class="services">
	<div class="about-content">
		<div class="about-intro">
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them. <br> Here’s a brief overview of our offered services.</p>
	</div>

<?php query_posts('post_type=services'); ?>

<div class="services-list">

	<?php while ( have_posts() ) : the_post();
$size="full";
$service = get_field('service');
$service_description = get_field('service_description');
$services_image = get_field('services_image'); ?>


	<div class="individual-service">
		<div class="services-info">
			<h1><?php echo $service; ?> </h1>
			<p><?php echo $service_description; ?></p>
		</div>
	<figure class="service-image"><?php echo wp_get_attachment_image ($services_image);?></figure>

	</div>

	<?php endwhile; // end of the loop. ?>


<div class="about-action">
	<h2>Interested in working with us?</h2>
	<a class="button contact-btn">Contact Us</a>
</div>


<?php get_footer(); ?>

<?php
/**
* Theme: Hestia Child
*
* Template Name: Page - Flexible Content
*
* This page allows users to create their own layout RELIES ON ADVANCED CUSTOM FIELDS PLUGIN!!!.
*
* This is the template for full width pages with no sidebar and no container. This
* page truly stretches the full width of the browser window. You should set a
* <div class="container"> before your content to keep it in line with the rest of
* the site content.
*
* @package hestia-child
*/

get_header(); ?>
<div id="primary" class="content-area-wide">
	<main id="main" class="site-main flexible">
		<div class="flexible__wrapper">
			<?php
			// check if the flexible content field has rows of data
			if( have_rows('amina_flexible_content') ):
				// Get large loop from componentList file
				get_template_part('partials/loop', 'componentList');

				else :

					echo '<p> No Layout Found </p>';

				endif;

				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>

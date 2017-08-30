<?php
/**
* Theme: Amina Flat Bootstrap Child
*
* Template Name: Page - Flexible Article
*
* This page allows users to create their own layout RELIES ON ADVANCED CUSTOM FIELDS PLUGIN!!!.
*
*
* @package amina-flatbootstrap-child
*/

get_header(); ?>
<div id="primary" class="content-area-wide">
	<main id="main" class="site-main flexible">
		<article class="flexible__wrapper post__article">
			<?php

			// check if the flexible content field has rows of data
			if( have_rows('flexible_article_content') ):
				// Get large loop from componentList file
				get_template_part('partials/loop', 'componentListArticle');

				else :

					echo '<p> No Layout Found </p>';

				endif;

				?>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>

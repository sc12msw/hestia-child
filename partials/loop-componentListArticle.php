<?php

/* Article Flexible Component list loop. This loop contains all the components for
the advanced custom fields page builder
*/

//Counter for sections
$section_counter = 1;


while ( have_rows('flexible_article_content') ) : the_row();

  if( get_row_layout() == 'start_section' ):

    include(locate_template ('partials/content-flexibleStartSection.php'));
    $section_counter ++;

  elseif( get_row_layout() == 'end_section' ):

    get_template_part('partials/content', 'flexibleEndSection' );

  elseif( get_row_layout() == 'editor' ):

    get_template_part('partials/content', 'flexibleEditor' );

  elseif( get_row_layout() == 'full_page_image' ):

      get_template_part('partials/content', 'flexibleFullPageImage' );

  elseif( get_row_layout() == 'similar_articles' ):

      get_template_part('partials/content', 'flexibleSimilarArticles' );

  endif;

endwhile;

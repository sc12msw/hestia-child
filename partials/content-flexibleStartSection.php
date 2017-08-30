<?php // Needed for scroll nav to Start the section ?>
<section id="scrollNav-<?php echo $section_counter;?>" class="scroll-nav__section">
  <div class="flexibleA-start__container" style="background-image:url('<?php the_sub_field('image');?>');">
    <h2 class="flexibleA-start__heading flexibleA-start__heading--<?php the_sub_field('heading_position');?>"><?php the_sub_field('heading');?></h2>
  </div>

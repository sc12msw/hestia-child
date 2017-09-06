<div class="flexibleA-similar">
  <h3 class="flexibleA-similar__heading"><?php the_sub_field('heading'); ?></h3>
  <div class="row">

    <div class="col-sm-4">
      <a href="<?php the_sub_field('link_1');?>">
        <div class="flexibleA-similar__linkRow flexibleA-similar__linkRow--<?php the_sub_field('color');?>">
          <div class="flexibleA-similar__linkCol">
            <img class="flexibleA-similar__image" src="<?php the_sub_field('image_1');?>" alt="Related article title image">
          </div>
          <div class="flexibleA-similar__linkCol">
            <span class="flexibleA-similar__linkText"> <?php the_sub_field('link_text_1');?> </span>
          </div>
        </div>
      </a>
    </div> <!-- end col -->

    <div class="col-sm-4">
      <a href="<?php the_sub_field('link_2');?>">
        <div class="flexibleA-similar__linkRow flexibleA-similar__linkRow--<?php the_sub_field('color');?>">
          <div class="flexibleA-similar__linkCol">
            <img class="flexibleA-similar__image" src="<?php the_sub_field('image_2');?>" alt="Related article title image">
          </div>
          <div class="flexibleA-similar__linkCol">
            <span class="flexibleA-similar__linkText "> <?php the_sub_field('link_text_2');?> </span>
          </div>
        </div>
      </a>
    </div> <!-- end col -->

    <div class="col-sm-4">
      <a href="<?php the_sub_field('link_3');?>">
        <div class="flexibleA-similar__linkRow flexibleA-similar__linkRow--<?php the_sub_field('color');?>">
          <div class="flexibleA-similar__linkCol">
            <img class="flexibleA-similar__image" src="<?php the_sub_field('image_3');?>" alt="Related article title image">
          </div>
          <div class="flexibleA-similar__linkCol">
            <span class="flexibleA-similar__linkText"> <?php the_sub_field('link_text_3');?> </span>
          </div>
        </div>
      </a>
    </div> <!-- end col -->

  </div> <!-- end row -->
</div>

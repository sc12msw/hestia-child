<div class="<?php if(get_sub_field('container')){echo 'flexible__container';} ?> gutter__default">
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="flexible__container-editor">
        <div class="flexible__colorBlock flexible__colorBlock-color--<?php the_sub_field('editor_color_1');?>">
          <?php the_sub_field('editor_1');?>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="flexible__container-editor">
        <div class="flexible__colorBlock flexible__colorBlock-color--<?php the_sub_field('editor_color_2');?>">
          <?php the_sub_field('editor_2');?>
        </div>
      </div>
    </div> <!-- end col -->
  </div> <!-- end row -->
</div> <!-- end container -->

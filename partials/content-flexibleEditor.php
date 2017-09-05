<div class="flexibleA-editor"  <?php if (get_sub_field('background_image')){
  $field = get_sub_field('background_image');

  $output = 'style="background-image:url(\''.$field.'\')";';
  echo $output;
} ?> >
  <div class="flexibleA-editor__inner" >
    <?php the_sub_field('editor');?>
  </div>
</div>

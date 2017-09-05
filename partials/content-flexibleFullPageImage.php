<div class="flexibleA-fullPageImage" style="background-image:url('<?php the_sub_field('background_image');?>')">
  <?php if (get_sub_field('caption')): ?>
    <div class="flexibleA-fullPageImage__caption" >
      <span class="flexibleA-fullPageImage__caption-item"><?php the_sub_field('caption');?></span>
    </div>
  <?php endif; ?>
</div>

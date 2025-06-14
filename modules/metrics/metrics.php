<div class="metrics" data-aos="fade-in" data-offset="-300" style="background-color:<?php the_sub_field('colorbg')?>">
  <div class="container">
      <div class="metrics__numbers">
        <?php if (have_rows('metric')) {while (have_rows('metric')) {the_row(); ?>
        <div class="metrics__numbers__item">
          <h3><?php the_sub_field('beforeText')?><span class="metrics__animated"><?php the_sub_field('number')?></span><?php the_sub_field('afterText')?></h3>
          <p><?php the_sub_field('description')?></p>
        </div>
        <?php }} ?>
      </div>

  </div>
</div>
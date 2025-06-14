<div class="academic-comite">
  <div class="container">
  <div class="academic-comite__title">
    <h3><?php the_sub_field('title')?></h3>
  </div>
  <div class="academic-comite__text">
    <?php the_sub_field('text')?>
  </div>
  <div class="academic-comite__content">
  <?php if (have_rows('banners')) {while (have_rows('banners')) {the_row(); ?>
    <div class="academic-comite__content__item">
      <a href="<?php the_sub_field('link')?>" target="_blank"></a>
      <div class="text">
        <h4><?php the_sub_field('title')?></h4>
        <span class="btn__primary"><?php the_sub_field('textbtn')?></span>
      </div>
    </div>
  <?php }}?>
  </div>
  </div>
</div>
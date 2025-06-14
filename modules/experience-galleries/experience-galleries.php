<section class="experience-galleries">
  <div class="container">
    <div class="experience-galleries__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="experience-galleries__content">
     <?php if (have_rows('galleries')) {while (have_rows('galleries')) {the_row(); ?>
      <?php
$images = get_sub_field('gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
<div class="experience-galleries__content__item">
  <div class="experience-galleries__content__item__title">
    <h3><?php the_sub_field('title')?></h3>
  </div>
    <div class="experience-galleries__content__item__slider <?php the_sub_field('slider_class') ?> owl-carousel owl-theme">
        <?php foreach( $images as $image_id ): ?>
            <div class="experience">
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </div>
        <?php endforeach; ?>
        </div>
<?php endif; ?>
</div>
     <?php }} ?>
    </div>
  </div>
</section>
<div class="head-sustent">
  <div class="head-sustent__img">
    <?php $image = get_sub_field('img'); ?>
    <?php if ($image): ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="head-sustent__content">
      <h1><?php the_sub_field('title'); ?></h1>
    </div>
  </div>
</div>
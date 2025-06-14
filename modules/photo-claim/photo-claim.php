<div class="photo-claim">
  <div class="container">
    <div class="photo-claim__text">
      <?php the_sub_field('text')?>
    </div>
    <div class="photo-claim__img">
      <?php $image = get_sub_field('img');
      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</div>
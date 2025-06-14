<div class="organigrama">
  <div class="container">
    <div class="organigrama__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="organigrama__img">
      <?php $image = get_sub_field('img');
      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</div>
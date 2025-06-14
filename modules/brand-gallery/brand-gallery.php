<div class="brand-gallery">
  <div class="container">
    <div class="brand-gallery__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="brand-gallery__content owl-carousel owl-theme">
    <?php
          $images = get_sub_field('gallery');
          if( $images ): ?>
                  <?php foreach( $images as $image ): ?>
                      <div class="brand-gallery__content__item">
                          <a href="<?php echo esc_url($image['url']); ?>">
                              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          </a>
                      </div>
                  <?php endforeach; ?>
          <?php endif; ?>
    </div>
  </div>
</div>
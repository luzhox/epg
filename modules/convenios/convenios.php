<div class="convenios">
  <div class="container">
    <div class="convenios__gallery__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="convenios__gallery">
    <?php
        $images = get_sub_field('gallery');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
                <?php foreach( $images as $image_id ): ?>
                    <div>
                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    </div>
                <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </div>
</div>
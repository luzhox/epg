<div class="header-contact" data-aos="fade-in">
  <div class="header-contact__img">
    <?php $image = get_sub_field('image');if( !empty( $image ) ): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </div>
  <div class="container" data-aos="fade-up">
    <div class="header-contact__title">
      <h1><?php the_sub_field('title')?></h1>
      <div class="buttons">
        <?php $link = get_sub_field('firstbutton');if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn__primary--border" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
           <?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
        <?php $link = get_sub_field('secondbutton');
          if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
          <?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

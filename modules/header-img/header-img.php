<div class="header-img <?php the_sub_field('customclass')?>" data-aos="fade-in">
  <div class="overlay" style="background:<?php the_sub_field('overlay')?>" ></div>
  <div class="header-img__img">
    <?php $image = get_sub_field('img');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="header-img__content">
      <?php the_sub_field('text')?>
      <div class="header-img__content__buttons">
      <?php
                        $link = get_sub_field('button');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a class="btn__primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>

                        <?php
                        $link = get_sub_field('buttontwo');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a class="btn__secondary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                        </div>

    </div>
  </div>
</div>
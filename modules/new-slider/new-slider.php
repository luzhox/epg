<div class="new-slider">
    <div class="new-slider__slider owl-carousel owl-theme">
      <?php if (have_rows('slider')) {while (have_rows('slider')) {the_row(); ?>
      <div class="new-slider__slider__item">
        <div class="new-slider__slider__item__img">
        <?php $link2 = get_sub_field('link');
                      if( $link2 ):
                        $link2_url = $link2['url'];
                        $link2_title = $link2['title'];
                        $link2_target = $link2['target'] ? $link2['target'] : '_self';?>
          <a class="<?php the_sub_field('type')?>" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>">
          <picture>
              <?php $image = get_sub_field('img');
                    if (!empty($image)) : ?>
                        <source media="(max-width:465px)" srcset="<?php the_sub_field('imgmob')?>">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
          </picture>
          </a>
          <?php endif; ?>

        </div>

      </div>
      <?php }}?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
      $('.site-header').addClass('white')

    })
      </script>
<div class="maestrias <?php $havefilter = get_sub_field('havefilter');if (!($havefilter)) : ?> bgGray <?php endif;?>">
  <div class="container">
    <div class="maestrias__title <?php $havefilter = get_sub_field('havefilter');if (($havefilter)) : ?> withFilter <?php endif;?>">
      <h2 data-aos="fade-up"><?php the_sub_field('title')?></h2>
      <?php $havefilter = get_sub_field('havefilter');if (($havefilter)) : ?>
      <div class="maestrias__title__filters" data-aos="fade-up">
        <div class="maestrias__title__filters__header">
          <h3>Selecciona por área</h3>
          <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L9.5 11L18 1" stroke="#0D3E22"/>
            </svg>
        </div>
        <div class="maestrias__title__filters__content">
          <button class="filter" data-filter="all">Todos</button>

          <?php if (have_rows('filters')) {while (have_rows('filters')) {the_row(); ?>
            <button class="filter btnOptions" data-filter="<?php the_sub_field('nameFilter')?>"><?php the_sub_field('text')?></button>

          <?php }} ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <div class="maestrias__content" data-aos="fade-up" id="<?php $havefilter = get_sub_field('havefilter');if (($havefilter)) : ?>maestriasCont<?php endif;?>">
      <?php if (have_rows('masters')) {while (have_rows('masters')) {the_row(); ?>
        <div class="maestrias__content__item mix <?php the_sub_field('filter')?> ">
          <div class="img">
          <?php $image = get_sub_field('img');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
          </div>
          <div class="text">
            <h3><?php the_sub_field('title')?></h3>
            <div class="buttons">
                <?php $link = get_sub_field('buttonMore');
                      if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';?>
                <a class="<?php the_sub_field('type')?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                <?php $link2 = get_sub_field('subs');
                      if( $link2 ):
                        $link2_url = $link2['url'];
                        $link2_title = $link2['title'];
                        $link2_target = $link2['target'] ? $link2['target'] : '_self';?>
                <a class="<?php the_sub_field('type')?>" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
                <?php endif; ?>
            </div>
          </div>
        </div>

        <?php }} ?>

    </div>
    <?php $havefilter = get_sub_field('havefilter');if (($havefilter)) : ?>
    <div class="controls-pagination">
            <div class="mixitup-page-list"></div>
        </div>
    <?php endif; ?>
  </div>

</div>

<?php $havefilter = get_sub_field('havefilter');if (($havefilter)) : ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup-pagination.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup-multifilter.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function(){



    const containerEl = document.querySelector('#maestriasCont');
    const currentLimit = 8;
    const incrementAmount = 8;
 mixitup(containerEl, {
    multifilter: {
        enable: true
    },
    animation: {
        effects: 'fade translateZ(-100px)'
    },
    pagination: {
        limit: currentLimit,
    }



});



    })
</script>


<?php endif;?>


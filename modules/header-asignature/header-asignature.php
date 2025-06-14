<div class="header-asignature" data-aos="fade-in">
  <div class="overlay" style="background:<?php the_sub_field('overlay')?>" ></div>
  <div class="header-asignature__img" data-aos="fade-in">
    <picture>
      <source srcset="<?php the_sub_field('imgDesktop')?>" media="(min-width: 600px)">
      <img src="<?php the_sub_field('img')?>" alt="<?php the_sub_field('title')?>">
    </picture>
  </div>
  <div class="container" >
    <div class="header-asignature__content">
      <h2><?php the_sub_field('title')?></h2>
      <div class="header-asignature__buttons">
        <?php if (have_rows('buttons')) {while (have_rows('buttons')) {the_row(); ?>
                    <?php $link = get_sub_field('button');if( $link ):$link_url = $link['url'];$link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self';?>
          <a class="<?php the_sub_field('type')?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        <?php }} ?>
      </div>
    </div>
  </div>
</div>
<div class="header-asignature__details">
  <div class="container">
  <?php if (have_rows('details')) {while (have_rows('details')) {the_row(); ?>
        <div class="header-asignature__details__item" data-aos="fade-in" data-aos-offset="-300">
          <h3><?php the_sub_field('title')?></h3>
          <p><?php the_sub_field('description')?></p>
        </div>
  <?php }} ?>
  </div>

</div>
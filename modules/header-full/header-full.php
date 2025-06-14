<div class="header-full" data-aos="fade-in">
  <div class="overlay" style="background:<?php the_sub_field('overlay')?>" ></div>
  <div class="header-full__video">
    <video muted="" autoplay="">
      <source src="<?php the_sub_field('video')?>" type="video/mp4">
    </video>
  </div>
  <div class="container">
    <div class="header-full__content">
      <h2><?php the_sub_field('title')?></h2>
      <div class="header-full__buttons">
        <?php if (have_rows('buttons')) {while (have_rows('buttons')) {the_row(); ?>
                    <?php $link = get_sub_field('button');if( $link ):$link_url = $link['url'];$link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self';?>
          <a class="<?php the_sub_field('type')?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        <?php }} ?>
      </div>
    </div>
  </div>
</div>
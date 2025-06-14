<div class="sustent-home">
  <div class="container">
    <div class="sustent-home__title">
      <h3><?php the_sub_field('title')?></h3>
      <a href="/sustentaciones" class="btn__primary">
        Ver todas las sustentaciones
      </a>
    </div>
    <div class="sustent-home__content owl-carousel owl-theme">
      		<?php $args = array(
			'posts_per_page'=> 6,
      'orderby'=> 'date',
      'post_type' => 'sustentaciones',
			'order'=>'DESC');
		?>
		<?php $family = new WP_Query($args);?>
		<?php while($family->have_posts()): $family->the_post();?>
         <div class="sustent-home__content__item"  data-aos="fade-up">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

              <div class="sustent-home__content__item__img" style="background-image:url(<?php echo $url;?>)">
                <?php if(get_field('day')): ?>
                <div class="sustent-home__content__item__date"><div class="content-date"><p><?php the_field('day') ?><?php the_field('month') ?></p> <p><strong><?php the_field('age') ?></strong></p> </div></div>
                <?php endif; ?>
                <div class="sustented">
                  <p>Alumn@: <?php the_field('sustented') ?></p>
                </div>
              </div>
              <div class="sustent-home__content__item__text">
                <p><?php the_title() ?></p>
                <a href="<?php the_permalink() ?>" class="btn__primary">Ver detalle</a>
              </div>
            </div>


      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</div>
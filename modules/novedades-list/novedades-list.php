<div class="novedades-list">
  <div class="container">
    <div class="novedades-list__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="novedades-list__content">
    <?php $args = array(
      'post_type'=>'novedades-unalm',
			'posts_per_page'=> 3,
      'orderby'=> 'date',
			'order'=>'DESC');
		?>
		<?php $family = new WP_Query($args);?>
		<?php while($family->have_posts()): $family->the_post();?>
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
      <div class="novedades-list__content__item">
        <div class="img">
          <img src="<?php echo $url?>" alt="">
        </div>
        <div class="text">
          <h3><?php title(15)?></h3>
          <p><?php echo excerpt(12)?></p>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>
</div>
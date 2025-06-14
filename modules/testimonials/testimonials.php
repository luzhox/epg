<div class="testimonials <?php the_sub_field('customClass')?>" data-aos="fade-in">
  <div class="container">
    <div class="testimonials__content owl-carousel owl-theme">
    <?php $args = array(
      'post_type'=> 'testimonial', // 'post' para entradas normales, 'page' para páginas
			'posts_per_page'=> get_sub_field('count'),
      'orderby'=> 'date',
			'order'=>'DESC');
		?>
		<?php $family = new WP_Query($args);?>
		<?php while($family->have_posts()): $family->the_post();?>
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
      <div class="testimonials__item">
        <div class="testimonials__item__img">
        <a  class="open-video" href="<?php the_field('video') ?>">
        <svg width="106" height="106" viewBox="0 0 106 106" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="53" cy="53" r="53" fill="#951318"/>
<path d="M42 69V45V38L63 53.5L42 69Z" fill="#FFFFFF"/>
</svg></a>

          <img src="<?php echo $url; ?>" alt="<?php the_title()?>">
          <!-- <div class="testimonials__item__video" poster="<?php echo $url;?>">
            <video muted controls>
              <source src="<?php the_field('video') ?>" type="video/mp4">
            </video>
          </div> -->
        </div>
        <div class="testimonials__item__text">
          <h5>Testimoniales</h5>
          <h2><?php the_field('title')?></h2>
          <svg width="35" height="21" viewBox="0 0 35 21" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M26.0899 20.65C23.5232 20.65 21.6799 19.95 20.5599 18.55C19.4866 17.15 18.9499 15.3767 18.9499 13.23C18.9499 11.97 19.2299 10.5 19.7899 8.82C20.3966 7.09333 21.3299 5.43666 22.5899 3.85C23.8499 2.21666 25.4366 0.933332 27.3499 0L33.5099 3.57C32.4366 4.03667 31.3866 4.57333 30.3599 5.18C29.3332 5.78666 28.5632 6.51 28.0499 7.35H28.3999C29.2399 7.35 30.1032 7.56 30.9899 7.98C31.9232 8.4 32.6932 9.05333 33.2999 9.94C33.9532 10.78 34.2799 11.9 34.2799 13.3C34.2799 14.28 33.9999 15.3533 33.4399 16.52C32.9266 17.64 32.0632 18.62 30.8499 19.46C29.6832 20.2533 28.0966 20.65 26.0899 20.65ZM7.5399 20.65C4.97324 20.65 3.1299 19.95 2.0099 18.55C0.936569 17.15 0.399902 15.3767 0.399902 13.23C0.399902 11.97 0.679902 10.5 1.2399 8.82C1.84657 7.09333 2.7799 5.43666 4.0399 3.85C5.2999 2.21666 6.88657 0.933332 8.7999 0L14.9599 3.57C13.8866 4.03667 12.8366 4.57333 11.8099 5.18C10.7832 5.78666 10.0132 6.51 9.4999 7.35H9.8499C10.6899 7.35 11.5532 7.56 12.4399 7.98C13.3732 8.4 14.1432 9.05333 14.7499 9.94C15.4032 10.78 15.7299 11.9 15.7299 13.3C15.7299 14.28 15.4499 15.3533 14.8899 16.52C14.3766 17.64 13.5132 18.62 12.2999 19.46C11.1332 20.2533 9.54657 20.65 7.5399 20.65Z" fill="#951318"/>
          </svg>

          <p><?php the_content()?></p>
          <h3><?php the_title()?></h3>

        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
$('.open-video').colorbox({iframe:true, width:"80%", height:"80%"});
})
</script>
<div class="team-about">
  <div class="container">
    <div class="team-about__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="team-about__menu">
      <?php if (have_rows('team')) {while (have_rows('team')) {the_row(); ?>
          <button class="btnMenu <?php $isActive=get_sub_field('isActive'); if ($isActive) :?> active<?php endif; ?>" data-id="<?php the_sub_field('id')?>"><?php the_sub_field('name')?></button>
      <?php }}?>
    </div>
    <div class="team-about__content">
          <?php if (have_rows('team')) {while (have_rows('team')) {the_row(); ?>
            <div id="<?php the_sub_field('id')?>" class="team-about__content__slider <?php $isActive=get_sub_field('isActive'); if ($isActive) :?> active<?php endif; ?>">
              <?php if (have_rows('members')) {while (have_rows('members')) {the_row(); ?>
                <div class="team-about__content__slider__item">
                    <div class="img">
                      <?php $image = get_sub_field('img');if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      <?php endif; ?>
                      <a class="areaclick" href="<?php the_sub_field('link')?>">
                        <span  class="btn__primary">Ver bio <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.70715 2.62615C8.31662 2.23562 7.68346 2.23562 7.29293 2.62615C6.90241 3.01667 6.90241 3.64983 7.29293 4.04036L10.2525 6.99992H3.33337C2.78109 6.99992 2.33337 7.44763 2.33337 7.99992C2.33337 8.5522 2.78109 8.99992 3.33337 8.99992H10.2525L7.29293 11.9595C6.90241 12.35 6.90241 12.9832 7.29293 13.3737C7.68346 13.7642 8.31662 13.7642 8.70715 13.3737L13.2324 8.84845C13.2574 8.82348 13.281 8.79768 13.3033 8.77115C13.5253 8.58773 13.6667 8.31034 13.6667 7.99992C13.6667 7.6895 13.5253 7.41211 13.3033 7.22869C13.281 7.20216 13.2574 7.17636 13.2324 7.15139L8.70715 2.62615Z" fill="white"/>
                          </svg>
                        </span>
                      </a>
                    </div>
                    <div class="text">
                      <h4><?php the_sub_field('charge')?></h4>
                      <h3><?php the_sub_field('name')?></h3>
                    </div>
                </div>
              <?php }}?>
            </div>
          <?php }}?>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    $('.btnMenu').click(function(){
      const id = $(this).data('id');
      console.log(id,'id');
      $('.btnMenu').removeClass('active');
      $(this).addClass('active');
      $('.team-about__content__slider').removeClass('active');
      $('#'+id).addClass('active');
    })
    <?php if (have_rows('team')) {while (have_rows('team')) {the_row(); ?>
    $('#<?php the_sub_field('id')?>').slick(
      {
        rows: 2,
        dots:false,
        arrows:false,
        infinite:true,
        autoplay:false,
        speed:500,
        slidesToShow: 4,
        slidesToScroll: 4,

      }
    );
    <?php }}?>




  });
</script>
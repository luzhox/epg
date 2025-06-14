<div class="more-infoacademic">
  <div class="container">
    <div class="more-infoacademic__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="more-infoacademic__menu">
        <?php if (have_rows('menu')) {while (have_rows('menu')) {the_row(); ?>
            <button class="btnMenu <?php $isActive=get_sub_field('isActive'); if ($isActive) :?> active<?php endif; ?>" data-id="<?php the_sub_field('sectionid')?>"><?php the_sub_field('name')?></button>
        <?php }}?>
      </div>
      <div class="more-infoacademic__content">
        <div id="program" class="more-infoacademic__content__item active">
          <div class="academic-comite__text">
            <?php the_sub_field('text-program')?>
          </div>
          <div class="academic-comite__content">
            <?php if (have_rows('banners-program')) {while (have_rows('banners-program')) {the_row(); ?>
              <div class="academic-comite__content__item">
                <a href="<?php the_sub_field('link')?>" target="_blank"></a>
                <div class="text">
                  <h4><?php the_sub_field('title')?></h4>
                  <span class="btn__primary"><?php the_sub_field('textbtn')?></span>
                </div>
              </div>
            <?php }}?>
          </div>
        </div>
        <div id="tesis" class="more-infoacademic__content__item">
        <div class="academic-comite__text">
            <?php the_sub_field('text-tesis')?>
          </div>
          <div class="academic-comite__content">
            <?php if (have_rows('banners-tesis')) {while (have_rows('banners-tesis')) {the_row(); ?>
              <div class="academic-comite__content__item" style="margin-bottom:24px;">
                <a href="<?php the_sub_field('link')?>" target="_blank"></a>
                <div class="text">
                  <h4><?php the_sub_field('title')?></h4>
                  <span class="btn__primary"><?php the_sub_field('textbtn')?></span>
                </div>
              </div>
            <?php }}?>
          </div>
        </div>
        <div id="grade" class="more-infoacademic__content__item">
          <div class="academic-comite__text">
            <?php the_sub_field('text-grade')?>
          </div>
            <div class="academic-comite__content">
            <?php if (have_rows('banners-grade')) {while (have_rows('banners-grade')) {the_row(); ?>
              <div class="academic-comite__content__item" style="margin-bottom:24px;">
                <a href="<?php the_sub_field('link')?>" target="_blank"></a>
                <div class="text">
                  <h4><?php the_sub_field('title')?></h4>
                  <span class="btn__primary"><?php the_sub_field('textbtn')?></span>
                </div>
              </div>
            <?php }}?>
          </div>
        </div>
        <div id="help-economics" class="more-infoacademic__content__item">
          <div class="academic-comite__text">
            <?php the_sub_field('text-help')?>
          </div>
          <div class="academic-comite__content">
            <?php if (have_rows('banners-help')) {while (have_rows('banners-help')) {the_row(); ?>
              <div class="academic-comite__content__item" style="margin-bottom:24px;">
                <a href="<?php the_sub_field('link')?>" target="_blank"></a>
                <div class="text">
                  <h4><?php the_sub_field('title')?></h4>
                  <span class="btn__primary"><?php the_sub_field('textbtn')?></span>
                </div>
              </div>
            <?php }}?>
          </div>
        </div>
        <div id="comite" class="more-infoacademic__content__item">
          <div class="academic-comite__text">
            <h4><?php the_sub_field('title')?></h4>
            <?php the_sub_field('text-comite')?>
          </div>
            <div class="academic-comite__content">
    <?php if (have_rows('banners-comite')) {while (have_rows('banners-comite')) {the_row(); ?>
      <div class="academic-comite__content__item">
        <a href="<?php the_sub_field('link')?>" target="_blank"></a>
        <div class="text">
          <h4><?php the_sub_field('title')?></h4>
          <span class="btn__primary"><?php the_sub_field('textbtn')?></span>
        </div>
      </div>
    <?php }}?>
  </div>
        </div>
      </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    $('.btnMenu').click(function(){
      var id = $(this).data('id');
      $('.btnMenu').removeClass('active');
      $(this).addClass('active');
      $('.more-infoacademic__content__item').removeClass('active');
      $('#'+id).addClass('active');
    })

    // $('.admision__content__calendar').click(function(){
    //   $(this).toggleClass('active');
    //   $(this).siblings().removeClass('active');
    // })
  })
</script>
<div class="content-asignature" data-defaultactive="<?php the_sub_field('idefault')?>">
  <div class="container">
    <div class="content-asignature__title-filters" data-aos="fade-up">
      <div class="content-asignature__title-filters__title" >
        <h2><?php the_sub_field('title')?></h2>
      </div>
      <div class="content-asignature__title-filters__filters" >
        <?php if (have_rows('filters')) {while (have_rows('filters')) {the_row(); ?>
        <button class="filter <?php $havefilter = get_sub_field('isActive');if (($havefilter)) : ?> active <?php endif;?>" data-id="<?php the_sub_field('id')?>"><?php the_sub_field('name')?></button>
        <?php }} ?>
      </div>
    </div>
    <div class="content-asignature__content" data-aos="fade-up">
    <?php if (have_rows('contents')) {while (have_rows('contents')) {the_row(); ?>
        <div id="<?php the_sub_field('id')?>" class="content-asignature__content__item <?php the_sub_field('id')?>">
          <div class="content-asignature__content__item__header">
            <?php the_sub_field('title')?>
              <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L10 10L19 1" stroke="#A5A8C3"/>
                </svg>

          </div>
          <div class="content-asignature__content__item__content">
          <?php the_sub_field('content')?>
          </div>
        </div>
        <?php }} ?>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded',function(){
    $('.content-asignature__content__item').click(function(){
      $(this).toggleClass('active');
      $(this).siblings().removeClass('active');
    })
    $('.content-asignature').each(function(){
      const defaultactive = $(this).data('defaultactive');
      $('.'+defaultactive).addClass('show');
    })
    $('.content-asignature__title-filters__filters button').click(function(){
      const id = $(this).data('id');
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
      $('.content-asignature__content__item').removeClass('show');
      $('.'+id).addClass('show');
    })
  })
</script>
<div class="profiles">
  <div class="container">
    <div class="profiles__title"><h3><?php the_sub_field('title')?></h3></div>
    <div class="profiles__content owl-carousel owl-theme">
      <?php if (have_rows('profile')) {while (have_rows('profile')) {the_row(); ?>
        <div class="profiles__content__item">
          <div class="profiles__content__item__img">
            <picture>
              <source srcset="<?php the_sub_field('img')?>" media="(min-width: 600px)">
              <img src="<?php the_sub_field('img')?>" alt="<?php the_sub_field('name')?>">
            </picture>
          </div>
          <div class="profiles__content__item__content">
            <h3><?php the_sub_field('name')?></h3>
           <?php the_sub_field('description')?>
          </div>
        </div>
      <?php }} ?>

    </div>
  </div>
</div>
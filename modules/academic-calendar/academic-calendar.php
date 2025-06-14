<div class="academic-calendar">
  <div class="container">
    <div class="academic-calendar__title">
      <h3>Calendarios académico </h3>
    </div>
    <div class="academic-calendar__calendars">
      <?php if (have_rows('calendar')) {while (have_rows('calendar')) {the_row(); ?>
        <div class="academic-calendar__calendars__item">
          <div class="header"><?php the_sub_field('title')?></div>
          <div class="content">
            <?php if (have_rows('activities')) {while (have_rows('activities')) {the_row(); ?>
              <div class="item">
                <div class="date"><?php the_sub_field('date')?></div>
                <div class="text"><?php the_sub_field('detalle')?></div>
              </div>
            <?php }}?>

          </div>
        </div>
      <?php }}?>
    </div>
    <div class="academic-calendar__banners">
    <?php if (have_rows('banners')) {while (have_rows('banners')) {the_row(); ?>
      <div class="academic-calendar__banners__item">
        <a href="<?php the_sub_field('link')?>" target="_blank"></a>
        <div class="imgbg">
          <?php $images = get_sub_field('bg'); if($images): ?>
          <img src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="text">
          <h4><?php the_sub_field('title')?></h4>
          <span class="btn__primary"><?php the_sub_field('textbtn')?></span>
        </div>
      </div>

    <?php }}?>

    </div>
  </div>
</div>
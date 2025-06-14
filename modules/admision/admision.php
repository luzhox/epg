<div class="admision">
  <div class="container">
      <div class="admision__title">
        <h3><?php the_sub_field('titleprimary')?></h3>
      </div>
      <div class="admision__menu">
        <?php if (have_rows('menu')) {while (have_rows('menu')) {the_row(); ?>
            <button class="btnMenu <?php $isActive=get_sub_field('isActive'); if ($isActive) :?> active<?php endif; ?>" data-id="<?php the_sub_field('sectionid')?>"><?php the_sub_field('name')?></button>
        <?php }}?>
      </div>
      <div class="admision__content">
        <div id="calendario" class="admision__content__item active">
          <?php if (have_rows('calendar')) {while (have_rows('calendar')) {the_row(); ?>
              <div class="admision__content__calendar <?php $isActive=get_sub_field('isActive'); if ($isActive) :?> active<?php endif; ?>">
                <div class="admision__content__calendar__header">
                  <p><?php the_sub_field('header')?></p>
                  <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L11.5 11L22 1" stroke="white" stroke-width="2"/>
                  </svg>
                </div>
                <div class="admision__content__calendar__body">
                <?php if (have_rows('detail')) {while (have_rows('detail')) {the_row(); ?>
                  <div class="admision__content__calendar__body__item">
                    <div class="date"><?php the_sub_field('date')?></div>
                    <div class="text"><p><?php the_sub_field('description')?></p></div>
                  </div>
                  <?php }}?>
                </div>
              </div>
            <?php }}?>
        </div>
        <div id="vacantes" class="admision__content__item">
              <div class="header-vacant"><p><?php the_sub_field('titlevacant')?></p></div>
              <div class="body-vacant">
                <?php if (have_rows('programs')) {while (have_rows('programs')) {the_row(); ?>
                  <div class="body-vacant__item">
                    <div class="title"><h3><?php the_sub_field('title')?></h3></div>
                    <div class="body-vacant__item__content">
                    <?php if (have_rows('program')) {while (have_rows('program')) {the_row(); ?>
                      <div class="body-vacant__item__content__item">
                        <div class="name"><?php the_sub_field('name')?></div>
                        <div class="vacant"><?php
                        $vacant = get_sub_field('number');
                        if ($vacant) {
                          echo $vacant;
                        } else {
                          echo '-';
                        }
                        ?></div>
                      </div>

                      <?php }}?>
                    </div>
                  </div>
                <?php }}?>
              </div>
        </div>
        <div id="requisitos" class="admision__content__item">
        <?php if (have_rows('detailsrequisites')) {while (have_rows('detailsrequisites')) {the_row(); ?>
          <div class="details-requisities">
            <?php the_sub_field('detalle')?>
          </div>
          <?php }}?>
        </div>
        <div id="evaluacion" class="admision__content__item ">
          <div class="details-requisities">
           <?php the_sub_field('evaluationdetail')?>
          </div>
        </div>
        <div id="ingresantes" class="admision__content__item ">
          <div class="admision__title">
            <h3><?php the_sub_field('titlemembers')?></h3>
          </div>
          <div class="adm-members">
          <?php if (have_rows('memberspos')) {while (have_rows('memberspos')) {the_row(); ?>

            <div class="adm-members__item">
            <p><?php the_sub_field('name')?></p>
            <a href="<?php the_sub_field('download')?>" class="btn__primary">Descargar</a>
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
      $('.admision__content__item').removeClass('active');
      $('#'+id).addClass('active');
    })

    $('.admision__content__calendar').click(function(){
      $(this).toggleClass('active');
      $(this).siblings().removeClass('active');
    })
  })
</script>
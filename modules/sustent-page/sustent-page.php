<div class="sustent-page">
  <div class="container">
    <div class="sustent-page__filter">
      <h3><?php the_sub_field('title'); ?></h3>
      <div class="sustent-page__filter__program">
        <div class="sustent-page__filter__program__head">
        <h4>Seleccionar programa</h4>
          <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.368 0.802751C20.0292 1.55841 19.9527 2.70694 19.1971 3.36818L11.1971 10.3682C10.5116 10.968 9.48802 10.968 8.80254 10.3682L0.802536 3.36818C0.0469131 2.70694 -0.0295684 1.55842 0.631638 0.802751C1.29287 0.047128 2.4414 -0.029354 3.19707 0.631852L9.9998 6.584L16.8025 0.631852C17.5582 -0.0293543 18.7067 0.0471276 19.368 0.802751Z" fill="#0CA64E"/>
          </svg>
        </div>
        <div class="sustent-page__filter__program__content">
        <?php if (have_rows('programs')) {while (have_rows('programs')) {the_row(); ?>
          <button class="sustent-page__filter__program__content__btn btn__primary"><?php the_sub_field('nombre'); ?></button>
        <?php }}?>
        </div>
      </div>

      <!-- Filtros pueden ir aquí -->
       <h4>Año de sustentación</h4>
       <div class="sustent-page__filter__year">
       <?php if (have_rows('ages')) {while (have_rows('ages')) {the_row(); ?>

        <div class="sustent-page__filter__year__item">
          <button class="btn__primary"><?php the_sub_field('age'); ?></button>
        </div>
        <?php }}?>
       </div>
    </div>
    <div class="sustent-page__content">
      <?php
        $query = new WP_Query([
          'posts_per_page' => -1,
          'orderby'        => 'date',
          'order'          => 'DESC',
          'post_type'      => 'sustentaciones',
        ]);
        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();
      ?>
     <div class="sustent-home__content__item"  data-aos="fade-up">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

              <div class="sustent-home__content__item__img" style="background-image:url(<?php echo $url;?>)">
                <?php if(get_field('day')): ?>
                  <div class="sustented">
                  <p>Alumn@: <?php the_field('sustented') ?></p>
                </div>
                <div class="sustent-home__content__item__date"><div class="content-date"><p><?php the_field('day') ?><?php the_field('month') ?></p> <p><strong><?php the_field('age') ?></strong></p> </div></div>
                <?php endif; ?>

              </div>
              <div class="sustent-home__content__item__text">
                <p><?php the_title() ?></p>
                <a href="<?php the_permalink() ?>" class="btn__primary">Ver detalle</a>
              </div>
            </div>

      <?php
          endwhile;
          wp_reset_postdata();
        else:
      ?>
        <p>No hay sustentaciones disponibles.</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
  const program = document.querySelector('.sustent-page__filter__program');
  const programHead = document.querySelector('.sustent-page__filter__program__head');
  const programContentBtn = document.querySelectorAll('.sustent-page__filter__program__content__btn');
  programHead.addEventListener('click', () => {
    program.classList.toggle('active');
  });
  programContentBtn.forEach(btn => {
    btn.addEventListener('click', (btn) => {
      const text = btn.target.textContent;
      programHead.querySelector('h4').textContent = text;
      program.classList.toggle('active');
    });
  });

  });
</script>
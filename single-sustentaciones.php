<?php get_header(); ?>

<?php include('menu.php')?>
<div class="single-sustentaciones">
  <div class="single-sustentaciones__header">
    <div class="single-sustentaciones__header__img">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
      <img src="<?php echo $url;?>" alt="<?php the_title(); ?>">
    </div>
    <div class="container">
      <?php if (!get_field('isSustented')): ?>
      <h3>Te invitamos a participar de la sustentación sobre</h3>
      <?php endif; ?>
      <h1><?php the_title(); ?></h1>
      <div class="single-sustentaciones__header__person">
        <h4><strong>Realizada por el alumno: </strong><?php the_field('sustented'); ?></h4>
        <div class="single-sustentaciones__header__person__item">
          <div class="single-sustentaciones__header__person__item__img">
          <?php $image=get_field('imgprofile'); if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_sub_field('name'); ?>">
              <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if (!get_field('isSustented')): ?>
      <div class="single-sustentaciones__header__time">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
          <path d="M43.3628 9.63623H14.4541C9.13216 9.63623 4.81787 13.9505 4.81787 19.2725V43.363C4.81787 48.685 9.13216 52.9993 14.4541 52.9993H43.3628C48.6847 52.9993 52.999 48.685 52.999 43.363V19.2725C52.999 13.9505 48.6847 9.63623 43.3628 9.63623Z" stroke="white" stroke-width="4.81812" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M4.81787 24.0906H52.999M19.2722 4.81812V14.4543V4.81812ZM38.5447 4.81812V14.4543V4.81812Z" stroke="white" stroke-width="4.81812" stroke-linecap="round" stroke-linejoin="round"/>
        </svg><?php the_field('day'); ?>/<?php the_field('month'); ?>/<?php the_field('age'); ?></p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
          <path d="M27.1958 50.4166C39.6222 50.4166 49.6958 40.1565 49.6958 27.5C49.6958 14.8435 39.6222 4.58331 27.1958 4.58331C14.7694 4.58331 4.6958 14.8435 4.6958 27.5C4.6958 40.1565 14.7694 50.4166 27.1958 50.4166Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M33.9458 36.6667L28.5143 31.1346C27.6703 30.2752 27.1961 29.1096 27.1958 27.8942V13.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg><?php the_field('hour'); ?></p>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php if (get_field('isSustented')): ?>
    <div class="single-sustentaciones__content">

      <div class="container">
      <div class="single-sustentaciones__content__title">
        <h2>Contenido</h2>
      </div>
        <div class="single-sustentaciones__content__menu">
        <?php if (have_rows('contentsustend')) {
            while (have_rows('contentsustend')) {
                the_row(); ?>
                <button class="single-sustentaciones__content__menu__btn <?php $isActive=get_sub_field('isActive'); if ($isActive) :?> active<?php endif; ?>" data-id="<?php the_sub_field('id')?>" ><?php the_sub_field('name')?></button>
          <?php } }?>
        </div>
        <div class="single-sustentaciones__content__container">
        <?php if (have_rows('contentsustend')) {
            while (have_rows('contentsustend')) {
                the_row(); ?>
                <div class="single-sustentaciones__content__container__item <?php $isActive=get_sub_field('isActive'); if ($isActive) :?> active<?php endif; ?>" id="<?php the_sub_field('id')?>">
                  <?php the_sub_field('content')?>
                </div>
          <?php } }?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if (!get_field('isSustented')): ?>
  <div class="header-contact__content"  data-aos="fade-up">
      <div class="container">
        <div class="header-contact__content__container">
            <div class="header-contact__content__item">
              <h4>Programa:</h4>
              <?php the_field('masterdesc')?>
            </div>
            <div class="header-contact__content__item">
              <h4>Modalidad:</h4>
              <?php the_field('modalidad')?>
            </div>
            <div class="header-contact__content__item">
              <h4>¿Dónde se dará?:</h4>
              <?php the_field('where')?>
            </div>
            <div class="header-contact__content__item">
              <h4>¿Deseas asistir?:</h4>
              <button class="openformContact btn__primary">Reserva tu sitio</button>
            </div>
        </div>
      </div>
  </div>
  <?php endif; ?>
  <?php if (!get_field('isSustented')): ?>
  <div class="single-sustentaciones__judge">
    <div class="container">
      <div class="single-sustentaciones__judge__title">
        <h3>Jurado a cargo</h3>
      </div>
      <div class="single-sustentaciones__judge__content owl-carousel owl-theme">
        <?php if (have_rows('judge')) {while (have_rows('judge')) {the_row(); ?>
          <div class="single-sustentaciones__judge__content__item">
            <div class="single-sustentaciones__judge__content__item__img">
              <?php $image=get_sub_field('img'); if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_sub_field('name'); ?>">
              <?php endif; ?>
            </div>
            <div class="single-sustentaciones__judge__content__item__content">
              <p>Facultad de <?php the_sub_field('facultad'); ?></p>
              <h4><?php the_sub_field('name'); ?></h4>
            </div>
          </div>
        <?php }}?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="single-sustentaciones__complete">
    <div class="container">
      <h3>¿Deseas ver la tésis completa de la solución?</h3>
      <a href="<?php the_field('linktestsis')?>" target="_blank" class="btn__primary">Ver tesis completa</a>
    </div>
  </div>
  <div class="single-sustentaciones__other">
    <div class="container">
      <div class="single-sustentaciones__other__title">
        <h3>Otras sustentaciones</h3>
      </div>
      <div class="sustent-home__content owl-carousel owl-theme">
      <?php $args = array(
			'posts_per_page'=> 6,
      'orderby'=> 'date',
      'post__not_in' => array(get_the_ID()),
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

</div>

<div class="modal modal-form">
  <div class="overlay"></div>
  <div class="modal-container">
    <div class="close"></div>
    <div class="modal-content">
      <?php the_field('form')?>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const modal = document.querySelector('.modal-form');
    const overlay = document.querySelector('.overlay');
    const close = document.querySelector('.close');
    const openformContact = document.querySelector('.openformContact');
    const customFieldHide = document.querySelector('.customFieldHide');
    const singleBtn = document.querySelectorAll('.single-sustentaciones__content__menu__btn');
    const singleContent = document.querySelectorAll('.single-sustentaciones__content__container__item');
    customFieldHide.value = '<?php the_title() ?>';

    singleBtn.forEach(btn => {
      btn.addEventListener('click', function() {

        singleContent.forEach(content => {
          content.classList.remove('active');
        });
        //remove active class from all buttons
        singleBtn.forEach(btn => {
          btn.classList.remove('active');
        });
        //add active class to the clicked button
        btn.classList.add('active');
        //remove active class from all items
        const id = btn.getAttribute('data-id');
        const item = document.getElementById(id);
        item.classList.add('active');

      });
    });

    openformContact.addEventListener('click', function() {
      modal.classList.add('active');
      overlay.classList.add('active');
    });

    close.addEventListener('click', function() {
      modal.classList.remove('active');
      overlay.classList.remove('active');
    });

    overlay.addEventListener('click', function() {
      modal.classList.remove('active');
      overlay.classList.remove('active');
    });

  });
</script>

<?php get_footer(); ?>
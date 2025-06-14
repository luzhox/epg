<section class="actas-page">
  <div class="container">
    <div class="actas-page__title">
      <h3><?php the_sub_field('title')?></h3>
      <div class="actas-page__title__menu">
        <div class="actas-page__title__menu__head">
          <span>Actas de directorio <?php the_sub_field('default')?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12" fill="none">
            <path d="M1 1L9.5 11L18 1" stroke="#0D3E22"/>
          </svg>
        </div>
        <div class="actas-page__title__menu__filters">
          <?php if (have_rows('buttons')) {while (have_rows('buttons')) {the_row(); ?>
            <div class="actas-page__title__menu__filters__item">
              <button type="button" class="control control-filter" data-filter=".act<?php the_sub_field('age')?>"><?php the_sub_field('name')?></button>
            </div>
          <?php }} ?>
        </div>
      </div>
    </div>
    <div id="actasCont" class="actas-page__content">
        <?php if (have_rows('actas')) {while (have_rows('actas')) {the_row(); ?>
          <div class="actas-page__content__item mix act<?php the_sub_field('age')?>">
           <p><svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
  <g clip-path="url(#clip0_4509_5020)">
    <path d="M20.125 20.625V6.96875L13.6562 0.5H5.75C4.9875 0.5 4.25623 0.802901 3.71707 1.34207C3.1779 1.88124 2.875 2.6125 2.875 3.375V20.625C2.875 21.3875 3.1779 22.1188 3.71707 22.6579C4.25623 23.1971 4.9875 23.5 5.75 23.5H17.25C18.0125 23.5 18.7438 23.1971 19.2829 22.6579C19.8221 22.1188 20.125 21.3875 20.125 20.625ZM13.6562 4.8125C13.6562 5.38437 13.8834 5.93282 14.2878 6.3372C14.6922 6.74157 15.2406 6.96875 15.8125 6.96875H18.6875V20.625C18.6875 21.0062 18.536 21.3719 18.2665 21.6415C17.9969 21.911 17.6312 22.0625 17.25 22.0625H5.75C5.36875 22.0625 5.00312 21.911 4.73353 21.6415C4.46395 21.3719 4.3125 21.0062 4.3125 20.625V3.375C4.3125 2.99375 4.46395 2.62812 4.73353 2.35853C5.00312 2.08895 5.36875 1.9375 5.75 1.9375H13.6562V4.8125Z" fill="#0CA64E"/>
    <path d="M6.61666 20.7502C6.33648 20.6382 6.11075 20.4217 5.98704 20.1465C5.70673 19.5887 5.80016 19.031 6.10204 18.5624C6.38666 18.1211 6.85816 17.7459 7.39148 17.4311C8.06701 17.0479 8.78109 16.7371 9.52185 16.5039C10.0971 15.4697 10.607 14.4005 11.0485 13.3026C10.7845 12.7028 10.5776 12.0795 10.4304 11.441C10.3067 10.866 10.2593 10.2968 10.3642 9.808C10.472 9.29913 10.7581 8.842 11.2986 8.62494C11.5746 8.51425 11.8736 8.45244 12.164 8.51425C12.31 8.54535 12.4474 8.60856 12.566 8.69931C12.6846 8.79007 12.7815 8.90608 12.8497 9.03894C12.9762 9.27469 13.0222 9.55069 13.0322 9.81231C13.0423 10.0826 13.015 10.3816 12.9647 10.6949C12.8439 11.4281 12.5765 12.3251 12.2172 13.2738C12.6138 14.122 13.0852 14.9331 13.6259 15.6974C14.2657 15.6469 14.9093 15.671 15.5435 15.7693C16.0668 15.8642 16.5987 16.0496 16.9235 16.4377C17.096 16.6447 17.201 16.8977 17.211 17.1824C17.2211 17.4584 17.1435 17.7315 17.0127 17.9917C16.8994 18.2328 16.7237 18.4393 16.5038 18.5897C16.2864 18.7315 16.0298 18.8009 15.7707 18.7881C15.2949 18.7679 14.8305 18.5063 14.4295 18.1886C13.9418 17.7854 13.5024 17.3271 13.1199 16.823C12.1478 16.9333 11.1872 17.1286 10.2492 17.4066C9.81967 18.1684 9.32933 18.8943 8.78298 19.5772C8.36323 20.0804 7.90754 20.5202 7.45041 20.7086C7.18777 20.8274 6.88985 20.8423 6.61666 20.7502ZM8.59898 18.0176C8.36035 18.1268 8.13898 18.2418 7.93916 18.3597C7.46766 18.6386 7.16148 18.9102 7.0091 19.146C6.87398 19.3544 6.8711 19.5054 6.9516 19.6649C6.96598 19.6966 6.98035 19.7167 6.98898 19.7282C7.00613 19.7236 7.02294 19.7178 7.03929 19.7109C7.23623 19.6304 7.5496 19.3731 7.9521 18.8887C8.18102 18.6084 8.39687 18.3177 8.59898 18.0176ZM10.9565 16.1057C11.4365 15.9937 11.9208 15.9011 12.4084 15.8283C12.1466 15.4277 11.902 15.0162 11.6752 14.5949C11.4498 15.1046 11.2101 15.6079 10.9565 16.1042V16.1057ZM14.4726 16.7526C14.6882 16.9869 14.8981 17.1838 15.0979 17.3419C15.4429 17.6151 15.683 17.7056 15.8138 17.7099C15.8488 17.7145 15.8843 17.7069 15.9144 17.6884C15.9742 17.6411 16.0208 17.5792 16.0495 17.5087C16.1006 17.4211 16.1298 17.3225 16.1344 17.2212C16.1335 17.1874 16.1202 17.1552 16.097 17.1306C16.0222 17.0415 15.8095 16.9121 15.3524 16.8302C15.0616 16.7816 14.7674 16.7561 14.4726 16.754V16.7526ZM11.612 11.7127C11.733 11.3224 11.829 10.9249 11.8995 10.5224C11.944 10.2522 11.9613 10.0294 11.9541 9.854C11.9545 9.75724 11.939 9.66108 11.9081 9.56938C11.8362 9.57828 11.766 9.59765 11.6997 9.62688C11.5746 9.67719 11.4725 9.77925 11.4179 10.0337C11.3604 10.3097 11.3748 10.7079 11.484 11.2153C11.5185 11.3749 11.5617 11.5416 11.6134 11.7127H11.612Z" fill="#0CA64E"/>
  </g>
  <defs>
    <clipPath id="clip0_4509_5020">
      <rect width="23" height="23" fill="white" transform="translate(0 0.5)"/>
    </clipPath>
  </defs>
</svg> <?php the_sub_field('name') ?></p>
            <div class="actas-page__content__item__text">

              </div>
              <a href="<?php the_sub_field('link')?>" class="btn__primary">Dercargar acta</a>

          </div>

        <?php }} ?>
    </div>
  </div>
</section>

<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup-pagination.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup-multifilter.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function(){

      $('.actas-page__title__menu__head').click(function() {
        $('.actas-page__title__menu').toggleClass('active');
      });

      $('.control-filter').click(function() {
        $('.actas-page__title__menu').removeClass('active');
        $(this).addClass('active');
        const text= $(this).text()
        $('.actas-page__title__menu__head span').text(text)
      });


    const containerEl = document.querySelector('#actasCont');
    const currentLimit = 20;
    const incrementAmount = 20;
 mixitup(containerEl, {
    multifilter: {
        enable: true
    },
    animation: {
        effects: 'fade translateZ(-100px)'
    },
    pagination: {
        limit: currentLimit,
    },
    load: {
        filter: '.act<?php the_sub_field('default')?>'
    },





});



    })
</script>

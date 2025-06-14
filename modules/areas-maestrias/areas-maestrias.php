<div class="areas-maestrias">
<?php if (have_rows('areas')) {
            while (have_rows('areas')) {
                the_row(); ?>
  <div class="areas-maestrias__item">
    <div class="img">
    <?php $image = get_sub_field('img');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    </div>
    <div class="text">
      <h3><?php the_sub_field('name')?></h3>
      <?php
          $link = get_sub_field('link');
          if( $link ):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="btn__primary btnSection" data-filter=".<?php the_sub_field('section')?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
    </div>
  </div>
  <?php }}?>
</div>

<script>
      document.addEventListener('DOMContentLoaded', function(){
      const btnSelects = document.querySelectorAll('.btnOptions');
      const btnSections= document.querySelectorAll('.btnSection')
      btnSections.forEach(btnSection => {
        btnSection.addEventListener('click', function(event) {
          console.log(btnSection)
            const dataFilter = btnSection.getAttribute('data-filter');
            console.log('dataFilter',dataFilter)
            btnSelects.forEach(btnOption =>{
              const filterselect= btnOption.getAttribute('data-filter')
              console.log('hola')
              if(dataFilter===filterselect){
                $('.maestrias__title__filters__header h3').text(btnOption.innerText);

              }
            })

        });
    });



      })
</script>
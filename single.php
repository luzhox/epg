<?php get_header(); ?>

<?php include('menu.php')?>
<style>
    .site-header-nav .main-navegation ul li a{
        color: #231F20;
    }
</style>
<div class="menu-white"></div>
	<div id="articulo" class="single" >
		<?php while(have_posts() ): the_post(); ?>
			<?php global $post;
			$thumbID = get_post_thumbnail_id( $post->ID );
			$imgDestacada = wp_get_attachment_url( $thumbID );?>

			<div class="container">
				<div class="single__title">
					<div class="single__cat">
					<?php $terms = get_the_terms( $post->ID , 'category');
                                  if($terms) {
                                    foreach( $terms as $term ) {
                                      $cat_obj = get_term($term->term_id, 'category');
                                      $cat_slug = $cat_obj->slug;
                                    }
                                  }
                            echo $cat_slug;?>
					</div>
				<h1 data-aos="fade-up" data-aos-offset="100"><?php the_title();?></h1>
				<p class="date"><?php the_date()?></p>
				</div>
				<div class="galeriaBlog owl-carousel owl-theme ">
				<?php
					$images = get_field('slider');
					if( $images ): ?>
        <?php foreach( $images as $image ): ?>
					<div class="galeriaBlog__item">
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
								</div>
        <?php endforeach; ?>

				<?php endif; ?>
				<?php
					$images = get_field('slider');
					if( !$images ): ?>
						<div class="galeriaBlog__item">
						<?php the_post_thumbnail();?>
								</div>
					<?php endif; ?>
				</div>
				<div class="post">
					<div class="textos">

						<div class="texto-articulo" data-aos="fade-up" data-aos-offset="100"><?php the_content();?></div>
					</div>
				</div>

			</div>
	</div>

	<div class="white-menu"></div>
	<?php endwhile; ?>
	<script>
  jQuery(document).ready(function($) {
    $('#masthead').addClass('menu-white');
    $('.site-header-nav .main-navegation ul li a').css('color','#383A3F');
    $('#brand').attr('src',$('#brand').data('brandtwo'));
  });
</script>
<?php get_footer(); ?>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#brand').attr('src', $('#brand').data('brandtwo'))
				$('#brand').attr('data-brand', $('#brand').data('brandtwo'))

        $('.site-header').addClass('whiteVer');
    })
</script>
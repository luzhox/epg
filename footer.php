</div>
<footer class="site-footer"  role="contentinfo">
        <div class="container">
                <div class="site-footer__brand">
                        <img id="logito" src="<?php echo get_theme_mod('brand_img-revert'); ?>">
                </div>
                <div class="site-footer__links">
                        <p class="title">Visítanos en:</p>
                        <p>Av. La Molina s/n La Molina, Lima 12, Lima - Perú</p>
                </div>
                <div class="site-footer__social">

                        <p class="title call">Llámanos al:</p>
                        <p>(511) 6147800 Anexo 200 – 209</p>
                </div>
                <div class="site-footer__address">
                <p class="title">Síguenos en:</p>
                        <div class="group">
                        <?php $args = array(
                                'theme_location'=> 'redes',
                                'container' => 'nav',
                                'container_class' => 'site-footer__socials',
                                'link_before'=> '<span class="sr-text">',
                                'link_after'=>'</span>'
                        );  wp_nav_menu($args);?>
                        </div>
                </div>
        </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
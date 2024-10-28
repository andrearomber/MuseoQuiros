<footer id="page-footer" class="content-section">
    <section class="footer-top">
        <div class="container">
        <?php get_template_part('template-parts/misc/site-logo/site-logo-large'); ?>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer-cols',
                'container'         => false,
                'menu_id'           => 'footer-navigation',
                'menu_class'        => 'menu',
            ) );
        ?>
        </div>
    </section>
    <?php $logos = get_field("footer_logos", "options"); 
        if ($logos): ?>
        <div class="footer-logos container">
            <?php foreach ($logos as $logo) : ?>
                <?php $img = $logo['logo']; ?>
                <div class="logo"><img src="<?php echo $img['url']?>"></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <section class="footer-bottom">
        <div class="container">
            <?php
            $facebook = get_field('rrss_facebook', 'options'); $twitter = get_field('rrss_twitter', 'options');
            $instagram = get_field('rrss_instagram', 'options'); $tiktok = get_field('rrss_tiktok', 'options');
            $youtube = get_field('rrss_youtube', 'options'); $linkedin = get_field('rrss_linkedin', 'options');

            if ($facebook || $twitter || $instagram || $tiktok || $youtube) :?>
            <ul class="rrss">
                <?php if ($facebook) :?>
                    <li><a href="<?php echo $facebook;?>" target="_blank"><i class="ti ti-brand-facebook"></i></a></li>
                <?php endif; ?>
                <?php if ($twitter) :?>
                    <li><a href="<?php echo $twitter;?>" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                <?php endif; ?>
                <?php if ($instagram) :?>
                    <li><a href="<?php echo $instagram;?>" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                <?php endif; ?>
                <?php if ($tiktok) :?>
                    <li><a href="<?php echo $tiktok;?>" target="_blank"><i class="ti ti-brand-tiktok"></i></a></li>
                <?php endif; ?>
                <?php if ($youtube) :?>
                    <li><a href="<?php echo $youtube;?>" target="_blank"><i class="ti ti-brand-youtube"></i></a></li>
                <?php endif; ?>
                <?php if ($linkedin) :?>
                    <li><a href="<?php echo $linkedin;?>" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
            <div class="copyright">
                © <?php echo date_i18n('Y'); ?> <a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a> - <?php echo lit("Todos los derechos reservados."); ?>
            </div>
        </div>
    </section>

    <script src="https://code.responsivevoice.org/responsivevoice.js?key=zp643wBW"></script>
</footer>
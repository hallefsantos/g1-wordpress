
        <footer class="footer">
            <div class="container">

                <div class="footer__line1 d-flex align-items-center justify-content-center justify-content-lg-start">
                    <?php 
                        if(has_custom_logo()):
                            the_custom_logo();
                        endif;
                    ?>
                    <a href="<?php bloginfo('url'); ?>">últimas notícias</a>
                </div>

                <div class="footer__line2 d-flex justify-content-between flex-wrap">
                    <span class="footer__line2__texto">&copy; 2000 - <?=date('Y')?> Globo Comunicação e Participações S.A.</span>
                    <nav class="footer__line2__menu">
                        <?php 
                            if(has_nav_menu('footer')):
                                wp_nav_menu(array(
                                    'theme_location' => 'footer',
                                    'container' => false,
                                    'fallback_cb' => false
                                ));
                            endif;
                        ?>
                    </nav>
                </div>
            </div>
        </footer>
 
        <?php wp_footer() ?>
    </body>
</html>
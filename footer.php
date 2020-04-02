
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-md-12">
                        <a href="#" class="informativo d-flex justify-content-between flex-column flex-sm-row text-center">
                            <strong>Coronavírus: o que foi notícia hoje</strong>
                            <span>Leia o resumo <i class="fas fa-arrow-alt-circle-right"></i></span>
                        </a>

                        <div class="destaque d-flex justify-content-between flex-wrap">

                            <?php 
                            
                                $g_principal = new WP_Query(array(
                                    'posts_per_page'    => 1,
                                    'post_type'         => 'post',
                                    'meta_key'		=> 'post_destaque',
	                                'meta_value'	=> true
                                    
                                ));

                                if($g_principal->have_posts()):
                                    while($g_principal->have_posts()):
                                        $g_principal->the_post(); ?>
                                            <?php $g_principalid = get_the_ID(); ?>
                                            <a href="" class="destaque__principal">
                                                <strong class="destaque__principal__categoria">Auxilio emergencial</strong>
                                                <h2 class="destaque__principal__titulo"><?php the_title(); ?></h2>
                                                <p class="destaque__principal__resumo"><?php the_excerpt(); ?></p>
                                            </a>
                                    
                                    <?php endwhile;
                                    wp_reset_postdata();
                                endif; ?>

                            





                            <div class="destaque__secundario d-flex flex-lg-column justify-content-between flex-sm-row flex-wrap">
                                <?php 
                                
                                $g_sedundarias = new WP_Query(array(
                                    'posts_per_page'    => 2,
                                    'post_type'     => 'post',
                                    'order' => 'DESC',
                                    'post__not_in' => array($g_principalid)
                                    
                                ));

                                $excludehome = array($g_principalid);
                                
                                if($g_sedundarias->have_posts()):
                                    while($g_sedundarias->have_posts()):
                                        $g_sedundarias->the_post(); 
                                        $g_principalid = get_the_ID(); 
                                        $excludehome[] = $g_principalid; ?>
                                        
                                        <a href="#" class="destaque__secundario__noticia d-flex justify-content-end flex-column">
                                            <h2 class="destaque__secundario__noticia__titulo"><?php the_title(); ?></h2>
                                            <h3 class="destaque__secundario__noticia__subtitulo"><?php the_excerpt(); ?></h3>
                                        </a>
                                    
                                    <?php endwhile;
                                    wp_reset_postdata();
                                endif; ?>
<!-- 
                                <a href="#" class="destaque__secundario__noticia d-flex justify-content-end flex-column">
                                    <h2 class="destaque__secundario__noticia__titulo">FOTOS: Rio tem dia de fila por comida e Centro desento</h2>
                                    <h3 class="destaque__secundario__noticia__subtitulo">Witzel promete 8 hospitais de campanha no RJ até abril</h3>
                                </a>

                                <a href="#" class="destaque__secundario__noticia d-flex justify-content-end flex-column">
                                    <h2 class="destaque__secundario__noticia__titulo">Rotina, prioridades e celular isolado: os segredos para render no home office</h2>
                                    <h3 class="destaque__secundario__noticia__subtitulo">G1 traz guia de como trabalhar em casa</h3>
                                </a> -->
                            </div>
                        </a>
                    </div>
                    
                    <?php var_dump($excludehome); ?>
                    <div class="row miolo">
                        <div class="col-lg-8 ultimasblog">

                            <!-- post here -->
                            <?php 
                                $g_noticias = new WP_Query(array(
                                    'posts_per_page'    => 10,
                                    'post_type'     => 'post',
                                    'order' => 'DESC',
                                    'post__not_in' => $excludehome
                                    
                                ));

                                if($g_noticias->have_posts()):
                                    while($g_noticias->have_posts()):
                                        $g_noticias->the_post(); 
                                        get_template_part('template-parts/post'); ?>

                                    <?php endwhile;
                                    wp_reset_postdata();
                                endif; ?>
                        </div>

                        

                        <div class="col-lg-4">

                            <!-- Sidebar vida em casa -->
                            <div class="sidebar">
                                <div class="sidebar__header">
                                    <h3 class="sidebar__header__title">Vida em casa</h3>
                                </div>

                                <div class="sidebar__content">
                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar__footer">
                                    <a href="#">Mais fique em casa <i class="fas fa-chevron-down"></i></a>
                                </div>
                            </div>
                            <!-- Fique em casa FIM -->

                            <!-- Coronasvírus - perguntas e respostas -->
                            <div class="sidebar sidebar--video">
                                <div class="sidebar__header">
                                    <h3 class="sidebar__header__title">Coronavírus - perguntas e respostas</h3>
                                </div>

                                <div class="sidebar__content">
                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar__footer">
                                    <a href="#">Tudo sobre podcasts do G1 <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <!-- Coronasvírus - perguntas e respostas  FIM -->

                            <!-- Ouça no G1 -->
                            <div class="sidebar">
                                <div class="sidebar__header">
                                    <h3 class="sidebar__header__title">Ouça no G1 🎧</h3>
                                </div>

                                <div class="sidebar__content">
                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Sem armadilhas</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Guia do home office: seus direitos e como render mais</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/download.jpeg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar__footer">
                                    <a href="#">Tudo sobre podcasts do G1 <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <!-- Ouça no G1  FIM -->

                            <!-- Blogs e Colunas -->
                            <div class="sidebar sidebar--colunas">
                                <div class="sidebar__header">
                                    <h3 class="sidebar__header__title">Blogs e colunas</h3>
                                </div>

                                <div class="sidebar__content">
                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Valdo Cruz</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/coluna.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Valdo Cruz</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/coluna.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="sidebar__post d-flex">
                                        <div>
                                            <h5 class="sidebar__post__subtitle">Valdo Cruz</h5>

                                            <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                        </div>

                                        <a href="#" class="sidebar__post__thumbnail">
                                            <img src="<?php bloginfo('template_url')?>/assets/img/coluna.jpg" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="sidebar__footer">
                                    <a href="#">Mais blogs e colunas <i class="fas fa-chevron-down"></i></a>
                                </div>
                            </div>
                            <!-- Blogs e Colunas  FIM -->

                            <!-- Mais lidas -->
                            <div class="sidebar sidebar--maislidas">
                                <div class="sidebar__header">
                                    <h3 class="sidebar__header__title">Mais Lidas</h3>
                                </div>

                                <div class="sidebar__content">

                                    <div class="sidebar__post">
                                        <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                    </div>

                                    <div class="sidebar__post">
                                        <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                    </div>

                                    <div class="sidebar__post">
                                        <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                    </div>

                                    <div class="sidebar__post">
                                        <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                    </div>

                                    <div class="sidebar__post">
                                        <h4 class="sidebar__post__title"><a href="#">Com chancela do STF e STJ, Senado vai avaliar criação de regime jurídico emergencial</a></h4>
                                    </div>

                                </div>
                            </div>
                            <!-- Blogs e Colunas  FIM -->

                            

                        </div>
                    </div>

                </div>
            </div>
        </main>

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
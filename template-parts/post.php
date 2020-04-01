<article class="post d-flex">
    <a href="#" class="post__thumbnail">
        <img src="<?php bloginfo('template_url')?>/assets/img/blog.jpg" alt="">
    </a>
    <div class="post__content">
        <h3 class="post__subtitle">Oportunidades</h3>
        <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post__resumo"><?php the_excerpt(); ?></p>
        <div class="post__datawrap">
            <span>Há 5 horas</span> - Em Política
        </div>
    </div>
</article>
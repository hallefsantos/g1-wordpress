<?php get_header('navega');?>
<main id="miolo">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="page__title">Erro 404</h2>

                <h3>Parece que a página que está procurando não existe, <a href="<?php bloginfo('url') ?>">voltar para home.</a></h3>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>  
</main>

<?php get_footer();?>
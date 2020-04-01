<?php get_header();?>

<main id="miolo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="row justify-content-between">
                    <div class="col-lg-12">
                        <h1 class="miolo__title"><?php the_title(); ?></h1>

                        <div class="miolo-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</main>

<?php get_footer();?>
<?php 
    $id = get_the_ID(); 
    $cats = get_the_category($id);
?>
<article class="post d-flex">

    <?php if(has_post_thumbnail()): ?>
        <a href='<?php the_permalink(); ?>' class="post__thumbnail">
            <?php the_post_thumbnail( 'full', array('class'=>'post_thumb')); ?>
        </a>
    <?php endif; ?>

    <div class="post__content">
        <h3 class="post__subtitle">Oportunidades</h3>
        <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post__resumo"><?php the_excerpt(); ?></p>
        <div class="post__datawrap">
            <span><?php echo meks_time_ago();?></span> - Em <?php echo $cats[0]->name; ?>
        </div>
    </div>
</article>
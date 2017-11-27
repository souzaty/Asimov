<article class="post__format">
    <h1 class="post__title"><?php the_title(); ?></h1><?php echo get_post_format(); ?>
    <?php the_post_thumbnail(array(180,100), array('class' => 'alignleft') ); ?>
    <p class="post__publish">Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
    <p class="post__category">Categorias: <?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', ') ?></p>
    <p><?php the_excerpt(); ?></p>
</article>

<article class="post__format--video">
    <h1 class="post__title"><?php the_title(); ?></h1>
    <p class="post__publish">Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
    <p class="post__category">Categorias: <?php the_category(' '); ?></p>
    <p><?php the_content(); ?></p>
</article>

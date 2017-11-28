<article class="post__format">
    <h1 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><?php echo get_post_format(); ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(180,100), array('class' => 'alignleft') ); ?></a>
    <p class="post__publish">Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
    <p class="post__category">Categorias: <?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', ') ?></p>
    <p><?php the_excerpt(); ?></p>
</article>

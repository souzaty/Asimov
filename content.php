<article class="">
    <h1 class="tb-hero-title"><?php the_title(); ?></h1><?php echo get_post_format(); ?>
    <?php the_post_thumbnail(array(180,100), array('class' => 'alignleft') ); ?>
    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
    <p>Categorias: <?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', ') ?></p>
    <p><?php the_content(); ?></p>
</article>

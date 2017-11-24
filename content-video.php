<article class="">
    <h1 class="tb-hero-title"><?php the_title(); ?></h1>
    <?php the_post_thumbnail(array(180,100), array('class' => 'alignleft') ); ?>
    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
    <p>Categorias: <?php the_category(' '); ?></p>
    <p><?php the_content(); ?></p>
</article>

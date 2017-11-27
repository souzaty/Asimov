<article class="post__format">
    <div class="post__miniature post__miniature--large">
        <?php the_post_thumbnail('large', array('class' => 'img-responsive') ); ?>
    </div>
    <h1 class="post__title"><?php the_title(); ?></h1><?php echo get_post_format(); ?>
    <p class="post__publish">Por <span><?php the_author(); ?></span> em <span><?php the_category(' '); ?></span> | <?php the_tags('Tags: ', ', ') ?></p>
    <p class="post__date"><?php echo get_the_date(); ?></p>
    <p><?php the_excerpt(); ?></p>
</article>

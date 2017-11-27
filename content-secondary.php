<article class="post__format">
    <div class="post__miniature post__miniature--medium">
        <?php the_post_thumbnail('large', array('class' => 'img-responsive') ); ?>
    </div>
    <h1 class="post__title"><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
</article>

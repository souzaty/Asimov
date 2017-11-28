<article class="post__format">
    <div class="post__miniature post__miniature--medium">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'img-responsive') ); ?></a>
    </div>
    <h1 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p><?php the_excerpt(); ?></p>
</article>

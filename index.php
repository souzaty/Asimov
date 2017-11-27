<?php get_header(); ?>
<div class="content">
    <main>
        <section class="content__middle">
            <div class="container">
                <div class="row">
                    <div class="content__news col-md-9">
                    <!-- The Loop -->
                        <?php
                            //Se houver post
                            if(have_posts()) :
                                // Enquanto houver post, chame o post de determinada maneira.
                                while (have_posts()) : the_post();
                         ?>
                         <?php get_template_part('content', get_post_format()); ?>
                         <?php
                             endwhile;
                            else:
                         ?>
                         <p>Não há posts para serem exibidos.</p>
                         <?php
                            endif;
                          ?>
                    <!-- End Loop -->
                    </div>
                    <div class="col-md-3">
                        <aside class="sidebar__right">
                            <?php get_sidebar('blog'); ?>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>

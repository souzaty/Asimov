<?php get_header(); ?>
<div class="content">
    <main>
        <section class="content__slide">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </section>
        <section class="content__services">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </section>
        <section class="content__middle">
            <div class="container">
                <div class="row">
                    <aside class="content__left-bar col-md-3"></aside>
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
                </div>
            </div>
        </section>
        <section class="content__map container"></section>
    </main>
</div>
<?php get_footer(); ?>

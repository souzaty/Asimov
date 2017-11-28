<?php get_header(); ?>
<div class="" id="primary">
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php

                    while(have_posts()): the_post();
                        get_template_part('content', 'single');
                    endwhile;

                     ?>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar__right">
                        <?php get_sidebar('blog'); ?>
                    </aside>
                </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>

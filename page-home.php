<?php get_header(); ?>
<div class="content">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row">
                    <h1>Slide</h1>
                </div>
            </div>
        </section>
        <section class="services">
            <svg class="angle-top" viewBox="0 0 1280 65" xmlns="http://www.w3.org/2000/svg">
        		<path d="M1280 0v65L0 0" fill="#FFF" fill-rule="evenodd"></path>
        	</svg>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Serviços</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis leo, egestas quis nibh at, vehicula tempus odio. Fusce sed velit eu libero pretium placerat ac sodales libero. Nam vel scelerisque metus, nec iaculis enim. Aliquam odio metus, rhoncus eu lorem eget, porttitor venenatis ex.</p>
                        <p>Curabitur est ipsum, pulvinar ac augue sit amet, tempus tempus odio. Fusce lacinia, libero vitae consectetur rhoncus, massa diam consequat lectus, vitae finibus nisi dolor vitae neque. Nulla bibendum auctor ullamcorper. Praesent feugiat, massa vel dapibus mattis, ligula dui malesuada diam</p>
                    </div>
                </div>
            </div>
            <svg class="svg-wave-hero" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 507 62">
                <polygon points="0 41.5 107.03 0 290.01 52 409.69 31 507 62 0 62 0 41.5"></polygon>
                <polygon points="164.5 58.5 245 11 349.43 58.5 164.5 58.5" style="opacity: 0.2"></polygon>
            </svg>
        </section>
        <section class="middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="sidebar__left">
                            <?php get_sidebar('home'); ?>
                        </aside>
                    </div>
                    <div class="news col-md-9">
                        <div class="row">
                            <?php
                            $size   = 'col-md-12';
                            $op_content = 'featured';

                            $itens = get_categories(array('include' =>'21,24,4'));

                            foreach($itens as $item):

                            $args = array(
                                'category__in'      => $item->cat_ID,
                                'posts_per_page'    => 1
                            );
                            $consulta = new WP_Query($args);

                            if($consulta->have_posts()):
                                while($consulta->have_posts()):
                                    $consulta->the_post();
                            ?>
                            <div class="<?php echo $size; ?>">
                                <?php get_template_part('content', $op_content) ?>
                            </div>
                            <?php

                                $size   = 'col-md-6';
                                $op_content = 'secondary';

                                endwhile;
                                wp_reset_postdata();
                            endif;
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map container"></section>
    </main>
</div>
<?php get_footer(); ?>

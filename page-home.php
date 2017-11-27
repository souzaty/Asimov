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
                    <h1>Serviços</h1>
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
                        <p>Esta será a área de notícias da home.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="map container"></section>
    </main>
</div>
<?php get_footer(); ?>

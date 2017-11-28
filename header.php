<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Asimov, The Good Doctor</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
        <!-- Function load styles -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header__content">
            <div class="header__top-bar">
                <div class="container">
                    <div class="row">
                        <div class="header__social col-md-4">
                            <ul class="social-networks square spin-icon">
                                <li><a href="#" class="icon-facebook">Facebook</a></li>
                                <li><a href="#" class="icon-twitter">twitter</a></li>
                                <li><a href="#" class="icon-github">Github</a></li>
                                <li><a href="#" class="icon-linkedin">LinkedIn</a></li>
                            </ul>
                        </div>
                        <div class="header__search col-md-8">
                            <!-- Search Form -->
                            <form action="<?php echo home_url( '/' ); ?>" method="get" class="top__search form-inline">
                                <fieldset>
                            		<div class="input-group">
                            			<input class="top__search--input" type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
                            			<span class="input-group-btn">
                            				<button type="submit" class="top__search--submit">
                                                <?php _e("","wpbootstrap"); ?>
                                                <span class="glyphicon glyphicon-search search__icon--light" aria-hidden="true"></span>
                                            </button>
                            			</span>
                            		</div>
                                </fieldset>
                            </form>
                            <!-- End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__main">
                <div class="container">
                    <div class="row">
                        <div class="header__brand col-md-3">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                        if ( has_custom_logo() ) {
                                                echo '<img class="" src="'. esc_url( $logo[0] ) .'">';
                                        } else {
                                                echo '<h1 class="header__logo--big">'. get_bloginfo( 'name' ) .'</h1>';
                                        } ?>
                            </a>
                        </div>
                        <div class="header__navbar col-md-9 text-right">
                            <?php wp_nav_menu(array('theme_location' => 'menu_principal') ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>

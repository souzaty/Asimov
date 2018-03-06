<?php
/*
Template name: Página Genérica
*/
 ?>
<?php get_header(); ?>
<section class="wrapper">
    <div class="container">
        <main>
            <div class="content__wrapper">
            <!-- The Loop -->
             <?php
                 //Se houver post
                 if(have_posts()) :
                     // Enquanto houver post, chame o post de determinada maneira.
                     while (have_posts()) : the_post();
              ?>
                  <h1><?php the_title(); ?></h1>
                  <p>Autor: <?php the_author(); ?></p>
                  <p><?php the_content(); ?></p>
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
        </main>
    </div>
</section>
 <?php get_footer(); ?>

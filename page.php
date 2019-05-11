<?php
get_header();
 ?>


  <div class="container">
    <div class="row">
      <section class="main col-md-12 col-lg-8">
        <div class="row posts single-post">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article class="col-md-12 post">
              <div class="contenedor">
                <div class="info">
                  <h2 class="titulo"><?php the_title(); ?></a></h2>
                  <p class="fecha"><?php echo get_the_date(); ?></p>
                  <div class="texto">
                    <?php echo the_content(); ?>
                  </div>
                </div>
              </div>
            </article>

          <?php endwhile; else : ?>
            <article class="col-md-6 post">
              <div class="contenedor">
                <div class="info">
                  <h2 class="titulo">El post que buscas no existe</h2>
                  <div class="extracto">
                    <p>Revisa que la URL que ingresaste es correcta</p>
                  </div>
                </div>
              </div>
            </article>
          <?php endif; ?>
      </section>

      <?php get_sidebar(); ?>


    </div>
  </div>

  <?php
  get_footer();
   ?>

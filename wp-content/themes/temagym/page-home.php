<?php get_header(); ?>

       <section class="panel b-yellow" id="2">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="about-content">
                      <div class="heading">
                        <h4>Sobre WHPH</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="about-box-content">
                            <img src="<?php echo get_theme_file_uri() ?>/img/about-image.png" alt="">
                          </div>
                        </div>

                        <!-- About Section -->
                        <div class="col-md-7 col-md-offset-5">
                          <div class="about-box-text">
                            <h4>Compartir es la clave del ejercicio</h4>
                            <p>En WHPH tenemos una gran cantidad de disciplinas, maquinas e implementos para practicar deportes de la mejor manera posible.</p>
                            <div class="primary-button">
                              <a href="#3">Ver nuestros cursos</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>

        <!-- Course Section -->    
        <section class="panel b-red" id="3">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="price-content">
                      <div class="heading">
                        <h4>Nuestros Cursos</h4>
                      </div>
                      <div> 
                        <div class="col-md-12">
                          <div class="row">    
                          <div class="owl-carousel owl-theme projects-container">
  
                         <?php
                         $arg = array(
                            'post_type'  => 'cursos',
                            'posts_per_page' => 3,
                          );
                          $get_arg = new WP_Query( $arg );
                                while ( $get_arg->have_posts() ) {
                            $get_arg->the_post();
                              ?>

                            <div>
                              <div class="price-item">
                                <a href="<?php the_post_thumbnail_url( 'large' );?>" >
                                 <?php the_post_thumbnail();?> </a>
                                <div class="text-content">
                                <h4> <?php the_title() ?> </h4>
                                <p> <?php the_content() ?> </p>
                                  <div class="primary-button">
                                    <a href="#">Inscribirme</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                                <?php } wp_reset_postdata();
                                        ?>
                              

                           </div>
                          </div>     
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>

    

        <!-- Contact Section -->
        <section class="panel b-green" id="4">
          <div class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="contact-content">
                      <div class="heading">
                        <h4>Contáctanos</h4>
                        <h5>Rellena el siguiente formulario para inscrirte en nuestros cursos.</h5>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="contat-form">
                            <form id="contact" action="" method="post">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Tu nombre" required="">
                              </fieldset>
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Tu correo" required="">
                              </fieldset>
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tu mensaje" required=""></textarea>
                              </fieldset>
                              <fieldset>
                                <button type="submit" id="form-submit" class="btn">Enviar</button>
                              </fieldset>
                            </form>
                          </div>
                        </div>

                                  <?php
                         $arg = array(
                            'post_type'  => 'direccion',
                            'posts_per_page' => 0,
                          );
                          $get_arg = new WP_Query( $arg );
                                while ( $get_arg->have_posts() ) {
                            $get_arg->the_post();
                              ?>
                        <div class="col-md-4">
                          <div class="more-info">
                            <h4> <?php the_title() ?></h4>
                            <p><em> <?php the_content() ?></em></p>
                            <h4> <?php the_title() ?></h4>
                            <p> <?php the_content() ?></p>
                          </div>      
                      </div>
                      <?php } wp_reset_postdata();
                                        ?>
                        </div>
                    </div>
                  </div>

                <?php get_footer(); ?>
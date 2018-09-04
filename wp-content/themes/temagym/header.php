<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Work Hard, Play Hard | GYM</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->

        <?php wp_head() ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Navbar -->
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
        <?php wp_nav_menu( array( 
        'theme_location'  => 'header-menu',
        'items_wrap' => '<ul class="nav__list">%3$s</ul>',
        'menu_class' => 'nav__item'
        
              )
            ); ?>
          <?php } ?>

        </nav>

        

          <!-- Header Section -->
        <section class="panel b-blue" id="1">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">

                  <?php
                    $arg = array(
                      'post_type'    => 'proyecto',
                      'posts_per_page' => -1
                    );
                    $get_arg = new WP_Query( $arg );
                    while ( $get_arg->have_posts() ) {
                      $get_arg->the_post();
                    ?>
                  <div class="col-md-8 col-md-offset-2">
                    <div class="home-content">
                      <div class="home-heading">
                       <h1><?php the_title() ?></h1>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="home-box-content">
                            <div class="left-text">
                            <h4> <?php the_title() ?> </h4>
                              <p>  <?php the_content() ?> </p>
                              <div class="primary-button">
                                <a href="#2">Conoce más</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

        <?php } wp_reset_postdata();
      ?>
                </div>
              </div>
            </div>
          </article>
        </section>
        
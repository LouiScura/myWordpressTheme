<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fontello.css">
        <link rel="icon" href="img/luisitofavi.png" sizes="32x32" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type='text/css' href='<?php bloginfo('template_url'); ?>/css/estilos.css'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>
            <?php
                if(is_home()){
                    echo get_bloginfo('name');
                }else if(is_single()){
                    echo the_title();
                }else{
                    echo get_bloginfo('name');
                }
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-6 logo  mb-3">
                        <a href="<?php bloginfo('url'); ?>">Objects</a>
                        <p>Lorem Ipsum is simply dummy text.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="menu">
                            <nav class="navbar navbar-luis-custom navbar-dark navbar-expand-md bg-dark mb-3" role="navigation">
                                <div class="container-menu">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expande="false" aria-label="Toggle navigation">
                                        <span class=""></span>  
                                    </button>
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location'  => 'menu-top',
                                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                            'container'       => 'div',
                                            'container_class' => 'collapse navbar-collapse',
                                            'container_id'    => 'bs-example-navbar-collapse-1',
                                            'menu_class'      => 'navbar-nav mr-auto',
                                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'          => new WP_Bootstrap_Navwalker(),
                                        ));
                                    ?>
                                </div>
                            </nav>   
                        </div>
                    </div>
                </div>
            </div>
        </header>
<?php get_header(); ?>
<div class="container mt-3">
    <div class="row">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carro1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carro2.jpg" alt="Second slide" style="width:1140px !important; height:407px !important">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carro3.jpg" alt="Third slide" style="width:1140px !important; height:407px !important">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section class="main col-12 col-sm-12 col-md-8">            
            <div class="row posts">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <article class="col-6 col-md-12 articulos">
                    <div class="contenedor">
                        <div class="info">
                            <h2 class="titulo"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <div class="extracto"><?php the_content(); ?></div>
                        </div>
                        <div>
                            <a href="<?php the_permalink();?>" class="imagen-home">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                            </a>
                        </div>
                    </div>
                </article>

                <?php endwhile; else : ?>
                <article class="col-12 col-md-12 articulos">
                    <div class="contenedor">
                        <div class="info">
                            <h2 class="titulo">El Post que buscas no existe</h2>
                            <div class="extracto"><p>Revisa que la URL que hayas ingresado sea correcta</p></div>
                        </div>
                    </div>
                </article>
                <?php endif ;?>
            </div>
        </section>

        <section class="sidebar col-12 col-md-4">
            <?php get_sidebar();?>
            <!--
            <div class="others-widget">
                
                /*
                 //Setup query to show the ‘services’ post type with ‘8’ posts.
                 //Output the title with an excerpt.
            
                    $args = array(  
                        'post_type' => 'movie',
                        'post_status' => 'publish',
                        'posts_per_page' => 8, 
                    );
                
                    $loop = new WP_Query( $args ); 
                    echo '<h3>Recent Movies</h3>';
                    echo '<ul>';
                    while ( $loop->have_posts() ) : $loop->the_post();
                        echo '<li><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></li>';
                    endwhile;
                    echo '</ul>';
                
                    wp_reset_postdata(); 
                */
                ?>
            </div>
            -->
        </section> 
    </div>
</div>
<?php get_footer(); ?>
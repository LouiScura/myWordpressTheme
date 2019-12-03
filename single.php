<?php get_header(); ?>
<div class="container mt-3">
    <div class="row">
        <section class="main col-12 col-sm-12 col-md-12"> 
            <div class="row singlePosts">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <article class="col-12 col-sm-8 articulos">
                    <div class="contenedor">
                        <div class="imagen">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                        </div>
                        <div class="info">
                            <h2 class="titulo"><?php the_title();?></h2>
                            <p class="fecha"><?php echo get_the_date();?></p>
                            <div class="texto"><?php the_content(); ?></div>
                            <!-- <p class="extracto"><?php the_content(); ?></p> -->
                        </div>
                    </div>
                </article>

                <section class="comentarios col-sm-8">
                    <?php comments_template();?>
                </section>

                <?php endwhile; else : ?>
                <article class="col-12 col-sm-12 articulos">
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
    </div>
</div>
<?php get_footer(); ?>
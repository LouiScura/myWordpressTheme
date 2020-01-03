
<?php 
/* Template Name: contact-us */ 
    get_header(); 
?>

<div class="container mt-3">
    <div class="row">
        <section class="main col-12 col-sm-12 col-md-12"> 
            <div class="row singlePosts">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <article class="col-12 col-sm-12 articulos">
                    <div class="contenedor">
                        <div class="imagen">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                        </div>
                        <div class="col-sm-12 info">
                            <div class="texto contact-us">
                                <h3 class="titlteContact">Are you interesting? Contact us!</h3>
                               <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </article>

                <?php endwhile; else : ?>
                <article class="col-12 col-sm-12 articulos">
                    <div class="contenedor">
                        <div class="info">
                            <h2 class="titulo">The post you are looking for does not exist</h2>
                            <div class="extracto"><p>Make sure the url you entered is correct.</p></div>
                        </div>
                    </div>
                </article>
                <?php endif ;?>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="container mt-3">
    <div class="row">
        <section class="main col-12 col-sm-12 col-md-12"> 
            <div class="row singlePosts">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <article class="col-12 col-sm-12 articulos about-us-background">
                    <div class="contenedor">
                        <div class="imagen">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                        </div>
                        <div class="col-sm-12 info">
                            <h2 class="titulo titleAbout"><?php the_title();?></h2>
                            <div class="texto">

                                <!-- Button trigger modal who are we? -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                    Who are we?
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLongTitle">About us</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button trigger modal our words-->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#examplelLong">
                                    Our words
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="examplelLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalTitle">Our words</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>


                                 <!-- Button trigger modal our words-->
                                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#examplelLongLong">
                                    We do the work 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="examplelLongLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalTitleTitle">We do the work</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- <p class="extracto"><?php the_content(); ?></p> -->
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
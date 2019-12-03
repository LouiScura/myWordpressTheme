<?php get_header();?>


<?php
//Declare needed variables

//Get the featured image
if(has_post_thumbnail() ){
    $featuredimg = get_the_post_thumbnail_url();
}else{
    $featuredimg = 'PATH-TO-DEFAULT-IMG';
}

//Get the genre
if(get_field('movie_genre')){
   $genres = get_field('movie_genre');
}

//Get duration field
if(get_field('movie_duration')){
    $duration = get_field('movie_duration');
}

//Get rating field 
if(get_field('movie_rating')){
    $rating = get_field('movie_rating');
}

/*Get movie image field (url)
if(get_field('movie_picture')){
    $movie_image = get_field('movie_picture');
}


/*Get release date field
if(get_field('movie_release_date')){
    $release_date = get_field('movie_release_date',false, false);
    $releaseDate  = new DataTime($release_date);
}
*/

//Get country field
if(get_field('movie_country')){
    $country = get_field('movie_country');
}

//Get language field
if(get_field('movie_language')){
    $language = get_field('movie_language');
}

//Get budget field
if(get_field('movie_budget')){
    $budget = get_field('movie_budget');
}

//Get opening_weeked field
if(get_field('opening_weekend_revenenue')){
    $opening_weekend_revenenue = get_field('opening_weekend_revenenue');
}

//Get movie trailer
if(get_field('movie_trailer')){
    $movie_trailer = get_field('movie_trailer');
}

//Get main character image
if(get_field('cast_image')){
    $cast_image = get_field('cast_image');
}
//Get Character Name
if(get_field('character_name')){
    $character_name = get_field('character_name');
}
//Get Character Information
if(get_field('character_information')){
    $character_information = get_field('character_information');
}
//Get movie plot
if(get_field('movie_plot')){
    $movie_plot = get_field('movie_plot');
}
?>


<!--HTML CODE-->
<div id="main" class="main-content clearfix" data-aos="flipt-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
    <?php while(have_posts()) : the_post(); ?>
        <div class="banner-section clearfix" data-aos="fade-right" data-aos-duration="1500" style="background-image: url(<?php echo $featuredimg; ?>);">
            <div class="container">
                <div class="col column1 clearfix"></div>
                <div class="col column2 clearfix">
                    <h1 class="post=title"><?php echo get_the_title();?></h1>
                    <div class="post-details">
                        <p class="genre">
                            <?php
                            foreach($genres as $genre){
                                echo '<span>'.$genre. '</span>';
                            }
                            ?><span class="duration"><?php echo ' '.$duration . 'mins';?></span>

                        </p>
                        <p class="rating">Rating: <?php echo $rating; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-section clearfix" data-aos="zoom-out-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
            <div class="container">
                <div class="col column3 clearfix">
                    <div class="movie-image">
                            <?php if(get_field('movie_picture') ):?>
                                <img src="<?php the_field('movie_picture');?>"/>
                            <?php endif; ?>
                    </div>
                    <h2>Movie info</h2>
                    <div class="movieinfo">
                        <!--<p><strong>Release Date:</strong><?php //echo $releaseDate->format('j F Y');?>(<?php echo $country;?>)</p>-->
                        <p class="genre2"><strong>Genres:</strong>
                            <?php
                                foreach($genres as $genre){
                                    echo '<span>'. $genre . '</span>';
                                }
                            ?>
                        </p>
                        <p><strong>Country: </strong><?php echo $country; ?></p>
                        <p><strong>Language: </strong><?php echo $language; ?></p>
                        <p><strong>Budget: </strong><?php echo $budget; ?>(estimated)<p>
                        <p><strong>Opening Weekend: </strong><?php echo $opening_weekend_revenenue;?></p>        
                    </div>
                </div>
                <div class="col column4 clearfix" data-aos="zoom-out-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
                    <div class="plot">
                        <h2>Movie Storyline</h2>
                        <p><?php echo $movie_plot;?></p>
                    </div>
                    <div class="trailer" data-aos="zoom-out-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
                        <h2>Movie trailer</h2>
                        <div class="video-frames">
                        <?php 
                            $link = get_field('movie_trailer');
                            echo $link
                        ?>
                        </div>
                    </div>
                    <div class="cast" data-aos="zoom-out-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
                        <h2>Movie cast</h2>
                        <div class="image-cast">
                            <?php if(get_field('cast_image') ):?>
                                <img src="<?php the_field('cast_image');?>"/>
                            <?php endif; ?>
                            <div class="infoCharacter">
                                <p><strong><?php echo $character_name?></strong></p>
                                <p><?php echo $character_information?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>



<?php get_footer();?>
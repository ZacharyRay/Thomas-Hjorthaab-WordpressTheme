<?php
/* 
Template Name: Presentation
*/
get_header();
?>
<div class="presentation_wrapper">
    <?php
    // Check value exists.
    if( have_rows('content') ):

        // Loop through rows.
        while ( have_rows('content') ) : the_row();
            // Case: Paragraph layout.


            // Gallery slider

            if( get_row_layout() == 'slider' ):
                $text = get_sub_field('info');
                $slider_image = get_sub_field('images');
                $size = 'full';
                // Do something...
                ?>
                <div class="slider-wrap">
                    <div class="text"><?= $text ?></div>
                    <div class="main-carousel">
                        <?php foreach($slider_image as $the_image) { ?>
                        <div class="carousel-cell" style="background-image: url('<?= $the_image ?>')"></div>
                        <?php } ?>
                    </div>
                </div>
                <?php 
            endif;

                // Single image

            if( get_row_layout() == 'single_image' ):
                $image_text = get_sub_field('info');
                $the_single_image = get_sub_field('image');
                $size = 'full';
                // Do something...
                ?>
                <div class="image-wrap">
                    <div class="text"><?= $image_text ?></div>
                    <div class="single-image" style="background-image: url('<?= $the_single_image ?>')"></div>
                </div>
                <?php 
            endif;

                // Seperation line

                if( get_row_layout() == 'seperation_line' ):
                    $seperation_image = get_sub_field('image');
                    $size = 'full';
                    // Do something...
                    ?>
                    <div class="seperation-wrap">
                        <div class="seperation-line-image" style="background-image: url('<?= $seperation_image ?>')"></div>
                    </div>
                    <?php 
                endif;


                // Text

                if( get_row_layout() == 'text' ):
                    $text = get_sub_field('content_text');
                    $size = 'full';
                    // Do something...
                    ?>
                    <div class="content-text">
                        <?= $text ?>
                    </div>
                    <?php 
                endif;

                // Video gallery

                if( get_row_layout() == 'video' ):
                    $video_field = get_sub_field('content_video');
                    $video_text = get_sub_field('video_text');
                    $size = 'full';
                    // Do something...
                    ?>
                    <div class="slider-wrap">
                        <div class="text">
                            <?= $video_text ?>
                        </div>
                        <div class="carousel carousel-video-gallery">
                            <?php foreach($video_field as $the_video) { ?>
                                <div class="carousel-cell">
                                    <iframe class="carousel-cell" src="<?= $the_video['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php 
                endif;



        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;

    ?>
</div>

<?php get_footer(); ?> 
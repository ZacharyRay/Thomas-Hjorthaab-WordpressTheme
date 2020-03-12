<?php
/* 
Template Name: Frontpage
*/

$id = get_queried_object_id();
$content = get_field('content', $id);
$pages = $content['page_content'];

get_header();
?>
<div class="story_wrapper" id="fullpage">

<!-- scene one  -->
        <div class="scene_wrapper section">
            <div class="scene_grid">
                <div class="scene_image" id="slide_right" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-1-madeby.png');"></div>
                <div class="scene_image" id="slide_left" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-1-title.png');"></div>
                <div class="scene_image" id="slide_right" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-1-booktitle.png');"></div>
                <div class="scene_image" id="slide_left" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-1-clock.png');"></div>
            </div>
        </div>
<!-- scene two -->

        <div class="scene_wrapper section">
            <div class="scene_grid">
                <div class="scene_image scene_text to_fnt" id="fade_in_text" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-2-text.png');"></div>
                <div class="scene_image to_fnt" id="blink" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-2-eye.png');"></div>
                <div class="floating">
                <div class="scene_image" id="down" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-2-wall.png'); animation-duration: 2s;"></div>
                </div>
                <div class="scene_image" id="fade_in" style="background-image: url('http://localhost:8888/thomas-hjorthaab/wp-content/uploads/2020/02/scene-2-bed.png');"></div>
                <div class="scene_text_mobile" id="fade_in_text">HOST-HOST-HOST! Fims vågner ved lyden af nogle høje host. Det er Ravner.</div>
            </div>
        </div>

<!-- scene three  -->

<?php foreach($pages as $new_page ) { 
    $the_page = $new_page['add_page'];
    ?>
        <div class="scene_wrapper section">
            <div class="scene_grid">
            <?php foreach($the_page as $new_image ) { ?>
                <div class="<?= $new_image['choose_effect'] ?>">
                <div class="scene_image" id="<?= $new_image['choose_animations'] ?>" style="background-image: url('<?= $new_image['add_image']; ?>'); z-index: <?= $new_image['choose_layer'] ?>"></div>
                </div>
            <?php } ?>
            </div>
        </div>
        <?php } ?>






        
</div>



<?php get_footer(); ?> 
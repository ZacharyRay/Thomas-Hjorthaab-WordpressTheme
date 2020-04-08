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
        <div class="arrow_wrapper">
            <div class="scene_one_arrow">
                <i class="fas fa-angle-down"></i>
            </div>
        </div>
    <!-- Scene -->
    <?php foreach($pages as $new_page ) { 
        $the_page = $new_page['add_page'];
        ?>
            <div class="scene_wrapper section">
                <div class="scene_grid">
                <?php foreach($the_page as $new_image ) { ?>
                    <div class="<?= $new_image['choose_effect'] ?>">
                        <div class="scene_image <?= $new_image['text_responsiveness'] ?>" id="<?= $new_image['choose_animations'] ?>" style="background-image: url('<?= $new_image['add_image']; ?>'); z-index: <?= $new_image['choose_layer'] ?>"></div>
                        <div class="scene_text_mobile" id="<?= $new_image['choose_animations'] ?>"><?= $new_image['text_field_mobile'] ?></div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php } ?>  
    </div>

<?php get_footer(); ?> 
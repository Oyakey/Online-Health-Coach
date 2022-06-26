<?php

//dd(get_field('post_1'));

$baseline = get_field('baseline');
$title = get_field('title');
$btn_text = get_field('btn_txt');
$btn_url = esc_url(get_field('btn_url'));

$course1_img = get_field('image', get_field('post_1')->ID);
$course1_title = get_field('post_1')->post_title;
$course1_description = get_field('post_1')->post_excerpt;

$course2_img = get_field('image', get_field('post_2')->ID);
$course2_title = get_field('post_2')->post_title;
$course2_description = get_field('post_2')->post_excerpt;

$course3_img = get_field('image', get_field('post_3')->ID);
$course3_title = get_field('post_3')->post_title;
$course3_description = get_field('post_3')->post_excerpt;
?>
<div class="row justify-content-beetween mb-5">    
    <div class="col-md-8">
        <span class="heading-title"><?php echo $baseline ?></span>
        <h2><?php echo $title ?></h2>
    </div>
    <div class="col-md-4 text-md-end text-start"><a class="btn btn-primary" href="<?php echo $btn_url ?>"><?php echo $btn_text ?></a></div>
</div>
<div class="row">
    <div class="col-md-4 course-element mb-4">
        <img class='img-fluid w-100 mb-4' src="<?php echo $course1_img ?>">
        <div>
            <h3 class="mb-4">
            <?php echo $course1_title ?>
            </h3>
            <p><?php echo $course1_description ?></p>
        </div>
    </div>
    <div class="col-md-4 course-element mb-4">
        <img class='img-fluid w-100 mb-4' src="<?php echo $course2_img ?>">
        <div>
            <h3 class="mb-4">
            <?php echo $course2_title ?>
            </h3>
            <p><?php echo $course2_description ?></p>
        </div>
    </div>
    <div class="col-md-4 course-element mb-4">
        <img class='img-fluid w-100 mb-4' src="<?php echo $course3_img ?>">
        <div>
            <h3 class="mb-4">
            <?php echo $course3_title ?>
            </h3>
            <p><?php echo $course3_description ?></p>
        </div>
    </div>
</div>
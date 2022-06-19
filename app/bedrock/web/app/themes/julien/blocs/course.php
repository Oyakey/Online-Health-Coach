<?php
$img_url = get_field('image')['url'];
$title = get_field('title');
$description = get_field('description');
$btn = get_field('button');
$btn_url = esc_url($btn['btn_url']['url']);
$btn_text = $btn['btn_text'];
?>

<div class="course-element rounded border">
    <img class='img-fluid rounded-top' src="<?php echo $img_url ?>">
    <div class="p-3">
        <h3>
        <?php echo $title ?>
        </h3>
        <p><?php echo $description ?></p>
        <button class="btn btn-secondary form-control" href="<?php echo $btn_url; ?>"><?php echo $btn_text; ?></button>
    </div>
</div>

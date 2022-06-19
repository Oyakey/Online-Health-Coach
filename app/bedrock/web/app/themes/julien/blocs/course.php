<?php
$img_url = get_field('image')['url'];
$title = get_field('title');
$description = get_field('description');
$btn_url = "";
$btn_txt = '';
$btn = get_field('button');
?>

<div class="course-element rounded border">
    <img class='img-fluid rounded-top' src="<?php echo $img_url ?>">
    <div class="p-3">
        <h1>
        <?php echo $title ?>
        </h1>
        <p><?php echo $description ?></p>
        <button class="btn btn-primary form-control" href="<?php echo esc_url($btn['btn_url']['url']); ?>"><?php echo $btn['btn_text']; ?></button>
    </div>
</div>
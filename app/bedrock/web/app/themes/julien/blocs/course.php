<?php
$article = get_field('article');
$img_url = get_field('image')['url'];
$title = $article->post_title;
$description = $article->post_excerpt;
$btn_url = esc_url($article->guid);
$btn_text = get_field('btn_text');
?>

<div class="course-element rounded border mb-4">
    <img class='img-fluid rounded-top' src="<?php echo $img_url ?>">
    <div class="p-3">
        <h3>
        <?php echo $title ?>
        </h3>
        <p><?php echo $description ?></p>
        <a class="btn btn-secondary form-control" href="<?php echo $btn_url; ?>">
        <?php
        if ($btn_text) {
            echo $btn_text;
        } else {
            echo "See more...";
        }
        ?>
        </a>
    </div>
</div>

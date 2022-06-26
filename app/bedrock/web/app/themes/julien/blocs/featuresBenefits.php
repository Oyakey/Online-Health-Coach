<?php
$title = get_field("title");
$col1 = get_field("col1");
$col1_elements = get_field("col1_elements");
$col2 = get_field("col2");
$col2_elements = get_field("col2_elements");
$image = get_field("image");
?>
<div class="separator d-flex w-100 mb-5"><span class="separator-text d-flex px-3"><?php echo $title ?></span></div>
<div class="row">
    <div class="col-md-4">
        <h3 class="mb-4"><?php echo $col1 ?></h3>
        <ul class="my-list-group">
        <?php
        foreach ($col1_elements as $element) {
            echo '<li class="list-group-item"><i class="far fa-dot-circle me-2 text-primary"></i>'.$element['text'].'</li>';
        }
        ?>
        </ul>
    </div>
    <div class="col-md-4">
        <h3 class="mb-4"><?php echo $col2 ?></h3>
        <ul class="my-list-group">
        <?php
        foreach ($col2_elements as $element) {
            echo '<li class="list-group-item"><i class="far fa-dot-circle me-2 text-primary"></i>'.$element['text'].'</li>';
        }
        ?>
        </ul>
    </div>
    <div class="col-md-4"><img class="img-fluid w-100" src=<?php echo $image; ?>></div>
</div>
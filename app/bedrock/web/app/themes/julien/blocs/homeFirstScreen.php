<div class="row justify-content-between">
    <div class="col-md-6 pt-4 mb-5">
    <?php
    if (get_field('baseline')) {
        echo '<p><i class="fa fa-circle text-primary me-2"></i><span class="text-uppercase home-badge">'. get_field('baseline') .'</span></p>';
    }
    ?>
        <h1 class="mb-4">
        <?php echo get_field('title') ?>
        </h1>
        <p class="mb-5 fs-5">
        <?php echo get_field('paragraph') ?>
        </p>
        <a class="btn btn-primary position-relative" href=<?php echo esc_url(get_field('button')['btn_url']) ?>>
        <?php echo get_field('button')['btn_text'] ?>
            <img class="position-absolute button-pattern top-50 start-50" src="/app/themes/julien/blocs/assets/pattern.png" width="200">
        </a>
    </div>
    <div class="col-10 col-md-6 col-xl-5 mb-5 h-fit-content position-relative">
        <img class="img-fluid w-100" src=<?php echo get_field('image') ?>>
        <div>
            <div class="play-badge position-absolute top-50 start-50">
                <i class="fa fa-play text-white"></i>
            </div>
        </div>
    </div>
</div>
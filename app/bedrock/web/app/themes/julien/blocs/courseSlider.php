<div class="my-slider">
<?php

$btn_txt = "See more...";

$posts = get_field('courses');
foreach ($posts as $post) {
    echo "<div><div class='border rounded'>";
    echo "<img src='".get_field('image', $post["post"]->ID)."' class='img-fluid rounded-top'>";
    echo "<div class='p-3'>";
    echo "<h3>".$post["post"]->post_title."</h3>";
    echo "<p>".$post["post"]->post_excerpt."</p>";
    echo "<a class='btn btn-secondary w-100' href='".$post["post"]->guid."'>$btn_txt</a>";
    echo "</div></div></div>";
}

?>
</div>

<script>

var slider = tns({
    "container": ".my-slider",
    "items": 1,
    "swipeAngle": false,
    "speed": 400,
    "gutter": 22,
    "controlsText": ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    "autoplay" : true,
    "autoplayButtonOutput" : false,
    "controls": true,
    controlsPosition: "bottom",
    "responsive": {
    "768": {
        "items": 3
    }
    },
});    

</script>
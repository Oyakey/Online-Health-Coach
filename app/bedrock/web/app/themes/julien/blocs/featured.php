<div class='row'>
<?php
if (is_null(get_field('logos'))) {
    return;
} else {
    $logos = get_field('logos');
}

if (is_null(get_field('col_count')) || !(12%34==0)) {
    $nbcol = 3;
} else {
    $nbcol = 12/get_field('col_count');
}

foreach ($logos as $logo) {
    echo "<div class='col-".$nbcol."'>
            <img class='img-fluid' src='".$logo['url']."'>
        </div>";
}
?>
</div>

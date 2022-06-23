<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head() ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-lg">
                <a class="navbar-brand" href="<?php echo home_url() ?>"><?php echo the_custom_logo() ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php

                    $menuLocations = get_nav_menu_locations();
                    $navMenuID = $menuLocations['nav_menu'];
                    $primaryNav = wp_get_nav_menu_items($navMenuID);

                    global $wp;
                    $current_url = home_url(add_query_arg(array(), $wp->request));

                    foreach ($primaryNav as $item) {
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link ".(($item->url==$current_url."/")?'active':"")."' href=".$item->url.">". $item->title ."</a>";
                        echo "</li>";
                    }

                    ?>
                        </li>
                    </ul>
                    <?php

                    $button = get_field('button', wp_get_nav_menu_object($navMenuID));
                    if ($button) {
                        echo "<div class='nav-item'>";
                        echo "<a class='btn btn-primary' href=".$button['url'].">". $button['title'] ."</a>";
                        echo "</div>";
                    }
                    
                    ?>
                </div>
            </div>
        </nav>
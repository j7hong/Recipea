<?php
$navigation_links = array("about", "recipes", "community", "media", "contact-us");
$navigation_link_names = array("About", "Recipes", "Community", "Media", "Contact Us");

function create_link($index, $href_array, $label_array) {
    $link = '<li><a href=' . $href_array[$index] . '.php>' . $label_array[$index] . '</a></li>';
    return $link;
}

function display_navigation($links_array, $links_names_array) {

    if (count($links_array) == count($links_names_array)) {

        for ($i = 0; $i < count($links_array); $i++) {
            echo create_link($i, $links_array, $links_names_array);
        }
                
    } else {
        echo "The number of links does not match the number of link names.";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recipes | PHP project - Team PHP </title>
         <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-0.css" />  
    </head>
    <body>

        <?php
        include 'header-1.0.php';
        echo '<div class="container">';

        display_navigation($navigation_links, $navigation_link_names);

        echo '</div>';
        include 'content-1.0.php';
//        include 'contact-1.0.php';
        echo '<div class="container">';

        display_navigation($navigation_links, $navigation_link_names);


        echo '</div>';
        include 'footer-1.0.php';
        ?>

    </body>
</html>

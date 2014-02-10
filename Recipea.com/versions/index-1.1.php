<?php
// arrays
// main navigation in header
$navigation_links = array("home", "recipes", "events", "media", "games", "about", "contact", "careers");
$navigation_link_names = array("About", "Recipes", "Events", "Media", "Games", "About", "Contact", "Careers");

// navigation links in footer
$footer_links = array("sitemap", "recipes", "events", "media", "games", "about", "contact", "careers");
$footer_link_names = array("Sitemap", "Recipes", "Events", "Media", "Games", "About", "Contact", "Careers");

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
<?php require_once 'header-1.3.php'; ?>

        <div class="wrapper">
            <div class="container">
<?php
require_once 'search-1.2.php';

require_once 'gallery-1.1.php';

display_navigation($footer_links, $footer_link_names);



// echo '</div>';            
?>
            </div> <!--/container-->
        </div> <!--/wrapper-->
                <?php require_once 'footer-1.1.php'; ?>
    </body>
</html>

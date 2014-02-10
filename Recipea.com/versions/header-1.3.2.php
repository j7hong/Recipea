<?php
// arrays
// main navigation in header
//$navigation_links = array("home", "recipes", "events", "media", "games", "about", "contact", "careers");
//$navigation_link_names = array("About", "Recipes", "Events", "Media", "Games", "About", "Contact", "Careers");
//
//// navigation links in footer
//$footer_links = array("sitemap", "recipes", "events", "media", "games", "about", "contact", "careers");
//$footer_link_names = array("Sitemap", "Recipes", "Events", "Media", "Games", "About", "Contact", "Careers");
//
//function create_link($index, $href_array, $label_array) {
//    $link = '<li><a href=' . $href_array[$index] . '.php>' . $label_array[$index] . '</a></li>';
//    return $link;
//}
//
//function display_navigation($links_array, $links_names_array) {
//
//    if (count($links_array) == count($links_names_array)) {
//
//        for ($i = 0; $i < count($links_array); $i++) {
//            echo create_link($i, $links_array, $links_names_array);
//        }
//    } else {
//        echo "The number of links does not match the number of link names.";
//    }
//}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Recipes | PHP project - Team PHP</title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-2.css" /> 
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--- - - - - - - - -  HEADER  - - - - - - - - ---> 
        
        
        <header class="page-header">                
            <a href="index-1.1.php"><img class="float-left" src="img/header/logo.png" alt="Recipea logo" /></a>

            <nav role="navigation" class="main-nav centre-align">
                <div class="float-left">
                    <a href="#"><img src="img/header/main-nav/home-icon.png" alt="home logo" /></a>
                    <span class="uppercase">Home</span>
                </div>
                <div class="float-left">
                    <a href="#"><img src="img/header/main-nav/recipes-icon.png" alt="recipes logo" /></a>
                    <span class="uppercase">Recipes</span>
                </div>
                <div class="float-left">
                    <a href="#"><img src="img/header/main-nav/events-icon.png" alt="events logo" /></a>
                    <span class="uppercase">Events</span>
                </div>
                <div class="float-left">
                    <a href="#"><img src="img/header/main-nav/media-icon.png" alt="media logo" /></a>
                    <span class="uppercase">Media</span>
                </div>
                <div class="float-left">
                    <a href="#"><img src="img/header/main-nav/games-icon.png" alt="games logo" /></a>
                    <span class="uppercase">Games</span>
                </div>
                <div class="float-left">
                    <a href="#"> <img src="img/header/main-nav/about-icon.png" alt="about logo" /></a>
                    <span class="uppercase">About</span>
                </div>
                <div class="float-left">
                    <a href="#"><img src="img/header/main-nav/contact-icon.png" alt="contact logo" /></a>
                    <span class="uppercase">Contact</span>
                </div>

            </nav>

            <!--            <nav role="navigation" class="main-nav"> 
            <? // php display_navigation($navigation_links, $navigation_link_names); ?>
                        </nav>-->

            <div class=" float-left">
                <a href="#"><img src="img/header/btn-post-recipe.png" alt="post a recipe button" class="margin-right-s red-border" /></a>
                <a href="#"><img src="img/header/btn-login.png" alt="login button" class="red-border" /></a>
            </div>

        </header>                  
    </body>
</html>
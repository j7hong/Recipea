<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recipes | PHP project - Team PHP </title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-5.css" />  
    </head>
    <body>
<?php require_once 'header-1.3.php'; ?>

        <div class="wrapper">
            <div class="container">
<?php
require_once 'sidebar-1.2.php';

require_once 'search-1.3.php';

require_once 'content-1.2.1.php';

// display_navigation($footer_links, $footer_link_names);



// echo '</div>';            
?>
            </div> <!--/container-->
        </div> <!--/wrapper-->
                <?php require_once 'footer-1.1.php'; ?>
    </body>
</html>

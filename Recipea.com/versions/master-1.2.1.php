<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recipes | PHP project - Team PHP </title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-6.css" />  
    </head>
    <body>


        <?php require_once 'header-1.3.1.php';
        ?>

        <div class="wrapper">
            <!--- - - - - - - - -  WRAPPER - - - - - - - - ---> 

            <!--- - - - - - - - -  CONTAINER  - - - - - - - - ---> 

            <div class="container">

                <!--- - - - - - - - -  SIDEBAR - - - - - - - - ---> 

                <?php
                echo '<div class="float-left margin-right-l">';
                require_once 'sidebar-1.2.1.php';
                echo '</div>';

                echo '<div class="main-content float-left">';
                // <!--- - - - - - - - -  SEARCH - - - - - - - - ---> 

                echo '<div class="float-left">';
                require_once 'search-1.4.php';
                echo '</div>';

                // <!--- - - - - - - - -  CONTENT - - - - - - - - ---> 

                echo '<div class="float-left">';
                require_once 'content-1.2.6.php';
                echo '</div>';
                echo '</div>'; //    /main-content
// display_navigation($footer_links, $footer_link_names);
// echo '</div>';     
                // <!--- - - - - - - - -  FOOTER  - - - - - - - - ---> 

                echo '<div class="clear"></div>';
                require_once 'footer-1.2.1.php';
                ?>
            </div> <!--/container-->
        </div> <!--/wrapper-->           
    </body>
</html>

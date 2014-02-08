<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recipes | PHP project - Team PHP </title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-8.css" />  
    </head>
    <body>


        <?php require_once 'header-1.3.3.php';
        ?>

        <div class="wrapper">
            <!--- - - - - - - - -  WRAPPER - - - - - - - - ---> 

            <!--- - - - - - - - -  CONTAINER  - - - - - - - - ---> 

            <div class="container">

                <!--- - - - - - - - -  SIDEBAR - - - - - - - - ---> 

                <?php
                echo '<div class="float-left margin-right-l">';
                require_once 'sidebar-1.2.4.php';
                echo '</div>';

                echo '<div class="main-content float-left">';
                // <!--- - - - - - - - -  SEARCH - - - - - - - - ---> 

                echo '<div class="search-section float-left">';
                require_once 'search-1.4.3.php';
                echo '</div>';

                // <!--- - - - - - - - -  CONTENT - - - - - - - - ---> 

                echo '<div class="float-left margin-bottom-xl">';
                require_once 'content-1.2.9.php';
                echo '</div>';
                echo '</div>'; //    /main-content
// display_navigation($footer_links, $footer_link_names);
// echo '</div>';     
                ?>
            </div> <!--/container-->
        </div> <!--/wrapper-->
        
        <?php
        // <!--- - - - - - - - -  FOOTER  - - - - - - - - ---> 

        echo '<div class="clear"></div>';
        require_once 'footer-1.2.4.php';
        ?>
        
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recipes | PHP project - Team PHP </title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-8.css" />

<!--        
        <link rel="stylesheet" href="css/header-1.0.0.css" />
        <link rel="stylesheet" href="css/search-public-1.0.0.css" />
        <link rel="stylesheet" href="css/gallery-1.0.0.css" />  didn't use yet
        <link rel="stylesheet" href="css/footer-1.0.0.css" />-->
    </head>
    <body>


        <?php require_once 'header-1.3.3.php'; ?>

        <div class="wrapper">
            <!--- - - - - - - - -  WRAPPER - - - - - - - - ---> 

            <!--- - - - - - - - -  CONTAINER  - - - - - - - - ---> 

            <div class="container">
              
                <?php
                echo '<div class="main-content">';
                // <!--- - - - - - - - -  SEARCH - - - - - - - - ---> 

                echo '<div class="main-content red-border">';
                require_once 'search-1.4.3.php';                
                echo '</div>';

                // <!--- - - - - - - - -  GALLERY - - - - - - - - ---> 

                echo '<div class="margin-top-m3">';
                echo '<div class="clear"></div>';
                require_once 'gallery-1.1.php';
                echo '</div>';
                echo '</div>';  //    /main-content
  
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

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recipes | PHP project - Team PHP </title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-7.css" />  
    </head>
    <body>


        <?php require_once 'header-1.3.3.php'; ?>

        <div class="wrapper">
            <!--- - - - - - - - -  WRAPPER - - - - - - - - ---> 

            <!--- - - - - - - - -  CONTAINER  - - - - - - - - ---> 

            <div class="container">
              
                <?php
                echo '<div class="main-content float-left">';
                // <!--- - - - - - - - -  SEARCH - - - - - - - - ---> 

                echo '<div class="float-left">';
                require_once 'search-1.4.2.php';
                echo '</div>';

                // <!--- - - - - - - - -  GALLERY - - - - - - - - ---> 

                echo '<div class=" ">';
          //      require_once '.php';
                echo '</div>';
                echo '</div>';  //    /main-content
  
                ?>
            </div> <!--/container-->
        </div> <!--/wrapper-->
        
        <?php
        // <!--- - - - - - - - -  FOOTER  - - - - - - - - ---> 

        echo '<div class="clear"></div>';
        require_once 'footer-1.2.2.php';
        ?>
        
    </body>
</html>

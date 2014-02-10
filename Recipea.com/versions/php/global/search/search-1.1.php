<?php
// arrays

$ingredients = array("Ingredient","beef", "pork", "chicken", "fish", "egg");
$styles = array("Style","Italian", "French", "Asian");
$countries = array("Country","Canada", "United States", "China", "India");
$menus = array("Menu","recipe1", "recipe2", "recipe3");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Recipes | PHP project - Team PHP</title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-0.css" /> 
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>        
        <div style="background-color: greenyellow;">
            <span>Search recipes!</span>
            <imc src="img/search/cutlery-icon.png" alt="cutlery icon" />
            <img src="img/page-wide/dotted-line.png" alt="dotted line" />
            <input type="text" name="search-keyword" id="search-keyword" placeholder="keyword" />

            <img src="img/search/magnifying-glass-icon.png" alt="magnifying-glass-icon" />
            
            <select name="search-ingredient" id="search-ingredient">
                <?php
                for ($i = 0; $i < count($ingredients); $i++) {
                    echo "<option value='$ingredients[$i]'>$ingredients[$i]</option>";
                }
                ?>
            </select>
            <img src="img/search/magnifying-glass-plus-icon.png" alt="magnifying-glass-plus-icon" />
            
            <select name="search-style" id="search-style">
                <?php
                for ($i = 0; $i < count($styles); $i++) {
                    echo "<option value='$styles[$i]'>$styles[$i]</option>";
                }
                ?>
            </select>
            <img src="img/search/magnifying-glass-plus-icon.png" alt="magnifying-glass-plus-icon" />
            
            <input type="image" name="search-recipes" id="search-recipes" value="Submit" src="img/search/btn-search.png" alt="search button" />

        </div><!-- /search-recipes-->
        
        <div style="background-color: greenyellow;">
            <span>Country Food Dictionary</span>
            <imc src="img/search/dictionary-icon.png" alt="dictionary icon" />
            <img src="img/page-wide/dotted-line.png" alt="dotted line" />
            
            <select name="search-country" id="search-country">
                <?php
                for ($i = 0; $i < count($countries); $i++) {
                    echo "<option value='$countries[$i]'>$countries[$i]</option>";
                }
                ?>
            </select>
            
            <img src="img/search/magnifying-glass-icon.png" alt="magnifying-glass-icon" />
            
            <select name="search-menu" id="search-menu">
                <?php
                for ($i = 0; $i < count($menus); $i++) {
                    echo "<option value='$menus[$i]'>$menus[$i]</option>";
                }
                ?>
            </select>
            <img src="img/search/magnifying-glass-plus-icon.png" alt="magnifying-glass-plus-icon" />
            
            <input type="image" name="search-recipes" id="search-recipes" value="Submit" src="img/search/btn-search.png" alt="search button" />

        </div><!-- /country-dictionary-->
    </body>
</html>




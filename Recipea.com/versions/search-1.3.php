<?php
// arrays

$ingredients = array("Ingredient", "beef", "pork", "chicken", "fish", "egg");
$styles = array("Style", "Italian", "French", "Asian");
$countries = array("Country", "Canada", "United States", "China", "India");
$menus = array("Menu", "recipe1", "recipe2", "recipe3");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Recipes | PHP project - Team PHP</title>
        <meta name="description" content="Homepage for Recipes.com - an community recipe sharing site.">
        <link rel="stylesheet" href="css/styles-1-3.css" /> 
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>     

        <section>
            <h1 class="invisible">Search recipes</h1>

            <div class="vertical-down-gradient search-size padding-m margin-right-m float-left">


                <span class="uppercase heading-ml text-colour1 float-left">Search recipes!</span>

                <img src="img/search/cutlery-icon.png" alt="cutlery icon" class="float-left search-field-icon1" />  

                <div class="clear"></div>

                <img src="img/page-wide/dotted-line.png" alt="dotted line" class="m-line" />

                <div class="float-left">
                    <img src="img/search/magnifying-glass-icon.png" alt="magnifying-glass-icon" class="search-field-icon2" />

                    <input type="text" name="search-keyword" id="search-keyword" placeholder="keyword" class="search-field" />                   
                </div>

                <div class="float-left">
                    <img src="img/search/magnifying-glass-plus-icon.png" alt="magnifying-glass-plus-icon" class="search-field-icon-plus"  />

                    <select name="search-ingredient" id="search-ingredient" class="search-field ">
                        <?php
                        for ($i = 0; $i < count($ingredients); $i++) {
                            echo "<option value='$ingredients[$i]'>$ingredients[$i]</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="clear"></div>

                <div class='float-left margin-top-m'>
                    <img src='img/search/magnifying-glass-plus-icon.png' alt='magnifying-glass-plus-icon' class="search-field-icon-plus" />

                    <select name='search-style' id='search-style' class='search-field'>
                        <?php
                        for ($i = 0; $i < count($styles); $i++) {
                            echo "<option value='$styles[$i]'>$styles[$i]</option>";
                        }
                        ?>
                    </select>
                </div>

                <input type='image' name='search-recipes' id='search-recipes' value='Submit' src="img/search/btn-search.png" alt="search button"
                       class="float-right margin-top-m" />

                <div class="clear"></div>

            </div>
<!--            <img src="img/search/search-recipes-background-colour.png" alt="search-recipes-background-colour" />-->

        </section>


        <section>
            <h1 class="invisible">Country food dictionary</h1>

            <div class="vertical-down-gradient search-size padding-m float-left">


                <span class="uppercase heading-ml text-colour1 float-left">Country Food Dictionary</span>

                <img src="img/search/dictionary-icon.png" alt="dictionary icon" class="float-left search-field-icon1" />

                <div class="clear"></div>

                <img src="img/page-wide/dotted-line.png" alt="dotted line" class="m-line" />

                <div class="float-left">
                    <img src="img/search/magnifying-glass-icon.png" alt="magnifying-glass-icon" class="search-field-icon-plus" />

                    <select name="search-country" id="search-country" class='search-field'>
                        <?php
                        for ($i = 0; $i < count($countries); $i++) {
                            echo "<option value='$countries[$i]'>$countries[$i]</option>";
                        }
                        ?>
                    </select>                  
                </div>

                <div class="float-left">
                    <img src="img/search/magnifying-glass-plus-icon.png" alt="magnifying-glass-plus-icon" class="search-field-icon-plus"  />

                    <select name="search-menu" id="search-menu" class='search-field'>
                <?php
                for ($i = 0; $i < count($menus); $i++) {
                    echo "<option value='$menus[$i]'>$menus[$i]</option>";
                }
                ?>
            </select>
                </div>

                <div class="clear"></div>
      
                <input type='image' name='search-recipes' id='search-recipes' value='Submit' src="img/search/btn-search.png" alt="search button"
                       class="float-right margin-top-m" />

                <div class="clear"></div>

            </div>
<!--            <img src="img/search/search-recipes-background-colour.png" alt="search-recipes-background-colour" />-->

        </section>

<!--        <section>
            <h1 class="invisible">Country food dictionary</h1>
            <span>Country Food Dictionary</span>
            <img src="img/search/country-food-dictionary-background-colour.png" alt="country-food-dictionary-background-colour" />
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

        </section>-->
    </body>
</html>




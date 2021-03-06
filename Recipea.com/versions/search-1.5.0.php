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
        <link rel="stylesheet" href="css/search-1.0.0.css" />
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>     
        <div>
            
<!--            The search modules (search recipes and country food dictionary are different sizes on the public homepage and the
            master page. On the public home page they have a size ratio of 3:2, while the ratio is 1:1 (search recipes : country food
            dictionary). Also, the public homepage has an additional stylesheet (search-public-1.0.0.css) that the master page does
            not use. Hopefully, the ratios will apply for each page.-->
            
            <section class="search-module search-size search-size-l float-left">
                <h1 class="invisible">Search recipes</h1>

                <div class="vertical-down-gradient padding-m  float-left">


                    <span class="uppercase heading-ml text-colour1 float-left">Search recipes!</span>

                    <img src="img/search/cutlery-icon.png" alt="cutlery icon" class="float-left search-field-icon1" />  

                    <div class="clear"></div>

                    <img src="img/page-wide/dotted-line-m.png" alt="dotted line" class="m-line" />

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

                <div class="clear"></div>

            </section> <!-- /search-module (search recipes)-->

            <section class="search-module search-size search-size-m float-right red-border">
                <h1 class="invisible">Country food dictionary</h1>

                <div class="vertical-down-gradient padding-m float-left">


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

            </section> <!-- /search-module (country food dictionary)-->
            
        </div> <!-- /search-section (both search boxes)-->


        <div class="clear"></div>

    </body>
</html>




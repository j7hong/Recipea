<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="Recipea, Admin, CMS" />
    <meta name="description" content="The Recipea Admin CMS" />
    <title>Recipea Admin Masterpage</title>
    <link rel="stylesheet" href="css/admin_style.css" />
    <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
    <!--[if IE 9]>
            <link rel="stylesheet" type="text/css" media="all" href="css/ie9.css"/>
            <![endif]-->
    <!--[if IE 8]>
            <link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
            <![endif]-->
    <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" media="all" href="css/ie7.css"/>
            <![endif]-->

    </head>

    <body>
        <!--Header-->
        <div class="wrapper">
            <header>
                <div class="clearfix">
                    <figure><a href="#"><img id="logo" src="img/master/logo.png" alt="Recipea Logo"></a></figure>
                    <figure><img id="title" src="img/master/title.png" alt="CMS title"></figure>
                <div id="headerR">                    
                    <figure><a href="#"><img id="lock" src="img/master/lock.png" alt="Lock icon"></a></figure>
                    <button id="logout" class="roundcorner" type="button">LOG OUT</button>
                    <button id="linktohome" class="roundcorner" type="button">VISIT HOME</button>
                    <figure><a href="#"><img id="globe" src="img/master/globe.png" alt="Globe icon"></a></figure>
                    <p id="welcome">Welcome, Nithya</p>            
                </div><!--headerR-->
                </div><!--clearfix-->
            </header>
            
            <!--Sidebar-->
            <div class="clearfix">
                <aside>
                    <nav>
                        <ul class="sidebar">
                            <li class="barHead"><img id="content_icon" src="img/master/content_icon.png" alt="Content Icon">CONTENT</li>
                            <li class="barEach"><a href="#">Home</a></li>
                            <li class="barEach"><a href="#">Recipes</a></li>
                            <li class="barEach"><a href="#">Event</a></li>
                            <li class="barEach"><a href="#">Media</a></li>
                            <li class="barEach"><a href="#">Games</a></li>
                            <li class="barEach"><a href="#">About</a></li>
                            <li class="barEach"><a href="#">Contact</a></li>
                            <li class="barlessEach"><a href="#">Add New<img class="plusTop" src="img/master/add.png" alt="Add icon"></a></li>
                        </ul>

                        <ul class="sidebar">
                            <li class="barHead"><img id="users" src="img/master/users.png" alt="Users Icon">USERS</li>
                            <li class="barEach"><a href="#">Home</a></li>
                            <li class="barlessEach"><a href="#">Add New<img class="plusBottom" src="img/master/add.png" alt="Add icon"></a></li>
                        </ul>
                    </nav>
                </aside>
                
                <!--Content Main-->
                <section>
                    <article id="main">
                        <div id="articleHead"><img id="content_icon2" src="img/master/content_icon.png" alt="Content Icon">CONTENT</div>
                        <div id="articleHeadR">
                            <form id="form" method="get" action="http://www.google.com">
                            <input id="searchbox" type="search" name="search">
                            <button id="searchbutton" class="roundcorner" type="button">SEARCH</button>
                            </form>
                        </div><!--articleHeadR-->

                        <div class="clearfix">
                        <div class="articleText">
                            <div class="articleTitle">
                                <ul class="category">
                                    <li>ID</li>
                                    <li>AUTHOR</li>
                                    <li>RECIPE</li>
                                    <li>DATE</li>
                                </ul>
                            </div><!--articleTitle-->
                        </div><!--articleText-->
                        </div><!--clearfix-->

                        <div class="clearfix">
                        <div class="articleText2">
                            <div class="articleTitle2">
                              <ul class="category">
                                    <li>1</li>
                                    <li>Gurpal</li>
                                    <li>Tandori Chicken</li>
                                    <li>2013.11.30</li>
                                    <li>
                                        <input id="editbutton" type="button" class="roundcorner" type="button" value="EDIT" />
                                        <input id="deletebutton" type="button" class="roundcorner" type="button" value="DELETE" />
                                    </li>
                                </ul>
                            </div><!--articleTitle2-->
                        </div><!--articleText2-->
                        </div><!--clearfix-->

                    <div class="clearfix">
                        <div class="articleText2">
                            <div class="articleTitle2">
                                <ul class="category">
                                    <li>2</li>
                                    <li>Nithya</li>
                                    <li>Chai Tea Latte</li>
                                    <li>2013.12.09</li>
                                    <li>
                                        <input id="editbutton" type="button" class="roundcorner" type="button" value="EDIT" />
                                        <input id="deletebutton" type="button" class="roundcorner" type="button" value="DELETE" />
                                    </li>
                                </ul>
                            </div><!--articleTitle2-->
                        </div><!--articleText2-->
                        </div><!--clearfix-->
                        
                        <div id="mainContent">
                            <form  id="recipeTitle">
                                Title: <input type="text" name="titleeach" id="titleeach" width="35px" height="15px"><br />
                                Directions: <textarea name="direction" id="direction" rows="10" cols="100" /></textarea><br />
                                <input id="savebutton" type="button" class="roundcorner" type="button" value="SAVE" />
                                <input id="deletedownbutton" type="button" class="roundcorner" type="button" value="DELETE" />
                            </form>
                        </div><!--mainContent-->
                    </article>
                </section>
                    </div><!--clearfix-->
                    
            <!--Footer-->
            <footer class="gradient">
                <P>&copy; copyright 2014 Recipea all rights reserved</P>
            </footer>
        </div><!--wrapper-->
    </body>
</html>

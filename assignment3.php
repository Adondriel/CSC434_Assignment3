<?php
    //include the lib files that contain the classes.
    //Author: Adam Pine
    include("assets/classes/pokemon_lib.php");
    include("assets/classes/amazon_lib.php");
        //generate random two dim array of pokemon... old version, here for reference.
        function generateRandomTwoDimArray($rows = 5, $cols = 5){
            $twodimArray = array();
            for ($r = 0; $r <= $rows; $r++){
                $rowArray = array();
                for ($c = 0; $c <= $cols; $c++) {
                    $availPokemonTypes = array("blastoise","vulpix");
                    $chosenPokemonType = $availPokemonTypes[mt_rand(0,1)];
                    $myPokemon;
                    if ($chosenPokemonType == "blastoise"){
                        $myPokemon = new Blastoise();
                    }elseif($chosenPokemonType == "vulpix"){
                        $myPokemon = new Vulpix();            
                    }
                    $myPokemon->chooseRandomAttack();
                    $myPokemon->randomizeValues();
                    $rowArray[] = $myPokemon;
                }
                $twodimArray[] = $rowArray;
            }
            //print_r($twodimArray);
            return $twodimArray;
        }
        //generate random two dim array of Amazon Items, for use below.
        function generateRandomTwoDimAmazonArray($rows = 5, $cols = 5){
            $twodimArray = array();
            for ($r = 0; $r <= $rows; $r++){
                $rowArray = array();
                for ($c = 0; $c <= $cols; $c++) {
                    $availTypes = array("tv","computer");
                    $chosenType = $availTypes[mt_rand(0,1)];
                    $myItem;
                    if ($chosenType == "tv"){
                        $myItem = new TV();
                    }elseif($chosenType == "computer"){
                        $myItem = new Computer();            
                    }
                    $myItem->RandomizeParentVars();
                    $rowArray[] = $myItem;
                }
                $twodimArray[] = $rowArray;
            }
            //print_r($twodimArray);
            return $twodimArray;
        }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="HTML Tag examples page">
        <meta name="author" content="Adam Pine">
        <link rel="icon" href="favicon.ico">

        <title>HTML Examples Page</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/flatly_bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/starter-template.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- FontAwesome Icon CDN include -->
        <script src="https://use.fontawesome.com/9b7180a9fe.js"></script>
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Assignment 3</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li><a href="html_examples.html"><i class="fa fa-code" aria-hidden="true"></i> HTML Examples</a></li>
                        <li><a href="php_examples.php"><i class="fa fa-code" aria-hidden="true"></i> PHP Examples</a></li>
                        <li class="active"><a href="#"><i class="fa fa-code" aria-hidden="true"></i> Assignment 3</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
                <p>Amazon Items:</p>
                <table class="table table-striped table-hover ">
                    <tbody>
                        <?php 
                            //this would be even more fun to do with angular, rather than php lol. Angular is so nice when trying to create tables from an object.
                            $rowCount = 5;
                            $colCount = 5;
                            $twoDimArr = generateRandomTwoDimAmazonArray($rowCount, $colCount);
                            for ($r = 0; $r < $rowCount; $r++){
                                //start a row.
                                echo("<tr>");
                                for ($c = 0; $c < $colCount; $c++) {
                                    //create a data entry in said row.
                                    echo("<td>");
                                    echo("Name: ".$twoDimArr[$r][$c]->getName()."<br />");                                                                        
                                    echo("Condition: ".$twoDimArr[$r][$c]->getCondition()."<br />");
                                    echo("Price: ".$twoDimArr[$r][$c]->getPrice()."<br />");
                                    echo("Stock: ".$twoDimArr[$r][$c]->getStock()."<br />");     
                                    echo("Manufacturer: ".$twoDimArr[$r][$c]->getManufacturer()."<br />");     
                                    //check for the type of object, so I can tell which properties to print out.
                                    //Could also have used Reflection here, but that seems a bit complex for this project lol.
                                    if ($twoDimArr[$r][$c] instanceof TV){
                                        echo("Screen Size: ".$twoDimArr[$r][$c]->getScreenSize()."<br />");   
                                        echo("Resolution: ".$twoDimArr[$r][$c]->getResolution()."<br />");                                            
                                    }elseif($twoDimArr[$r][$c] instanceof Computer){
                                        echo("Ram: ".$twoDimArr[$r][$c]->getRam()."<br />");                                            
                                        echo("CPU Manufacturer: ".$twoDimArr[$r][$c]->getCPUManu()."<br />");                                            
                                        echo("Graphics Card: ".$twoDimArr[$r][$c]->getGCard()."<br />");
                                    }    
                                    //create a list of the tags, so they are formatted correctly.
                                    echo("Tags:<br /><ul>");
                                    foreach($twoDimArr[$r][$c]->getTags() as $atk){
                                        echo("<li>".$atk."</li>");
                                    }
                                    //end said data entry.
                                    echo("</td>");
                                }
                                //end the row.
                                echo("</tr>");
                            }
                        ?>
                    </tbody>
                </table>
            
                            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Source Code for this page:</h3>
                    </div>
                    <div class="panel-body">
                        <h1>Click this link to visit the Github Directory for this assignment:  <a href="https://github.com/Adondriel/CSC434_Assignment3">https://github.com/Adondriel/CSC434_Assignment3</a></h1>
                        <h3>Files Used, find in github, or find them below:</h3>
                        <ul>
                            <li>assignment3.php</li>
                            <li>assets/classes/amazon_lib.php</li>
                            <li>assets/classes/pokemon_lib.php (historical, old version of this project.)</li>
                        </ul>
                        <div style="text-align:left;">
                            <p><?php show_source('assets/classes/amazon_lib.php'); ?></p>
                            <p><?php show_source('assignment3.php'); ?></p>
                            <p><?php show_source('assets/classes/pokemon_lib.php'); ?></p>
                        </div>
                    </div>
                </div>
            
            
            
            <p>This is the first version I made, which is wrong, because the pokemon don't have separate getters.</p>
            <div>
                <table class="table table-striped table-hover ">
                    <tbody>
                        <?php 
                            //this would be even more fun to do with angular, rather than php lol. Angular is so nice when trying to create tables from an object.
                            $rowCount = 5;
                            $colCount = 5;
                            $twoDimPokeArr = generateRandomTwoDimArray($rowCount, $colCount);
                            for ($r = 0; $r < $rowCount; $r++){
                                echo("<tr>");
                                for ($c = 0; $c < $colCount; $c++) {
                                    echo("<td>");
                                    echo("Name: ".$twoDimPokeArr[$r][$c]->getName()."<br />");                                                                        
                                    echo("Damage: ".$twoDimPokeArr[$r][$c]->getDamage()."<br />");
                                    echo("Max Health: ".$twoDimPokeArr[$r][$c]->getMaxHealth()."<br />");
                                    echo("Current Health: ".$twoDimPokeArr[$r][$c]->getCurrentHealth()."<br />");
                                    echo("Experience: ".$twoDimPokeArr[$r][$c]->getExperience()."<br />");
                                    echo("Current Attack: ".$twoDimPokeArr[$r][$c]->getCurrentAttack()."<br />");                                                                  
                                    echo("Available Attacks:<br /><ul>");
                                    foreach($twoDimPokeArr[$r][$c]->getAttacks() as $atk){
                                        echo("<li>");
                                        echo("    ".$atk);
                                        echo("</li>");
                                    }
                                    echo("</td>");
                                }
                                echo("</tr>");
                            }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- /.container -->


        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>

    </html>
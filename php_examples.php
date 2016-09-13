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
                <a class="navbar-brand" href="#">Assignment 2</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="html_examples.html"><i class="fa fa-code" aria-hidden="true"></i> HTML Examples</a></li>
                    <li class="active"><a href="#"><i class="fa fa-code" aria-hidden="true"></i> PHP Examples</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <div class="starter-template">
            <!-- a for or while loop, an if/else statement, a case statement, and how type casting can affect values. -->
            <?php 
                //variable declartion.
                $typeCasting = "21 is a great number";
                $errorProneTypeCasting = $typeCasting + 5;
                $time = date("H");
                $timeGreeting = "";
                $colorMsg = "";
                $favcolor= "red";

            
                echo "<div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title'>For Loop Example</h3>
                        </div>
                        <div class='panel-body'>";
                echo "<ul class='list-group'>";
                for ($x = 0; $x <= 10; $x++) {
                    echo "";
                    echo "<li class='list-group-item'> The number is: $x</li>";
                }
                echo "</ul>";
                echo "</div></div>";
                
                //echo "<p>The hour (of the server) is " . $time; 
                //echo ", and will give the following message:</p>";

                if ($time < "10") {
                    $timeGreeting = "Have a good morning!";
                } elseif ($time < "20") {
                    $timeGreeting = "Have a good day!";
                } else {
                    $timeGreeting = "Have a good night!";
                }
            
                switch ($favcolor) {
                    case "red":
                        $colorMsg = "Your favorite color is red!";
                        break;
                    case "blue":
                        $colorMsg = "Your favorite color is blue!";
                        break;
                    case "green":
                        $colorMsg = "Your favorite color is green!";
                        break;
                    default:
                        $colorMsg = "Your favorite color is neither red, blue, nor green!";
                }
            ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">If Statement Example</h3>
                    </div>
                    <div class="panel-body">
                        <p>The hour is:
                            <?php echo $time; ?>, and will give the following greeting:
                        </p>
                        <p>
                            <?php echo $timeGreeting; ?>
                        </p>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Case/Switch Statement Example</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <b><?php echo $colorMsg; ?></b>
                        </p>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Typecasting Example</h3>
                    </div>
                    <div class="panel-body">
                        <p>The variable that we are testing contains the value:
                            <?php echo $typeCasting; ?>, This is, obviously a string.
                        </p>
                        <p>
                            But, if we add a number to that string, for instance the value 5, we get:
                            <b><?php echo $errorProneTypeCasting; ?> </b>
                        </p>
                        <p>This is because PHP will try to find the number you want to add to, and will cut off the other end of that string, and just take the numbers, in this case we get 21+5 = 26.</p>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Source Code for this page:</h3>
                    </div>
                    <div class="panel-body">
                        <h1>Click this link to visit the Github Directory for this assignment:  https://github.com/Adondriel/CSC434_Assignment2</h1>
                        <h3>or, just look at the below printout of the source.</h3>
                        <div style="text-align:left;">
                            <p>
                                <!--Fun side note, for when you read this source later, I was attempting to include the source code by just using "include('php_examples.php'); and it caused an infinite loop of the webpage embeding itself into itself... and load was loading infinitely. -->
                                <?php show_source('php_examples.php'); ?>
                            </p>
                        </div>
                    </div>
                </div>




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
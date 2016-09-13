<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Adam Pine | Home</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website landing Page for Developers">
    <meta name="author" content="3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/dist/github-activity-0.1.0.min.css">
    <link rel="stylesheet" href="assets/plugins/github-activity/dist/octicons/octions.min.css">
    <!--reCaptcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/contactme.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <header class="header">
        <div class="container">                       
            <!-- <img class="profile-image img-responsive pull-left" src="assets/images/profile.png" alt="James Lee" /> -->
            <div class="profile-content pull-left">
                <h1 class="name">Adam Pine</h1>
                <h2 class="desc">Junior Developer</h2>   
                <ul class="social list-inline">
                    <li><a href="https://twitter.com/Adondriel"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="https://plus.google.com/u/0/112128782691491148212/about"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="http://www.linkedin.com/in/adampine95"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/Adondriel"><i class="fa fa-github-alt"></i></a></li>                  
                </ul> 
            </div><!--//profile-->
        </div><!--//container-->
    </header><!--//header-->

    <section class="body">
        <form method=post action="assets/captcha/verify.php">
        
        <label>Name</label>
        <input name="name" placeholder="Type Here">
            
        <label>Email</label>
        <input name="email" type="email" placeholder="Type Here">
            
        <label>Message</label>
        <textarea name="message" placeholder="Type Here"></textarea>
            
        <input id="submit" name="submit" type="submit" value="Submit">
        
        <label>reCaptcha</label>
            <?php
                require_once('assets/recaptcha/recaptchalib.php');
                $publickey = "6LfhBQYTAAAAAPsLZ0q_pmYHLoFLJtladmKgx25E"; // you got this from the signup page
                echo recaptcha_get_html($publickey);
            ?>
        </form>
    </section>

    <footer class="footer">
        <div class="container text-center">
                <small class="copyright">&copy; Adam Pine 2015</small>
        </div><!--//container-->
    </footer><!--//footer-->
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github activity plugin -->
    <script type="text/javascript" src="assets/plugins/github-activity/dist/mustache/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/dist/github-activity-0.1.0.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html>


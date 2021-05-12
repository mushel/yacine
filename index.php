
<?php if(isset($_POST["submit"])) {

    $to = "mushel@gmail.com";
    $subject = "Message From Yacine's website";
    $email = $_POST["email"];
    $name = $_POST["name"];
    $msg = $_POST["msg"];
    
    $headers = "From: julianahoffpauir.com";
    $mailBody="$name is contacting you and their email is $email\n\n$msg";
    
    mail($to,$subject,$mailBody,$headers);
    $thankYou="Your message has been sent.";
    }
    
  ?>
<html>
    <head>
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <nav class="teal lighten-2" role="navigation">
            <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Navbar Link</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container banner">
                    
                    <h1 class="header center green-text text-darken-4 text-shadow">Adam Yacine Sebti</h1>
                    <hr>
                    <div class="row center">
                    <h4 class="purple-text text-darken-2 text-shadow">Personal Injury / Criminal Defense / Civil Rights</h4>
                    <h5 class="header col s12 teal-text text-shadow">Here for Legal Advice and Problem Solving</h5>
                    </div>
                    <div class="row center">
                    <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Call for Free Consultation</a>
                    </div>
                    <br>

                </div>
            </div>
            <div class="parallax">
                <img src="img/house2.jpg" alt="Unsplashed background img 1" style="transform: translate3d(-50%, 219.225px, 0px); opacity: 1;" class="responsive-img">
            </div>
        </div>
    
    </div>
        <div class="container"> 
            <div class="row">
                <div class="col">
                    <h3 class="purple-text">Tulane Law graduate 2013</h3>
                    <h3 class="teal-text text-lighten-2">Private practice for 8 years</h3>
                    <h3 class="green-text text-darken-4">Musician - Piano player</h3>
                </div>
            </div>
        </div>
        <div class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                    <br>
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    <br>
                    </div>
                </div>
            </div>
            <div class="parallax">
                <img src="img/office4.jpg" alt="Unsplashed background img 2" style="opacity: 1; transform: translate3d(-50%, 254.27px, 0px);" class="responsive-img">
            </div>
        </div>
        <div class="container">
            <div id="contact" class="section">
                <div class="row">
                  <div class="col s12 center">
                    <h4 class="purple-text">Contact</h4>
                    <form action="#" id="form" method="post">
                        <div class="row">
                        
                        </div>
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <input name="name" type="text" class="validate">
                                <label for="name">Full Name</label>
                            </div>
                            <div class="input-field col m6 s12">
                                <input name="email" type="email" class="validate">
                                <label for="email">Email</label>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m9 s12">
                                <textarea name="msg" class="materialize-textarea"></textarea>
                                <label for="msg">Message</label>
                                <?=$thankYou?>
                            </div>
                            <div class="input-field col m3 s12">
                                <button class="btn waves-effect waves-light" type="submit" name="submit" value="submit" id="send">Submit
                                </button>    
                            </div> 
                                               
                        </div>
                    </form>             
                </div>
            </div>
        </div>
        

      <!--JavaScript at end of body for optimized loading-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
  </html>
        
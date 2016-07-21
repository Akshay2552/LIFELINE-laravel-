<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>LIFELINE</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<ul id='dropdown1' class='dropdown-content'>
 <li><a href='#'>UPTU</a></li>
 <li><a href='#'>IIT KANPUR</a></li>
 <li><a href='#'>IIT BOMBAY</a></li>
 </ul>
<ul id='dropdown2' class='dropdown-content'>
  <li><a href='#'>LOGOUT</a></li>
  <li><a href='#'>DASHBOARD</a></li>
</ul>  
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">LIFELINE</a>
      <ul class="right hide-on-med-and-down">
        
		<li><a href='lifeline'>Home</a></li>
		<li><a class='dropdown-button' href='#' data-activates='dropdown1'>UNIVERSITIES<i class="material-icons right">arrow_drop_down</i></a></li>
		    @if(Session()->has('username'))
             <li><a class='dropdown-button'  data-activates='dropdown2'>WELCOME'' {{ Session('username')}}<i class="material-icons right">arrow_drop_down</i></a></li>
            @else <li><a href="login">LOGIN</a></li>@endif
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">LIFELINE</h1>
        <div class="row center">
          <h5 class="header col s12 light">COLLEGE-that can save your life</h5>
        </div>
        <div class="row center">
          <a href="register" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="back1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up your selection of college</h5>

            <p class="light">We did most of the heavy lifting for you to go out individually to colleges and find out the exact information required for you to select a college</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience</h5>

            <p class="light">By looking at the requirement of students to get a clean and reliable source of information,we developed this user friendly platform to save their time,money and confusion while selecting the college.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation after going through all the aspects of the colleges.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern platform to provide a lifeline in your career.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="back2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>ABOUT US</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">COLLEGES ARE THE GATEWAY TO YOUR FUTURE </h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="back3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">This is my ambitious project which I have just started on LARAVEL in order to explore the possibilies of LARAVEL</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">FEATURES</h5>
          <ul>
            <li><a class="white-text" href="#!">REGISTER</a></li>
            <li><a class="white-text" href="#!">LOGIN</a></li>
            <li><a class="white-text" href="#!">UPTU</a></li>
            <li><a class="white-text" href="#!">JSS</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="www.google.com">Akshay</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

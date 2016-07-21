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
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">LIFELINE</a>
      <ul class="right hide-on-med-and-down">
        
        
		<li><a href='#'>Home</a></li>
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
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">REGISTER</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="back1.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <br><br>
  
  



  <div class="container">
  <div class="row">
<fieldset>
<div class="card-panel teal lighten-2"><h5 class="white-text" style="margin-left:300px;">LIFELINE WELCOMES YOU</h5></div>
<div class="row" style="margin-left:370px;">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li class="red-text lighten-5">*{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			   </div>
			   </div>
			   </div>
			   </div>
     <form class="s6" method="POST" action="{{ url('register') }}" role="form">


	 <input type="hidden" name="_token" value="{{ csrf_token() }}">


		<div class="row">
	           <div class="input-field col s6">
			       <i class="material-icons prefix">account_circle</i>
	               <input placeholder="akshay" id="first_name" type="text" class="validate" name="first_name">
	               <label for="first_name">FIRST NAME</label>
               </div>

               <div class="input-field col s6">
                  <input placeholder="gangwar" id="last_name" type="text" class="validate" name="last_name">
                  <label for="last_name">LAST NAME</label>
               </div>
		</div>


			<div class="row">
                <div class="input-field col s12">
				   <i class="material-icons prefix">person-pin</i>
                   <input type="email" id="email" class="validate" placeholder="akki.gr34@gmail.com" name="email">
                   <label for="email">EMAIL</label>
                </div>
           	</div>
           
		   
		  <div class="row">
               <div class="input-field col s12">
			        <i class="material-icons prefix">phone</i>
                   <input type="tel" id="telephone" class="validate" placeholder="1010101010" name="phone">
                   <label for="telephone" >TELEPHONE</label>
               </div>
          </div>
     
         <div class="row">
              <div class="input-field col s12">
			       <i class="material-icons prefix">label</i>
                   <input type="date" class="datepicker" id="birthdate" placeholder="25-09-1995" name="birthdate">
                   <label for="birthdate">BIRTHDATE</label>
              </div>
         </div>			  
         
		 
		 <button class="btn waves-effect waves-light" type="submit" style="margin-left:370px;">REGISTER
         <i class="material-icons right">send</i>
         </button>
		 
    </form>
	</fieldset>
   </div>
 </div>
 
 
   
  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
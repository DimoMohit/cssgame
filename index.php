<?php
  require 'rb.phar';
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </head>
  <body>
  	<div class="container">
  		<nav class="head-nav navbar navbar-inverse navbar-static-top" role="navigation">
  	   	    <div class="container-fluid">
  	   	      <div class="navbar-header">
  	   	         <div class="container">
                    <ul class="nav navbar-nav ">
                      <li class="active "><a href="#" class="logo navbar-brand">
                          Dimo
                      </a>
                      </li>
                      <li><a href="#">Link</a></li>
                      <li class="dropdown navbar-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu ">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                      <li class="navbar-right">
                      	<form class="navbar-form " role="search">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                      </li>
                      <li class="dropdown navbar-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu ">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
  		</nav>
  		<div class="row mid-container">
        <div class="left-navigation col-md-4">
          
        </div>  
        <div class="right-navigation col-md-8">
          
        </div>
  			
  		</div>
  	</div>
  </body>
</html>
<?php include "base.php"; ?>
<!DOCTYPE>
<html>
<head>
	<title>Ultra Tap - Tap Gadgets Specialists</title>
	<link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
	
</head>
<body>

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!--<a class="brand" href="#"></a>-->
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li class="divider-vertical"></li>
              <?php  
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))  
{  
     ?>  
   
     <li><a href="" class="disabled">Hi! <?=$_SESSION['Username']?></a></li>  
      <li><a href="logout.php">Sign Out</a></li>
     <?php  
}  
elseif(!empty($_POST['username']) && !empty($_POST['password']))  
{  
    $username = mysql_real_escape_string($_POST['username']);  
    $password = md5(mysql_real_escape_string($_POST['password']));  
      
    $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");  
      
    if(mysql_num_rows($checklogin) == 1)  
    {  
        $row = mysql_fetch_array($checklogin);  
        $email = $row['EmailAddress'];  
          
        $_SESSION['Username'] = $username;  
        $_SESSION['EmailAddress'] = $email;  
        $_SESSION['LoggedIn'] = 1;  
          
        echo "<h1>Success</h1>";  
        echo "<p>We are now redirecting you to the member area.</p>";  
     //   echo "<meta http-equiv='refresh' content='=0;index.php' />"; 
        echo "<meta content='0;index.php' http-equiv='refresh'>"; 
    }  
    else  
    {  
        echo "<h1>Error</h1>";  
        echo "<p>Sorry, your account could not be found. Please <a href=\"login.php\">click here to try again</a>.</p>";  
    }  
}  
else  
{  
    ?>  
      
     <!-- <li><a href="login.php">Sign In</a></li> -->
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Sign Up</a></li>
   <!-- <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p> --> 
      
   <!--  <form method="post" action="login.php" name="loginform" id="loginform">  
    <fieldset>  
        <li><a class="disabled">Username:</a></li>
        <li><a class="disabled"><input type="text" name="username" id="username" /></a></li>  
        <li for="password"><a class="disabled">Password:</a></li><input type="password" name="password" id="password" />
        <li><a href=""><input type="submit" name="login" id="login" value="Login" />  
    </fieldset>  
    </form>  --> 
   <!--  <div class="clearfix"></div>
    <div class="modal hide fade in" id="myModal"  tabindex="-1" role="dialog" aria-hidden="True">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h1>Log-In</h1>
      </div>

      <div class="modal-body">
        <form method="post" action="index.php" name="loginform" id="loginform">
          <p><input type="text" class="span3" name="username" id="username" placeholder="Username"></p>
          <p><input type="password" class="span3" name="password" id="password" placeholder="Password"></p>
          <p><button type="button" class="btn btn-primary" name="login" id="login">Sign In</button> </p>
        </form>
      </div>
      <div class="modal-footer">
        <a href="register.php" class="btn btn-primary">Register</a>
      </div>
    </div> -->
      
   <?php  
}  
?> 
      <!--        <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">LANGUAGE <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">EN</a></li>
                    <li><a href="#">ID</a></li>
                    <li><a href="#">FR</a></li>
                    <li class="divider"></li>
                    <li><a href="#">IT</a></li>
                  </ul>
                </li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


<div class="container">
	
	<div class="row-fluid">
	<div class="span6 logo">
	<a href="index.php"></a><div class="brand logo"><img src="static/img/shop-logo.png"></div><br>
	<!--<p>Tap Gadgets Specialists</p> -->
	</div>
	</div>
<div class="row-fluid">
        <div class="span12 nav-menus">
            <ul class="nav nav-pills">
                <li class="active"><a href="index.php">Home</a></li>
           <!--      <li><a href="about.php">About us</a></li> -->
                <li><a href="products.php">Products</a></li>
                <li><a href="order.php">Order</a></li>
                <!-- <li><a href="register.php">Register</a></li> -->
               <!--  <li><a href="login.php">Log-in</a></li> -->
            </ul>
        </div>


</div>
	

<div class="row-fluid">
        <div class="span12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
              <div class="item active">
                <img alt="" src="static/img/slider1.png">
                <div class="carousel-caption">
                  <h4>IPhone 5 and Samsung Galaxy S4 LTE 20% Off</h4>
                  <p>Discounts Until December 24, 2013, Hurry!</p>
                </div>
              </div>
              <div class="item">
                <img alt="" src="static/img/slider2.png">
                <div class="carousel-caption">
                  <h4>IPhone 5C</h4>
                  <p>Have Fun with Various colors of IPhone 5C. Grab one Now!</p>
                </div>
              </div>
              <div class="item">
                <img alt="" src="static/img/slider3.png">
                <div class="carousel-caption">
                  <h4>Samsung Galaxy Note 3</h4>
                  <p>Be Creative in Anytime, Anywhere.</p>
                </div>
              </div>
              <div class="item">
                <img alt="" src="static/img/slider4.png">
                <div class="carousel-caption">
                  <h4>HTC One</h4>
                  <p>Switch for the better. Grab one now!</p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
      </div>
      <!-- Best Seller -->
      <div class="row-fluid">
        <div class="span12">
            <div class="page-header">
                <h1>Best Seller <small>Most sold product in this month</small></h1>
            </div>
        </div>
      </div>

      <div class="row-fluid">
        <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
                <a href="samsung-s4.php"><img alt="" src="static/img/galaxys4lte.png"></a>
                <div class="caption">
                  <h5>Samsung Galaxy S4 LTE</h5>
                  <p>PHP 24,280.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="iphone-5.php"><img alt="" src="static/img/iphone5.png"></a>
                <div class="caption">
                  <h5>IPhone 5</h5>
                  <p>PHP 27,999.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="samsung-note-2.php"><img alt="" src="static/img/galaxynote2.png"></a>
                <div class="caption">
                  <h5>Samsung Galaxy Note 2</h5>
                  <p>PHP 32,990.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="htc-one.php"><img alt="" src="static/img/one.png"></a>
                <div class="caption">
                  <h5>HTC One</h5>
                  <p>PHP 35,500.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
        </ul>
      </div>


<!--New Arrival-->
      <div class="row-fluid">
        <div class="span12">
            <div class="page-header">
                <h1>New Arrival<small> Month September</small></h1>
            </div>
        </div>
      </div>

      <div class="row-fluid">
        <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
                <a href="iphone-5c.php"><img alt="" src="static/img/iphone5c.png"></a>
                <div class="caption">
                  <h5>IPhone 5C</h5>
                  <p>PHP 38,500.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="itouch-5.php"><img alt="" src="static/img/ipodtouch5thgen.png"></a>
                <div class="caption">
                  <h5>IPod Touch 5th Gen</h5>
                  <p>PHP 16,490.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="htc-onex.php"><img alt="" src="static/img/onex.png"></a>
                <div class="caption">
                  <h5>HTC One X</h5>
                  <p>PHP 16,490.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail">
                <a href="samsung-s4-active.php"><img alt="" src="static/img/galaxys4active.png"></a>
                <div class="caption">
                  <h5>Samsung Galaxy S4 Active</h5>
                  <p>PHP 25,312.00</p>
                  <p>Available</p>
                </div>
              </div>
            </li>
        </ul>
      </div>

<div class="row-fluid footer">
        <div class="span3">
            <h3>Information</h3>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Map</a></li>
            </ul>
        </div>
        <div class="span3">
            <h3>Stay in touch</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li><br />
                <li>
                    <div class="control-group">
                        <div class="controls">
                          <div class="input-prepend input-append">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" size="16" id="appendedPrependedInput" class="span6" placeholder="Enter your email"><input type="submit" name="submit" value="Subscribe" class="btn" />
                          </div>
                        </div>
                    </div>
                </li>
                
            </ul>
            <p></p>
        </div>
        <div class="span3">
            <h3>Affiliate</h3>
            <ul>
                <li><a href="#">La Consolacion College - Caloocan</a></li>
                <li><a href="#">Liwanag Graphics Inc.</a></li>
                
            </ul>
        </div>
        <div class="span3">
            <h3>Discover our store</h3>
            <ul>
                <li><a href="#">Caloocan</a></li>
                
            </ul>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Ultra Tap 2013. All right reserved.</p>
      </footer>

</div>


   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/js/jquery-1.7.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/script.js"></script>
</body>
</html>
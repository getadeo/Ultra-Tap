<?php include "base.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Ultra Tap - Tap Gadgets Specialists</title>
	<link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    
	<title></title>
</head>
<body>
	<div id="main">
		<?php  
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))  
{  
     ?>  
    
     <h1>Member Area</h1>  
     <p>Thanks for logging in! You are <b><?=$_SESSION['Username']?></b> and your email address is <b><?=$_SESSION['EmailAddress']?></b>.</p>  
       <a href="logout.php">logout</a>
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
    <!-- <div class="offset5 span9"> 
   <h1>Member Login</h1>  
      
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>  
     
    <form method="post" action="login.php" name="loginform" id="loginform">  
    <fieldset>  
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />  
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />  
        <input type="submit" name="login" id="login" value="Login" />  
    </fieldset>  
    </form>  
    </div> -->

    <div class="modal" id="myModal"  tabindex="-1" role="dialog" aria-hidden="True">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">X</button> -->
        <h1>Log-In</h1>
      </div>

      <div class="modal-body">
        <form method="post" action="login.php" name="loginform" id="loginform">
            <fieldset>
          <p><input type="text" class="span3" name="username" id="username" placeholder="Username"></p>
          <p><input type="password" class="span3" name="password" id="password" placeholder="Password"></p>
          <p><button type="submit" class="btn btn-primary" name="login" id="login">Sign In</button> </p>
          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <a href="register.php" class="btn btn-primary">Register</a>
      </div>
    </div>
      
   <?php  
}  
?> 
	</div>
</body>
</html>
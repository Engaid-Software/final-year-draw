<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
	printf("asd");
   if($fgmembersite->RegisterUser())
   {
	   printf("asd");
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersidte.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidgdet.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>  
    
    
    
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
#fg_membersite .error
{
   font-family: Verdana, Arial, sans-serif; 
   
   color: #900;
}
</style>
        
</head>
<body background="https://i0.wp.com/www.yoga-east.net/wp-content/uploads/2015/08/atlantic-blurred-background.jpg" 
style="background-size: 100% 100% ;background-repeat: no-repeat;min-height:2000px;">

<div style="padding-top: 5%;">
<!-- Form Code Start -->
<div id='fg_membersite' class="container">
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<!--
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    .
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>
   --->

	<div class="row">
		<div class="col-sm-2">
		<img  src="https://engaid.co.uk/wp-content/uploads/2018/11/cropped-engaid-logo-no-bkground-1-1.png" alt="Smiley face" height="60px" width="60pz"> 
		</div> 
    <div class="cosl-sm-10" ><h1 align="right" style="color:#7fa2db;font-family: 'Comic Sans MS', 'Comic Sans', cursive" ><b>End of Year draw 2018/2019</b></h1></div>
</div>	
 
    
   
    <br>
    <p>Provided to you by Engaid Ltd</p>
<div class='short_explanation'><b> *required fields</b></div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<br>

    <div class='contdainer'>
    <label for='name' >Your Full Name*: </label><br/>
    <input placeholder="Enter Name" type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='contaisner'>
    <label for='email' >Email Address*:</label><br/>
    <input placeholder="Enter Email" type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='containedr'>
    <label for='username' >Referal:</label><br/>
    <input placeholder="Enter Referal (If any)" type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<!---
<div class='contaisner' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input placeholder="Enter Password" type='password' name='password' id='password' maxlength="50" />
    </noscript>    .
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>
    --->
    <p>By entering this draw you agree to our <a href="#">Terms & Privacy</a>.</p>
    
  
    <input class= "btn btn-default" type='submit' name='Submit' value='Submit' />
  


</form>
</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    //frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<!--
Form Code End (see html-form-guide.com for more info.)
-->
</div>

	<footer class="site-footer" id="footer" >
		<br>
		<p align="center" style="color:white; class="site-footer__fineprint" id="fineprint">Engaid | Copyright ©2018 | All Rights Reserved</p>
	</footer>
</body>
</html>

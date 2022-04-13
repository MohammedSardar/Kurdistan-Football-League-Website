<?php
ob_start();
session_start();
include('connection.php');
if(isset($_SESSION["login"]))
{
	header("location:index.php");
	ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="AdminDesigns">
<meta name="keywords" content="Classic Admin HTML5 Bootstrap 3 Admin Template UI Theme">
<meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
<title>Admin Panel- Login</title>

<link rel="shortcut icon" href="assets/img/favicon.ico">

<link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body class="external-page external-alt sb-l-c sb-r-c">

<div id="main" class="animated fadeIn">

<section id="content_wrapper">

<section id="content">
<div class="admin-form theme-info mw500" id="login">

<div class="row table-layout">
<a href="../index.php" title="Return to Home Page">
<img alt="image" src="assets/img/logos/logo.png" title="Return to Home" class="center-block img-responsive" style="max-width: 275px;">
</a>
</div>
<?php
$error=false;
if(isset($_POST["login"]))
{
	$user=$_POST["username"];
	$pass=$_POST["password"];
	$captcha=$_POST["g-recaptcha-response"];
	$result=mysqli_query($conn,"SELECT * FROM login WHERE username='$user' AND password='$pass'");
	if(mysqli_num_rows($result)==1)
		{
			if(!$captcha){
			$error=true;
			}
			else
			{
			$error=false;
			$_SESSION['login']=$user;
			header("location: index.php");
			}
		}
		else{

?>
<div class="bs-component">
<div class="alert alert-danger alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="fa fa-remove pr10"></i>
<strong>Oh snap!</strong> You need to
<a href="#" class="alert-link">Change a few things up</a> and try again.
</div>
</div>
<?php
}
}
?>

<form class="panel  mb25" method="POST" action="login.php">
<div class="panel-body p25 pb15 pu">
<div class="section-divider mv30">
<span>Login To Administrator Panel</span>
</div>

<div class="section">
<label for="username" class="field-label text-muted fs18 mb10">Username</label>
<label for="username" class="field prepend-icon">
<input type="text" name="username" id="username" class="gui-input" placeholder="Enter username">
<label for="username" class="field-icon">
<i class="fa fa-user"></i>
</label>
</label>
</div>

<div class="section">
<label for="username" class="field-label text-muted fs18 mb10">Password</label>
<label for="password" class="field prepend-icon">
<input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
<label for="password" class="field-icon">
<i class="fa fa-lock"></i>
</label>
</label>
</div>
<center>
<?php
if($error)
{
?>
<div class="bs-component">
<div class="alert alert-danger alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="fa fa-remove pr10"></i>
<strong>Warrning!</strong> please verify you are not a robot and try again.
</div>
</div>
<?php
}
?>
<div class="g-recaptcha" data-sitekey="6Ldc71wUAAAAAJRJiSaUM7uHWntWXUP9Kidpopk7"></div>
</center>
</div>
<div class="panel-footer clearfix pull">
<button type="submit" class="button btn-primary mr10 pull-right" name="login">Sign In</button>
</div>
</form>

<div class="login-links">
<p>
<a href="forget.php" class="active" title="Sign In">Forgot Password?</a>
</p>
</div>
</div>
</section>

</section>


<div id="dropmenu" class="">
<div class="topbar-menu row">
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-danger" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-inbox"></span>
</div>
<span class="tile-title">Messages</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-warning" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-cog"></span>
</div>
<span class="tile-title">User Settings</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-success" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-user"></span>
</div>
<span class="tile-title">Profile</span>
 </div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-primary" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-book"></span>
</div>
<span class="tile-title">Directory</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-alert" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-pencil"></span>
</div>
<span class="tile-title">Projects</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-system" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-home"></span>
</div>
<span class="tile-title">Settings</span>
</div>
</a>
</div>
</div>
</div>

</div>



<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>


<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>

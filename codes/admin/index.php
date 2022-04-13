<?php 
session_start();
include('connection.php');
if(!isset($_SESSION["login"]))
{
	header("location:login.php");
}
else
{
	$sqluser="SELECT * FROM login WHERE username='$_SESSION[login]'";
	$queryuser=mysqli_query($conn,$sqluser);
	while($userrow=mysqli_fetch_array($queryuser))
	{
		$fullname=$userrow["fullname"];
		$profimg=$userrow["image"];
		$level=$userrow["level"];
	}
	$img="assets/img/users/".$profimg;
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
<title>Admin Panel</title>

<link rel="shortcut icon" href="assets/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="assets/fonts/glyphicons-pro/glyphicons-pro.css">
<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="blank-page">

<div id="main">

<header class="navbar navbar-gradient navbar-lg bg-light navbar-fixed-top">

<div class="navbar-branding">
<a class="navbar-brand" href="index.php"><img src="assets/img/logos/logo.png" class="img-responsive-disabled" height="32" width="32" alt="logo">
<b>KURD</b>League
</a>
<a class="menu-toggle-btn" data-menu-toggle="sidebar_left" href="#">
<i class="fa fa-bars"></i>
</a>
</div>

<ul class="nav navbar-nav navbar-left">
<li class="navbar-link hidden-xs">
<a class="request-fullscreen toggle-active" href="#">
<span class="glyphicon glyphicon-fullscreen"></span>
</a>
</li>
</ul>

<form class="navbar-form navbar-left navbar-search hidden" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search..." value="Search...">
</div>
</form>

<ul class="nav navbar-nav navbar-right">
<li class="navbar-link dropdown">
<div class="navbar-btn btn-group">
<button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
<span class="fa fa-bell-o fs14 va-m"></span>
<span class="badge badge-danger">2</span>
</button>
<div class="dropdown-menu dropdown-persist animated animated-shorter fadeIn" role="menu">
<div class="panel panel-inverse mbn">
<div class="panel-menu">
<span class="panel-icon">
<i class="fa fa-clock-o"></i>
</span>
<span class="panel-title fw600"> Recent Activity</span>
<button class="btn btn-default light btn-xs ph10 pull-right" type="button">
<i class="fa fa-refresh"></i>
</button>
</div>
<div class="panel-scroller scroller-overlay bg-light dark">
<ol class="timeline-list timeline-item-hover">
<li class="timeline-item new-item">
<div class="timeline-icon bg-dark light">
<span class="fa fa-tags"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Michael</a> Added to his store:
<a href="#">Ipod</a>
</div>
<div class="timeline-date">1:25am</div>
</li>
<li class="timeline-item new-item">
<div class="timeline-icon bg-dark light">
<span class="fa fa-tags"></span>
</div>
<div class="timeline-desc">
<a class="fw600 text-dark" href="#">Sara</a> Added his store:
<a href="#">Notebook</a>
</div>
<div class="timeline-date">3:05am</div>
</li>
<li class="timeline-item">
<div class="timeline-icon bg-success">
<span class="fa fa-usd"></span>
</div>
<div class="timeline-desc">
<a class="fw600" href="#">Admin</a> created invoice for:
<a href="#">Software</a>
</div>
<div class="timeline-date">4:15am</div>
</li>

</ol>
</div>
<div class="panel-footer text-center">
<a href="#" class="link-unstyled"> View All </a>
</div>
</div>
</div>
</div>
</li>

<li class="navbar-link dropdown">
<div class="navbar-btn btn-group user-menu">
<button class="btn btn-sm dropdown-toggle" data-toggle="dropdown" type="button">
<span class="caret caret-lg mr5"></span>
<span class="glyphicon glyphicon-user"></span>
</button>
<ul class="dropdown-menu list-group dropdown-persist animated animated-shorter fadeIn" role="menu">
<li class="dropdown-header clearfix hiddn">
<img src="assets/img/avatars/1.jpg" class="avatar hidden" alt="avatar" height="30" width="30">
<h4> <?php echo $fullname; ?></h4>
</li>
<li class="list-group-item">
<a href="profile.php" class="">
<span class="fa fa-user"></span> Profile
<span class="label label-danger">8</span>
</a>
</li>
<li class="list-group-item">
<a href="profile.php?password=change" class="">
<span class="fa fa-key fs15"></span> Change Password </a>
</li>
<li class="dropdown-footer">
<a href="logout.php" class="">
<span class="fa fa-power-off"></span> Logout </a>
</li>
</ul>
</div>
</li>
</ul>
</header>


<aside id="sidebar_left" class="sidebar sidebar-light">

<div class="sidebar-content">

<header class="sidebar-header">

<div class="sidebar-widget author-widget author-widget-square">
<div class="media">
<a class="media-left" href="#">
<img src="<?php echo $img; ?>" class="" alt="avatar" width="36" height="36">
</a>
<div class="media-body">
<div class="media-links">
<a href="profile.php" class="sidebar-menu-toggle">User Menu -</a>
<a href="logout.php">Logout</a>
</div>
<div class="media-author"><?php echo $fullname; ?></div>
</div>
</div>
</div>



<div class="sidebar-widget search-widget search-widget-light">
<div class="form-group mbn">
<span class="append-icon left">
<i class="fa fa-search"></i>
</span>
<input type="text" class="form-control" id="sidebarSearch" placeholder="Search...">
</div>
</div>
</header>


<ul class="nav sidebar-menu sidebar-menu-border">
<li class="active">
<a href="index.php">
<span class="glyphicon glyphicon-home"></span>
<span class="sidebar-title">Dashboard</span>
</a>
</li>
<?php 
if($level=="administrator")
{
?>
 <li>
<a class="accordion-toggle" href="#">
<span class="glyphicons glyphicons-soccer_ball"></span>
<span class="sidebar-title">Leagues</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="leagues.php?add=new">
<span class="glyphicon glyphicon-plus"></span> Add New League</a>
</li>
<li>
<a href="leagues.php">
<span class="glyphicon glyphicon-wrench"></span> Manage League</a>
</li>
</ul>
</li>
<?php
}
?>
<?php 
if($level=="administrator" OR $level=="editor")
{
?>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicons glyphicons-t-shirt"></span>
<span class="sidebar-title">Teams</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="teams.php?add=new">
<span class="glyphicon glyphicon-plus"></span> Add New Team </a>
</li>
<li>
<a href="teams.php">
<span class="glyphicon glyphicon-wrench"></span> Manage Teams </a>
</li>
</ul>
</li>
<?php
}
?>
<?php 
if($level=="administrator" OR $level=="editor")
{
?>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-user"></span>
<span class="sidebar-title">Players</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="players.php?add=new">
<span class="glyphicon glyphicon-plus"></span> Add New Player </a>
</li>
<li>
<a href="players.php?transfers=player">
<span class="glyphicon glyphicon-transfer"></span> Transfer Players</a>
</li>
<li>
<a href="players.php">
<span class="glyphicon glyphicon-wrench"></span> Manage Players</a>
</li>
</ul>
</li>
<?php
}
?>
<?php 
if($level=="administrator" OR $level=="editor")
{
?>
<li>
<a class="accordion-toggle" href="#">
<span class="fa fa-diamond"></span>
<span class="sidebar-title">Stadiums</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="stadiums.php?add=new">
<span class="fa fa-plus"></span> Add New Stadium</a>
</li>
<li>
<a href="stadiums.php">
<span class="fa fa-wrench"></span> Manage Stadiums </a>
</li>

</ul>
</li>
<?php
}
?>
<li>
<a class="accordion-toggle" href="#">
<span class="glyphicons glyphicons-stopwatch"></span>
<span class="sidebar-title">Games</span>
<span class="caret"></span>
</a>
<ul class="nav sub-nav">
<li>
<a href="games.php?add=new">
<span class="fa fa-plus"></span> Add New Game </a>
</li>
<li>
<a href="games.php">
<span class="fa fa-wrench"></span> Manage Games </a>
</li>
</ul>
</li>
<?php 
if($level=="administrator")
{
?>
<li class="menu-item-bottom">
<a href="settings.php">
<span class="glyphicons glyphicons-settings"></span>
<span class="sidebar-title">Settings</span>
</a>
</li>
<li class="menu-item-bottom">
<a href="users.php">
<span class="glyphicons glyphicons-user"></span>
<span class="sidebar-title">Users</span>
</a>
</li>
<?php
}
?>
</ul>


</div>

</aside>


<section id="content_wrapper">




</section>



</div>



<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
    domready(function() {

        // Init Demo Functionality
        Demo.init({ disableLayout: true })

        // Init Theme Core
        Core.init();

    });
    </script>

</body>
</html>
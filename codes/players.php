<?php
include("connection.php");
$setsql="SELECT * FROM settings WHERE setting_no='1'";
$setqu=mysqli_query($conn,$setsql);
while($setrow=mysqli_fetch_array($setqu))
{
	$sitetitle=$setrow["title"];
	$sitelogo=$setrow["logo"];
	$sitefooter=$setrow["sfooter"];
	$slider1img=$setrow["slide1"];
	$slider1title=$setrow["stitle1"];
	$slider1text=$setrow["sbody1"];
	$slider2img=$setrow["slide2"];
	$slider2title=$setrow["stitle2"];
	$slider2text=$setrow["sbody2"];
		$copyright=$setrow["copyright"];

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $sitetitle;?> - Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">




<script type="text/javascript">


        function sortData(){
            var tableData = document.getElementById('data_table').getElementsByTagName('tbody').item(0);
            var rowData = tableData.getElementsByTagName('tr');
            for(var i = 0; i < rowData.length - 1; i++){
                for(var j = 0; j < rowData.length - (i + 1); j++){
                             if(parseInt(rowData.item(j).getElementsByTagName('td').item(0).innerHTML) > parseInt(rowData.item(j+1).getElementsByTagName('td').item(0).innerHTML)){
                        tableData.insertBefore(rowData.item(j+1),rowData.item(j));
                    }
                }
            }
        }

</script>


	<style>
	.noup{
		text-transform: none;
	}
	</style>


  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header rd-navbar-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel-inner container">
                <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-left">
                  <!-- Owl Carousel-->
                  <div class="owl-carousel-navbar owl-carousel-inline-outer">
                  </div>
                </div>
                <div class="rd-navbar-panel-item rd-navbar-panel-item-right">
                  <ul class="list-inline list-inline-bordered">
                    <li></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-main">
              <div class="rd-navbar-main-top">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand link-circle" href="index.html"><img class="brand-logo " src="images/logo/<?php echo $sitelogo;?>" alt="" width="129" height="129"/></a>
                  </div>
                  <!-- RD Navbar List-->
                  <ul class="rd-navbar-list">
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="images/partners-1-inverse-75x42.png" alt="" width="75" height="42"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="images/partners-2-inverse-78x41.png" alt="" width="78" height="41"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="images/partners-3-inverse-65x44.png" alt="" width="65" height="44"/></a></li>
                  </ul>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="players.php" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Enter your search request here...</label>
                        <input class="rd-navbar-search-form-input form-input" type="text" name="playername">
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit fl-budicons-launch-search81" name="search" type="submit"></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-main-bottom rd-navbar-darker">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a></li>
					<li class="rd-nav-item"><a class="rd-nav-link" href="match.php">Matches</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php?standing=1">Standing</a></li>
					<li class="rd-nav-item"><a class="rd-nav-link" href="teams.php">Teams</a></li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="players.php">Players</a></li>
                  </ul>
				  <div class="rd-navbar-main-element">
                    <ul class="list-inline list-inline-sm">
											<li><a class="icon icon-xs icon-light fa fa-facebook" href="https://www.facebook.com/KurdistanFootballLeague/"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-twitter" href="https://twitter.com/KurdistanLeague"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <section class="section section-md bg-gray-100">
        <div class="container">
          <div class="row row-50">


            <div class="col-lg-8">
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Search For Player
                  </h5>
                </div>
              </article>

			  <form action="players.php" method="GET">
			<div class="d-inline-block col-md-3">Player Name or Number</div>
			<div class="d-inline-block col-md-6"><input type="text" class="form-control" placeholder="Player Name or Number" name="playername"/></div>
			<div class="d-inline-block col-md-2"><button type="submit" class="btn btn-success" name="search">Search</button></div>
</form>
</br></br></br>

			  <?php
			  if(isset($_GET["search"]))
			  {
			  include("pages/playerss.php");
			  }
			  if(isset($_GET["details"]))
			  {
			  include("pages/playerdetails.php");
			  }
			  ?>
            </div>
            <?php
			 include("pages/latest.php");
			?>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section footer-classic footer-classic-dark context-dark">
        <div class="footer-classic-main">
          <div class="container">
              <div class="col-lg-12 text-center text-sm-left">
                <article class="unit unit-sm-horizontal unit-middle justify-content-center justify-content-sm-start footer-classic-info">
                  <div class="unit-left"><a class="brand brand-md" href="index.html"><img class="brand-logo " src="images/logo/<?php echo $sitelogo;?>"  alt="" width="129" height="129"/></a>
                  </div>
                  <div class="unit-body">
                    <p><?php echo $sitefooter;?></p>
                  </div>
                </article>
              </div>

          </div>
        </div>
        <div class="footer-classic-aside footer-classic-darken">
          <div class="container">
            <div class="layout-justify">
              <!-- Rights-->
              <p class="rights"><?php echo $copyright;?></p>
            </div>
          </div>
        </div>
      </footer>

    </div>
<script src="js/sorttable.js"></script>

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>

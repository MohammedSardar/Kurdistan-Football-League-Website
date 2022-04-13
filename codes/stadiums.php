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
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo " src="images/logo/<?php echo $sitelogo;?>" alt="<?php echo $sitefooter;?>" width="129" height="129"/></a>
                  </div>
                  <ul class="rd-navbar-list">
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"></a></li>
                  </ul>
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
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
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php?soccer=1">Top Soccer</a></li>
					<li class="rd-nav-item"><a class="rd-nav-link" href="teams.php">Teams</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="players.php">Players</a></li>
                  </ul>
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

             <?php
			 if(isset($_GET["details"]))
			 {
			 include("pages/stadiumdetails.php");
			 }
			 else
			 {
			 include("pages/stadiums.php");
			 }
			 ?>

            </div>
            <!-- Aside Block-->
            <div class="col-lg-4">
              <aside class="aside-components">
                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">latest Games results
                      </h5>
                    </div>
                  </article>

                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/teams/logos/peshmarga.jpg" alt="" width="55" height="55"/>
                        </figure>
                        <div class="game-result-team-name">Peshmarga SC</div>
                        <div class="game-result-team-country">Sulaimaniya</div>
                      </div>
                      <div class="game-result-middle">
                        <div class="game-result-score-wrap">
                          <div class="game-result-score game-result-team-win">2<span class="game-result-team-label game-result-team-label-top">Win</span>
                          </div>
                          <div class="game-result-score-divider">
                            <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                              <g>
                                <circle cx="3.5" cy="3.5" r="3"></circle>
                                <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                              </g>
                              <g>
                                <circle cx="3.695" cy="17.5" r="3"></circle>
                                <path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
                              </g>
                            </svg>
                          </div>
                          <div class="game-result-score">1
                          </div>
                        </div>
                        <div class="game-results-status">Home</div>
                      </div>
                      <div class="game-result-team game-result-team-second">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/teams/logos/handrem.jpg" alt="" width="41" height="59"/>
                        </figure>
                        <div class="game-result-team-name">Handren FC</div>
                        <div class="game-result-team-country">Hawler</div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>New Yorkers Stadium</li>
                        <li>
                          <time datetime="2017-04-14">April 14, 2017</time>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/team-bavaria-fc-56x52.png" alt="" width="56" height="52"/>
                        </figure>
                        <div class="game-result-team-name">Duhok FC</div>
                        <div class="game-result-team-country">Duhok</div>
                      </div>
                      <div class="game-result-middle">
                        <div class="game-result-score-wrap">
                          <div class="game-result-score">2
                          </div>
                          <div class="game-result-score-divider">
                            <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                              <g>
                                <circle cx="3.5" cy="3.5" r="3"></circle>
                                <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                              </g>
                              <g>
                                <circle cx="3.695" cy="17.5" r="3"></circle>
                                <path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
                              </g>
                            </svg>
                          </div>
                          <div class="game-result-score game-result-team-win">3<span class="game-result-team-label game-result-team-label-top">Win</span>
                          </div>
                        </div>
                        <div class="game-results-status">Away</div>
                      </div>
                      <div class="game-result-team game-result-team-second">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/team-atletico-55x55.png" alt="" width="55" height="55"/>
                        </figure>
                        <div class="game-result-team-name">Zaxo FC</div>
                        <div class="game-result-team-country">Duhok</div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>New Yorkers Stadium</li>
                        <li>
                          <time datetime="2017-04-14">April 14, 2017</time>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/team-atletico-55x55.png" alt="" width="55" height="55"/>
                        </figure>
                        <div class="game-result-team-name">Sherwana</div>
                        <div class="game-result-team-country">Kerkuk</div>
                      </div>
                      <div class="game-result-middle">
                        <div class="game-result-score-wrap">
                          <div class="game-result-score game-result-team-win">4<span class="game-result-team-label game-result-team-label-top">Win</span>
                          </div>
                          <div class="game-result-score-divider">
                            <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                              <g>
                                <circle cx="3.5" cy="3.5" r="3"></circle>
                                <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                              </g>
                              <g>
                                <circle cx="3.695" cy="17.5" r="3"></circle>
                                <path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
                              </g>
                            </svg>
                          </div>
                          <div class="game-result-score">1
                          </div>
                        </div>
                        <div class="game-results-status">Home</div>
                      </div>
                      <div class="game-result-team game-result-team-second">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/team-sevilla-57x46.png" alt="" width="57" height="46"/>
                        </figure>
                        <div class="game-result-team-name">Newroz SC</div>
                        <div class="game-result-team-country">Hawler</div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>New Yorkers Stadium</li>
                        <li>
                          <time datetime="2017-04-14">April 14, 2017</time>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
                <div class="aside-component">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Our Social Media
                      </h5>
                    </div>
                  </article>

                  <!-- Owl Carousel-->

                  <!-- Buttons Media-->
                  <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="#">
                      <h4 class="button-media-title">50k</h4>
                      <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="#">
                      <h4 class="button-media-title">120k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="#">
                      <h4 class="button-media-title">15k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="#">
                      <h4 class="button-media-title">85k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
                </div>

                </div>


              </aside>
            </div>
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

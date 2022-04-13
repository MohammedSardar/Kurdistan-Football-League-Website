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
<?php
$sqlteam="SELECT * FROM games ORDER BY game_code DESC LIMIT 3";
$queryteam=mysqli_query($conn,$sqlteam);
while($rowteam=mysqli_fetch_array($queryteam))
{
	$home=$rowteam["game_home"];
	$away=$rowteam["game_away"];

?>
                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/teams/logos/<?php
							$sqlh="SELECT * FROM teams WHERE team_name='$home'";
							$queryh=mysqli_query($conn,$sqlh);
							while($hrow=mysqli_fetch_array($queryh))
							{
							echo $hrow["team_logo"];
							} ?>" alt="" width="55" height="55"/>
                        </figure>
                        <div class="game-result-team-name"><?php echo $home; ?></div>
                      </div>
                      <div class="game-result-middle">
                        <div class="game-result-score-wrap">
						<?php
						$hgoals=$rowteam["game_home_goal"];
						$agoals=$rowteam["game_away_goals"];
						?>
                          <div class="game-result-score game-result-team-win"><?php echo $hgoals; ?>
						  <?php
						  if($hgoals>$agoals)
						  {
						  ?>
						  <span class="game-result-team-label game-result-team-label-top">Win</span>
						  <?php
						  }
						  ?>
                          </div>
                          <div class="game-result-score-divider">
                          </div>
                          <div class="game-result-score game-result-team-win"><?php echo $agoals; ?>
						  <?php
						  if($hgoals<$agoals)
						  {
						  ?>
						  <span class="game-result-team-label game-result-team-label-top">Win</span>
						  <?php
						  }
						  ?>
                          </div>
                        </div>
                        <div class="game-results-status">Home</div>
                      </div>
                      <div class="game-result-team game-result-team-second">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="images/teams/logos/<?php
							$sqla="SELECT * FROM teams WHERE team_name='$away'";
							$querya=mysqli_query($conn,$sqla);
							while($arow=mysqli_fetch_array($querya))
							{
							echo $arow["team_logo"];
							} ?>" alt="" width="55" height="55"/>
                        </figure>
                        <div class="game-result-team-name"><?php echo $away; ?></div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li><?php echo $rowteam["game_stadium"]; ?></li>
                        <li>
                          <time datetime="2017-04-14"><?php echo $rowteam["game_time"]; ?></time>
                        </li>
                      </ul>
                    </div>
                  </article>




<?php
}
?>






                  <!-- Owl Carousel-->

                  <!-- Buttons Media-->
                  <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="https://www.facebook.com/KurdistanFootballLeague/">
                      <h4 class="button-media-title">50k</h4>
                      <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="https://twitter.com/KurdistanLeague">
                      <h4 class="button-media-title">120k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="#">
                      <h4 class="button-media-title">15k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="#">
                      <h4 class="button-media-title">85k</h4>
                      <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
                </div>

                </div>

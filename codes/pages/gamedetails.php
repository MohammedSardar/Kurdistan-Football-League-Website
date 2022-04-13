<?php
$sqlteam="SELECT * FROM games,details WHERE game_code=match_details AND game_code='$_GET[details]'";
$queryteam=mysqli_query($conn,$sqlteam);
while($rowteam=mysqli_fetch_array($queryteam))
{
	$home=$rowteam["game_home"];
	$away=$rowteam["game_away"];

?>		<article class="game-result">
                    <div class="game-info game-info-classic">
                      <p class="game-info-subtitle"><?php echo $rowteam["game_stadium"]; ?> - 
                        <time datetime="2017-04-17"> <?php echo $rowteam["game_time"]; ?></time>
                      </p>
                      <h3 class="game-info-title"><?php echo $sitetitle; ?></h3>
                      <div class="game-info-main">
                        <div class="game-info-team game-info-team-first">
                          <figure><img src="images/teams/logos/<?php
							$sqlh="SELECT * FROM teams WHERE team_name='$home'";
							$queryh=mysqli_query($conn,$sqlh);
							while($hrow=mysqli_fetch_array($queryh))
							{
							echo $hrow["team_logo"];
							$hcoach=$hrow["team_coach"];
							} ?>" alt="" width="100" height="100"/>
                          </figure>
                          <div class="game-result-team-name"><?php echo $home; ?></div>
                          <div class="game-result-team-country"><?php echo $hcoach; ?></div>
                        </div>
                        <div class="game-info-middle">
                          <div class="game-result-score-wrap">
                            <div class="game-info-score game-result-team-win"><?php echo $rowteam["game_home_goal"]; ?></div>
                            <div class="game-info-score"><?php echo $rowteam["game_away_goals"]; ?></div>
                          </div>
                          <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                        </div>
                        <div class="game-info-team game-info-team-second">
                          <figure><img src="images/teams/logos/<?php
							$sqla="SELECT * FROM teams WHERE team_name='$away'";
							$querya=mysqli_query($conn,$sqla);
							while($arow=mysqli_fetch_array($querya))
							{
							echo $arow["team_logo"];
							$acoach=$arow["team_coach"];
							} ?>" alt="" width="113" height="106"/>
                          </figure>
                          <div class="game-result-team-name"><?php echo $away; ?></div>
                          <div class="game-result-team-country"><?php echo $acoach; ?></div>
                        </div>
                      </div>
                      <!-- Table Game Info-->
                      <div class="table-game-info-wrap"><span class="table-game-info-title">Game statistics<span></span></span>
                        <div class="table-game-info-main table-custom-responsive">
                          <table class="table-custom table-game-info">
                            <tbody>
                              <tr>
                                <td class="table-game-info-number"><?php echo $rowteam["home_shoot"]; ?>(<?php echo $rowteam["home_target"]; ?>)</td>
                                <td class="table-game-info-category">Shots (on target)</td>
                                <td class="table-game-info-number"><?php echo $rowteam["away_shoot"]; ?>(<?php echo $rowteam["away_target"]; ?>)</td>
                              </tr>
                              <tr>
                                <td class="table-game-info-number"><?php echo $rowteam["home_corner"]; ?></td>
                                <td class="table-game-info-category">Corner kicks</td>
                                <td class="table-game-info-number"><?php echo $rowteam["away_corner"]; ?></td>
                              </tr>
                              <tr>
                                <td class="table-game-info-number"><?php echo $rowteam["home_save"]; ?></td>
                                <td class="table-game-info-category">Saves</td>
                                <td class="table-game-info-number"><?php echo $rowteam["home_save"]; ?></td>
                              </tr>
                              <tr>
                                <td class="table-game-info-number"><?php echo $rowteam["home_yellow"]; ?></td>
                                <td class="table-game-info-category">Yellow cards</td>
                                <td class="table-game-info-number"><?php echo $rowteam["away_yellow"]; ?></td>
                              </tr>
                              <tr>
                                <td class="table-game-info-number"><?php echo $rowteam["home_red"]; ?></td>
                                <td class="table-game-info-category">Red cards</td>
                                <td class="table-game-info-number"><?php echo $rowteam["away_red"]; ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </article>
<?php
}
?>
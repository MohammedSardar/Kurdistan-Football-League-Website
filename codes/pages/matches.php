<div class="main-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Matches - <?php
if(isset($_GET["week"]))
{
echo "WEEK - ".$_GET["week"];
}
else
{
echo "Latest Results";
}
?>
                    </h5>
				<div class="heading-component-aside">
                    <ul class="list-inline list-inline-xs list-inline-middle">
                      <li>
                        <select class="select select-minimal" data-placeholder="Champions League" data-dropdown-class="select-minimal-dropdown"  onchange="location = this.value;" style="min-width: 180px;">
						<option value="match.php">All Results</option>
						<?php
						$sql="SELECT COUNT(*) FROM teams";
						$query=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($query))
						{
							$teamcount=$row["COUNT(*)"];
							$count=1;
						}

						for($count;$count<=$teamcount;$count++)
						{
						?>
                          <option value="match.php?week=<?php echo $count;?>">Week - <?php echo $count; ?></option>
						<?php
						}
						?>
                        </select>
                      </li>
                    </ul>
                  </div>
                  </div>
                </article>

                <div class="table-custom-responsive">
                    <table class="table-custom team2-gray">
                      <thead style="margin:50px;">
                        <tr>
                          <th>HOME</th>
                          <th colspan="2"></th>
                          <th>AWAY</th>
                          <th>Stadium</th>
                          <th>Date/Time</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
if(isset($_GET["week"]))
{
	$weekk=$_GET["week"];
	$sqlteam="SELECT * FROM games WHERE game_week='$weekk' ORDER BY game_code DESC";
}
else
{
$sqlteam="SELECT * FROM games ORDER BY game_code DESC LIMIT 4";
}
$queryteam=mysqli_query($conn,$sqlteam);
while($rowteam=mysqli_fetch_array($queryteam))
{
	$home=$rowteam["game_home"];
	$away=$rowteam["game_away"];

?>

                        <tr>
                          <td>
						  <center>
                            <div class="team-figure"><img src="images/teams/logos/<?php
							$sqlh="SELECT * FROM teams WHERE team_name='$home'";
							$queryh=mysqli_query($conn,$sqlh);
							while($hrow=mysqli_fetch_array($queryh))
							{
							echo $hrow["team_logo"];
							} ?>" alt="" width="37" height="37"/>
                            </div>
                            <div>
                              <div class="team-name"><span style="color:#122e48;"><a href="teams.php?details=<?php
							$sqlh="SELECT * FROM teams WHERE team_name='$home'";
							$queryh=mysqli_query($conn,$sqlh);
							while($hrow=mysqli_fetch_array($queryh))
							{
							echo $hrow["team_code"];
							} ?>"><b><?php echo $home; ?></b></a></span></div>
                            </div>
							</center>
                          </td>
                          <td colspan="2"><a href="match.php?details=<?php echo $rowteam["game_code"]; ?>"><?php echo $rowteam["game_home_goal"]; ?> -
                          <?php echo $rowteam["game_away_goals"]; ?>
						  <div>
						  <?php
						  if($rowteam["game_status"]=="completed")
						  {
						  echo "<i class='badge badge-info'>Full-Time</i>";
						  }
						  elseif($rowteam["game_status"]=="not-started")
						  {
						  echo "<i class='badge badge-primary'>UpComming</i>";
						  }
						  elseif($rowteam["game_status"]=="cancled")
						  {
						  echo "<i class='badge badge-warning'>Posposed</i>";
						  }
						  elseif($rowteam["game_status"]=="live")
						  {
						  echo "<i class='badge badge-sor'>Live</i>";
						  }
						  ?>
						  </div>
						  </div>
						  </td>
                          <td>
						  <center>
                            <div class="team-figure"><img src="images/teams/logos/<?php
							$sqla="SELECT * FROM teams WHERE team_name='$away'";
							$querya=mysqli_query($conn,$sqla);
							while($arow=mysqli_fetch_array($querya))
							{
							echo $arow["team_logo"];
							} ?>" alt="" width="37" height="37"/>
                            </div>
                            <div>
                              <div class="team-name"><span style="color:#122e48;"><a href="teams.php?details=<?php
							$sqla="SELECT * FROM teams WHERE team_name='$away'";
							$querya=mysqli_query($conn,$sqla);
							while($arow=mysqli_fetch_array($querya))
							{
							echo $arow["team_code"];
							} ?>"><b><?php echo $away; ?></b></a></span></div>
                            </div>
							</center>
                          </td>
                          <td style="text-align:left;">
						  <img src="images/stadium.png" width="18"> &nbsp;<?php echo $rowteam["game_stadium"]; ?></td>
                          <td><?php echo $rowteam["game_date"]; ?></br><?php echo $rowteam["game_time"]; ?></td>
                        </tr>
<?php
}
?>
                      </tbody>
                    </table>
                  </div>
              </div>

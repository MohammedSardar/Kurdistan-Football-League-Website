
<div class="main-component">


              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Teams Information
                  </h5>
                  <div class="heading-component-aside">
                    <ul class="list-inline list-inline-xs list-inline-middle">
                      <li>
                        <select class="select select-minimal" data-placeholder="Champions League" data-dropdown-class="select-minimal-dropdown" style="min-width: 180px;">
                          <option value="playoffs 2017" selected="">Erbil FC</option>
                          <option value="playoffs 2016">Sulaimania SC</option>
                          <option value="playoffs 2015">Zaxo</option>
                          <option value="playoffs 2014">Duhok</option>
                          <option value="playoffs 2013">Ararat</option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
              </article>

<?php
			  $team=$_GET["details"];
			  $sql="SELECT * FROM teams WHERE team_code='$team'";
			$query=mysqli_query($conn,$sql);
			while($rows=mysqli_fetch_array($query))
{
?>
				<div class="bg-white">
                  <div class="d-inline-block player-info ">
					<img src="images/teams/logos/<?php echo $rows["team_logo"]; ?>" height="200" width="200">
                  </div>
                  <div class="d-inline-block player-details">
				  <table class="">
					<tr><td><?php echo $rows["team_name"]; ?></td></tr>
					<tr><td><b>Full Name :</b><?php echo $rows["team_name"]; ?></td></tr>
					<tr><td><b>Founded : </b><?php echo $rows["team_founded"]; ?></td></tr>
					<tr><td><b>Stadium : </b><?php echo $rows["team_stadium"]; ?></td></tr>
					<tr><td><b>Coach : </b><?php echo $rows["team_coach"]; ?></td></tr>
					</table>
                  </div>
                  <div class="d-inline-block player-number">
					<h1><?php echo $rows["team_abb"]; ?></h1>
                  </div>
				  </div>
<?php
}
?>
			  <?php
			  $team=$_GET["details"];
			  $sql="SELECT * FROM teams WHERE team_code='$team'";
			  $query=mysqli_query($conn,$sql);
			  while($rows=mysqli_fetch_array($query))
			  {
			  ?>
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">About
                    </h5>
                  </div>
                </article>

                <article>
				<img src="images/teams/<?php echo $rows["team_photo"]; ?>">
                </article>
                <article>
				<p><?php echo $rows["team_info"]; ?></p>
                </article>
              </div>
				<?php
			  }
			  ?>


				<div class="main-component">
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Line-UP
                    </h5>
                  </div>
                </article>

                <div class="table-custom-responsive">
                    <table class="table-custom table-standings table-classic">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Player Name</th>
                          <th>Position</th>
                          <th>Games Played</th>
                          <th>Goals</th>
                          <th>Assists</th>
                          <th>Y. Card</th>
                          <th>R. Card</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  $ssqq="SELECT * FROM teams,players WHERE player_team=team_code and team_code='$team'";
					  $qquu=mysqli_query($conn,$ssqq);
					  while($rooww=mysqli_fetch_array($qquu))
					  {
					  ?>
					  <tr>
					  <td><?php echo $rooww["player_dressno"]; ?></td>
					  <td><a href="players.php?details=<?php echo $rooww["player_dressno"]; ?>"><?php echo $rooww["player_name"]; ?></a></td>
					  <td><?php echo $rooww["player_position"]; ?></td>
					  <td>14</td>
					  <td>0</td>
					  <td>0</td>
					  <td>1</td>
					  <td>0</td>
					  </tr>
					  <?php
					  }
					  ?>
                      </tbody>
                    </table>
                  </div>
              </div>


				<div class="main-component">
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">previous results
                    </h5>
                  </div>
                </article>

                <div class="table-custom-responsive">
                    <table class="table-custom table-standings table-classic">
                      <thead>
                        <tr>
                          <th colspan="4">Kurdistan League</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/team-atletico-37x37.png" alt="" width="37" height="37"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">Erbil FC</div>
                              <div class="team-country">Hawler</div>
                            </div>
                          </td>
                          <td>1</td>
                          <td>2</td>
                          <td class="team-inline">
						  <div class="team-figure"><img src="images/team-atletico-37x37.png" alt="" width="37" height="37"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name">Ararat FC</div>
                              <div class="team-country">Hawler</div>
                            </div>
							</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
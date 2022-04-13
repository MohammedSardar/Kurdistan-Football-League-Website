<div class="main-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">STANDING
                    </h5>
                  </div>
                </article>

                <div class="table-custom-responsive">
                    <table  class="sortable table-custom team2-gray" id="data_table"  onLoad="sorttable.innerSortFunction.apply(document.getElementById('points'), [])">
                      <thead style="margin:50px;">
                        <tr>
                          <th></th>
                          <th></th>
                          <th>P</th>
                          <th>W</th>
                          <th>D</th>
                          <th>L</th>
                          <th>GA</th>
                          <th>GF</th>
                          <th>Dif</th>
                          <th id="points">Pts</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  $cnt=1;
					  $tsql="SELECT * FROM teams";
					  $tquery=mysqli_query($conn,$tsql);
					  while($trow=mysqli_fetch_array($tquery))
					  {
					  ?>
                        <tr>
                          <td><span><?php echo $cnt;?></span></td>
                          <td class="team-inline">
                            <div class="team-figure"><img src="images/teams/logos/<?php echo $trow["team_logo"];?>" alt="" width="37" height="37"/>
                            </div>
                            <div class="team-title">
                              <div class="team-name"><span style="color:#122e48;"><b><a href="teams.php?details=<?php echo$trow["team_code"];?>"><?php echo $team=$trow["team_name"];?></b></span></div>
                            </div>
                          </td>
                          <td><span style="color:green;">
						  <?php
						  $playqu=mysqli_query($conn,"SELECT COUNT(*) FROM games WHERE game_home='$trow[team_name]' or game_away='$trow[team_name]'");
						  while($playrow=mysqli_fetch_array($playqu))
						  {
							  echo $playrow["COUNT(*)"];
						  }
						  ?>
						  </span></td>
                          <td>
						  <?php
						  $winqu=mysqli_query($conn,"SELECT COUNT(game_winner) FROM games WHERE game_home='$trow[team_name]' AND game_home_goal>game_away_goals OR game_away='$trow[team_name]' AND game_home_goal<game_away_goals");
						  while($winrow=mysqli_fetch_array($winqu))
						  {
							  echo $wint=$winrow["COUNT(game_winner)"];
						  }
						  ?>
						  </td>
                          <td>
						  <?php
						  $drawqu=mysqli_query($conn,"SELECT COUNT(game_winner) FROM games WHERE game_home='$trow[team_name]' AND game_home_goal=game_away_goals OR game_away='$trow[team_name]' AND game_home_goal=game_away_goals");
						  while($drawrow=mysqli_fetch_array($drawqu))
						  {
							  echo $drawt=$drawrow["COUNT(game_winner)"];
						  }
						  ?>
						  </td>
                          <td>
						  <?php
						  $losequ=mysqli_query($conn,"SELECT COUNT(game_winner) FROM games WHERE game_home='$trow[team_name]' AND game_home_goal<game_away_goals OR game_away='$trow[team_name]' AND game_home_goal>game_away_goals");
						  while($loserow=mysqli_fetch_array($losequ))
						  {
							  echo $loset=$loserow["COUNT(game_winner)"];
						  }
						  ?>
						  </td>
                          <td><span style="color:blue;">
						  <?php
						  $gaaqu=mysqli_query($conn,"SELECT SUM(game_away_goals) FROM games WHERE game_away='$trow[team_name]'");
						  while($gaarow=mysqli_fetch_array($gaaqu))
						  {
							$GA1=$gaarow["SUM(game_away_goals)"];
						  }
						  $gahqu=mysqli_query($conn,"SELECT SUM(game_home_goal) FROM games WHERE game_home='$trow[team_name]'");
						  while($gahrow=mysqli_fetch_array($gahqu))
						  {
							$GA2=$gahrow["SUM(game_home_goal)"];
						  }
						  echo $GAT=$GA1+$GA2;
						  ?>
						  </span></td>
                          <td><span style="color:red;">
						  <?php
						  $gfaqu=mysqli_query($conn,"SELECT SUM(game_home_goal) FROM games WHERE game_away='$trow[team_name]'");
						  while($gfarow=mysqli_fetch_array($gfaqu))
						  {
							$GF1=$gfarow["SUM(game_home_goal)"];
						  }
						  $gfhqu=mysqli_query($conn,"SELECT SUM(game_away_goals) FROM games WHERE game_home='$trow[team_name]'");
						  while($gfhrow=mysqli_fetch_array($gfhqu))
						  {
							$GF2=$gfhrow["SUM(game_away_goals)"];
						  }
						  echo $GFT=$GF1+$GF2;
						  ?>
						  </span></td>
                          <td><?php echo $GAT-$GFT; ?></td>
                          <td class="sortnr">
						  <b><?php echo ($wint*3)+($loset*0)+($drawt*1); ?></b></td>
                        </tr>
					<?php
					$cnt++;
					 }
					?>
                      </tbody>
                    </table>
                  </div>
              </div>
 <button onclick="sorttable.innerSortFunction.apply(document.getElementById('points'), [])">Sort Standing Table</button>

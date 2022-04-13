<div class="main-component">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Search Results
                    </h5>
                  </div>
                </article>

                <div class="table-custom-responsive">
                    <table class="table bg-white">
                      <thead>
                        <tr>
                          <th colspan="2">Player Name</th>
                          <th>Club</th>
                          <th>Position</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
						$sql="SELECT * FROM players WHERE player_name LIKE '%$_GET[playername]%' OR player_dressno='$_GET[playername]'";
						$query=mysqli_query($conn,$sql);
						if(mysqli_num_rows($query)>0)
						{
						while($row=mysqli_fetch_array($query))
						{
							$pteam=$row["player_team"];
						?>
                        <tr>
                          <td>
						  <a href="players.php?details=<?php echo $row["player_name"];?>"><?php echo $row["player_dressno"];?></a>
						  </td>
                          <td>
						  <a href="players.php?details=<?php echo $row["player_name"];?>"><?php echo $row["player_name"];?></a>
						  </td>
						  <?php
						  	$sql2="SELECT * FROM teams WHERE team_code='$pteam'";
							$query2=mysqli_query($conn,$sql2);
						    while($row2=mysqli_fetch_array($query2))
						    {
						  ?>
                          <td><?php echo $row2["team_name"];?></td>
						  <?php
						}
						?>
                          <td><?php echo $row["player_position"];?></td>
                        </tr>
						<?php
						}
						}
						else
						{
						echo "<td colspan=3>Not Results Found</td>";
						}
						?>

                      </tbody>
                    </table>
                  </div>
              </div>
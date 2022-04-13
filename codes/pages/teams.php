<div class="main-component">
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Teams
                  </h5>
                  <div class="heading-component-aside">
                    <ul class="list-inline list-inline-xs list-inline-middle">
                      <li>
                        <select class="select select-minimal" data-placeholder="Champions League" data-dropdown-class="select-minimal-dropdown" style="min-width: 180px;">
                          <option value="playoffs 2017" selected="">Kurdistan League</option>
                          <option value="playoffs 2016">Kurdistan Cup</option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
					 <?php
						$sql="SELECT * FROM teams";
						$query=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($query))
						{
					?>	
					 <a href="teams.php?details=<?php echo $row["team_code"];?>">
					 <div class="col-md-5 topp d-inline-block bg-default">
					 <center>
					  <img src="images/teams/logos/<?php if($row["team_logo"]!=""){echo $row["team_logo"];} else{echo "unknown.png";};?>" alt="" width="140" height="140"/>
						<p><b><?php echo $row["team_name"];?></b></p>
					</div>
					</center>
					</a>
					<?php
						}
						?> 
              </div>
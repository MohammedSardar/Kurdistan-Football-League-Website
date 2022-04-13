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
                <article>
					 <?php
						$sql="SELECT * FROM stadiums";
						$query=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($query))
						{
					?>	
					 <a href="teams.php?details=<?php echo $row["stadium_code"];?>"><div class="d-inline-block team-border bg-default">
					  <img src="images/teams/<?php echo $row["stadium_photo"];?>" alt="" width="120" height="120"/>
						<p><b><?php echo $row["stadium_name"];?></b></p>
					</div>
					</a>
					<?php
						}
						?> 
                </article>
              </div>
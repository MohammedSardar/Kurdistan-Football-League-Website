<?php
$sqlcode="SELECT * FROM games,teams WHERE game_status='not-started' AND game_home=team_name ORDER BY game_code DESC LIMIT 1";
$sqlquery=mysqli_query($conn,$sqlcode);
while($game=mysqli_fetch_array($sqlquery))
{
  $code=$game["game_code"];
$home=$game["game_home"];
$away=$game["game_away"];
$stadium=$game["game_stadium"];
$date=$game["game_date"];
$time=$game["game_time"];
$week=$game["game_week"];
}

$sqlhome="SELECT * FROM games,teams WHERE game_status='not-started' AND game_home=team_name ORDER BY game_code DESC LIMIT 1";
$sqlqueryhome=mysqli_query($conn,$sqlhome);
while($game=mysqli_fetch_array($sqlqueryhome))
{
$hpic=$game["team_logo"];
}

$sqlaway="SELECT * FROM games,teams WHERE game_status='not-started' AND game_away=team_name ORDER BY game_code DESC LIMIT 1";
$sqlqueryaway=mysqli_query($conn,$sqlaway);
while($game=mysqli_fetch_array($sqlqueryaway))
{
$apic=$game["team_logo"];
}

?>
<div class="main-component">
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Upcoming Match
                    </h5>
                  </div>
                </article>

                <article class="game-result">
                  <div class="game-info game-info-creative">
                    <p class="game-info-subtitle"><?php echo $stadium; ?> -
                      <time datetime="08:30"> <?php echo $date; ?> - <?php echo $time; ?></time>
                    </p>
                    <h3 class="game-info-title">Kurdistan league Upcoming Match</h3>
                    <div class="game-info-main">
                      <div class="game-info-team game-info-team-first">
                        <figure><img src="images/teams/logos/<?php echo $hpic; ?>" alt="" width="100" height="100"/>
                        </figure>
                        <div class="game-result-team-name"><?php echo $home; ?></div>
                      </div>
                      <div class="game-info-middle game-info-middle-vertical">
                        <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                        <div class="group-sm">

                        </div>
                      </div>
                      <div class="game-info-team game-info-team-second">
                        <figure><img src="images/teams/logos/<?php echo $apic; ?>" alt="" width="113" height="106"/>
                        </figure>
                        <div class="game-result-team-name"><?php echo $away; ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="game-info-countdown">
                    <?php
                    if(isset($_SESSION["vote"]))
                    {
echo "You've Already voted";
$sqlv="SELECT COUNT(*) FROM vote WHERE game_id='$code'";
$queryv=mysqli_query($conn,$sqlv);
while($v=mysqli_fetch_array($queryv))
{
  $count=$v["COUNT(*)"];
}
$sqlvh="SELECT COUNT(*) FROM vote WHERE game_id='$code' AND winner='home'";
$queryvh=mysqli_query($conn,$sqlvh);
while($vh=mysqli_fetch_array($queryvh))
{
  $homew=($vh["COUNT(*)"]/$count)*100;
}

$sqlva="SELECT COUNT(*) FROM vote WHERE game_id='$code' AND winner='away'";
$queryva=mysqli_query($conn,$sqlva);
while($va=mysqli_fetch_array($queryva))
{
  $awayw=($va["COUNT(*)"]/$count)*100;
}

$sqlvd="SELECT COUNT(*) FROM vote WHERE game_id='$code' AND winner='draw'";
$queryvd=mysqli_query($conn,$sqlvd);
while($vd=mysqli_fetch_array($queryvd))
{
  $drawv=($vd["COUNT(*)"]/$count)*100;
}

echo "</br>";
echo "Home : %".floor($homew)."</br>";
echo "AWAY : %".floor($awayw)."</br>";
echo "DRAW : %".floor($drawv)."</br>";

                    }
                    else {
                     ?>
                    <div>
                      <form action="index.php" method="POST">
                        <input type="hidden" value="<?php echo $code;?>" name="game">
Who will win this game ? <br><input type="radio" name="vote" value="home">&nbsp; Home <input type="radio" name="vote" value="away">&nbsp; Away <input type="radio" name="vote" value="draw">&nbsp; Draw
<br>
<button class="btn btn-success" type="submit"name="vv">Vote</button>
</form>
                    </div>
                  <?php } ?>
                  </div>
                </article>


</br>
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Twitter Feed
                    </h5>
                  </div>
                </article>

				<article class="game-result">

				<div class="twitter"></div>
 <a class="twitter-timeline"
data-height="650" data-theme="light" href="https://twitter.com/KurdistanLeague?
ref_src=twsrc%5Etfw">Tweets by KurdistanLeague</a>
<script async src="https://
platform.twitter.com/widgets.js" charset="utf-8"></script>
                </article>


              </div>

<div class="main-component">
<?php
$player=$_GET["details"];
$s="SELECT * FROM players WHERE player_name='$player'";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
	$player_name=$r['player_name'];
}
?>
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Players Info
                    </h5>
                  </div>
                </article>
<?php
$player=$_GET["details"];
$s="SELECT * FROM players,teams WHERE player_name='$player' and player_team=team_code";
$q=mysqli_query($conn,$s);
while($rows=mysqli_fetch_array($q))
{
?>
				<div class="bg-white">
                  <div class="d-inline-block player-info ">
					<img src="images/players/<?php echo $rows["player_photo"]; ?>" height="170" width="170">
                  </div>
                  <div class="d-inline-block player-details">
				  <table class="">
					<tr><td><h3 class="noup"><?php echo $rows["player_name"]; ?></h3></td></tr>
					<tr><td><b>Full Name :</b><?php echo $rows["player_name"]; ?></td></tr>
					<tr><td><b>Club :</b><?php echo $rows["team_name"]; ?></td></tr>
					<tr><td><b>Position : </b><?php echo $rows["player_position"]; ?></td></tr>
					<tr><td><b>Date of birth: </b><?php echo $rows["player_dob"]; ?></td></tr>
					<tr><td><b>Nationality: </b><?php echo $rows["player_nationality"]; ?></td></tr>
					</table>
                  </div>
                  <div class="d-inline-block player-number" style="float:right;">
					<h1><?php echo $rows["player_dressno"]; ?></h1>
                  </div>
				  </div>
<?php
}
?>

	
</div>
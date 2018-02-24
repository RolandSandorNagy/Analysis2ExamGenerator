<?php include 'js.php'; ?>


<div class="wrap">

<h1><span class="foLabel label label-default">Bizonyítások</span></h1>


<hr>
<h5><span class="label label-danger">25 darab tétel kimondása és bizonyítása (szóbeli)</span></h5>

	<?php 

		$numbers = array();
		for ($i = 1; $i < 26; $i++) {
    		$numbers[$i-1] = $i;
		}
		
		$j = 0;
		//while($rec = mysqli_fetch_assoc($r)) { 
		while($j < 25) { 
			?>

			<button class="btn btn-primary mutat kiscimgomb" onclick="changeCim2(this)" type="button" value="Mutat" id="myButton1<?php echo $j; ?>" data-toggle="collapse" data-target="#collapseExampleb<?php echo $j; ?>" aria-expanded="false" aria-controls="collapseExample" title="Megoldás mutatása"><img class="kiscim" src="tetelcimJPG/b<?php echo $j + 1 ?>.JPG"></button>
		    <div class="collapse" id="collapseExampleb<?php echo $j; ?>">
		      <div class="panel panel-danger">
			    <div class="panel-heading">
			  </div>


					<div class="panel panel-primary text-center">
					  <div class="panel-heading">
					  </div>
					  <div class="panel-body center-block">
			  	       <img src="tetelekbizJPG/b<?php echo $numbers[$j]; ?>.JPG" alt="Még nincs kész.">
					  </div>
					  <div class="panel-heading">
					  </div>
					</div>
		      

		        <div class="panel-heading">
				</div>
			  </div>
		    </div>






	<?php $j++; } ?>


</div>
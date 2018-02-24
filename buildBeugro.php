<?php include 'js.php'; ?>


<div class="wrap">

<h1><span class="foLabel label label-default">Beugrók</span></h1>


<hr>
<h5><span class="label label-warning">124 darab definíció/tétel kimondása a beugró részhez (írásbeli)</span></h5>

	<?php 

		$numbers = array();
		for ($i = 1; $i < 125; $i++) {
    		$numbers[$i-1] = $i;
		}
		sort($numbers, SORT_NUMERIC);

		$j = 0;
		//while($rec = mysqli_fetch_assoc($r)) { 
		while($j < 124) { 
			?>

			<button class="btn btn-info mutat kiscimgomb" onclick="changeCim(this)" type="button" value="Mutat" id="myButton1<?php echo $j; ?>" data-toggle="collapse" data-target="#collapseExample<?php echo $j; ?>" aria-expanded="false" aria-controls="collapseExample" title="Megoldás mutatása"><img class="kiscim" src="beugroKerdesekJPG/<?php echo $j + 1 ?>.JPG"></button>
		    <div class="collapse" id="collapseExample<?php echo $j; ?>">
		      <div class="panel panel-danger">
			    <div class="panel-heading">
			  </div>


			<div class="panel panel-info text-left">
			  <div class="panel-heading">
			  </div>
			  <div class="panel-body center-block">
	  	       <img src="beugrokJPG/<?php echo $numbers[$j]; ?>.JPG" alt="Még nincs kész.">
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
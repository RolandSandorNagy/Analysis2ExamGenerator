	<?php 

		$j = 0;
		//while($rec = mysqli_fetch_assoc($r)) { 
		while($j < 15) { 
			?>
			<div class="box panel panel-info text-center">
			  <div class="panel-heading text-left">
			  <strong><?php echo $j + 1; ?>. Beugró feladat</strong> <span class="pull-right">1 pont</span>
			  </div>
			  <div class="panel-body center-block">
	  	       <img src="beugroKerdesekJPG/<?php echo $indexes[$j]; ?>.JPG">
			  </div>
			  <div class="panel-footer text-center">
				<input class="btn btn-default mutat" onclick="change(this)" type="button" value="Mutat" id="myButton1<?php echo $indexes[$j]; ?>" data-toggle="collapse" data-target="#collapseExample<?php echo $indexes[$j]; ?>" aria-expanded="false" aria-controls="collapseExample" title="Megoldás mutatása">
			    <div class="collapse" id="collapseExample<?php echo $indexes[$j]; ?>">
	 	  	      <div class="panel panel-warning">
					  <div class="panel-heading">
					  </div>
						  <div class="panel-body center-block">
				 	  	      <img src="beugroValaszokJPG/<?php echo $indexes[$j]; ?>.JPG" alt="Még nincs kész.">
						  </div>					  
					  <div class="panel-heading">
					  </div>
	 	  	      </div>
			    </div>
			  </div>
			</div>

	<?php $j++; } ?>

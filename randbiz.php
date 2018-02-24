
	<div class="box panel panel-primary text-center">
	  <div class="panel-heading text-left">
	  <strong>
	  	Bizonyítással kért tétel
	  </strong>
	  </div>
	  <div class="panel-body">
	  	<img src="tetelcimJPG/<?php echo 'b'.$rand; ?>.JPG">
	  </div>
	  <div class="panel-footer text-center">

		<input class="btn btn-default mutat" onclick="change2(this)" type="button" value="Mutat" id="bizButton" data-toggle="collapse" data-target="#bizonyitas" aria-expanded="false" aria-controls="collapseExample" title="Megoldás mutatása">
	    <div class="collapse" id="bizonyitas">
	      <div class="panel panel-danger">
		    <div class="panel-heading">
		    </div>
	      	<?php if(file_exists("tetelekJPG/b".$rand.".JPG")) { ?>
				<img src="tetelekJPG/<?php echo 'b'.$rand; ?>.JPG" alt="Még nincs kész.">
  			<?php } ?>

		  		<img src="bizJPG/<?php echo 'b'.$rand.'_1'; ?>.JPG" alt="Még nincs kész.">		  	
		  	<?php if(file_exists("bizJPG/b".$rand."_2.JPG")) { ?>
			  	<img src="bizJPG/<?php echo 'b'.$rand.'_2'; ?>.JPG" alt="Még nincs kész.">	      
  			<?php } ?>
  		    <div class="panel-heading">
			</div>
		  </div>
	    </div>
	  </div>
	</div>

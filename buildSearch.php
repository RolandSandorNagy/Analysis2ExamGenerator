<?php include 'js.php'; ?>
<?php
$search = $_GET['search'];
$talalt = false;

$beugrotalalatok = array();
$teteltalalatok = array();

foreach ($beugroinfoarray as $key => $value) {
	if($search != "" && $value != "" && stristr($value, $search)  !== false) { 
		$talat = true;
		array_push($beugrotalalatok, $key);
	}
}
foreach ($tetelinfoarray as $key => $value) {
	if($search != "" && $value != "" && stristr($value, $search) !== false) { 
		$talat = true;
		array_push($teteltalalatok, $key);
	}
}


?>


<div class="wrap">
	<h1><span class="label label-default">Keresés</span></h1>
<?php if(count($beugrotalalatok) + count($teteltalalatok) > 0) { ?>
	<h4><span class="label label-default">Keresés eredménye a(z) <span class="label label-success word"><?php echo $_GET['search'] == "" ? "..." : $_GET['search']; ?></span> szóra:</span></h4>
<?php } else { ?>
	<h4><span class="label label-default">Keresés eredménye a(z) <span class="label label-danger word"><?php echo $_GET['search'] == "" ? "..." : $_GET['search']; ?></span> szóra:</span></h4>
<?php } ?>


<?php 

	//echo $_GET['search'].'<br>';


	if(count($beugrotalalatok) > 0) { ?>

		<input class="btn btn-info text-left mutat2" type="button" value="<?php echo count($beugrotalalatok);?> beugró kérdés válasszal" id="beugrolel" data-toggle="collapse" data-target="#collapsebeugrolel" aria-expanded="false" aria-controls="collapseExample">
	    <div class="collapse" id="collapsebeugrolel">
	  	      <div class="panel panel-warning">
			  <div class="panel-heading">
			  </div>
			  <div class="panel-body center-block">

	<?php
	foreach ($beugrotalalatok as $key => $value) {
		# code...

		?>

			<div class="panel panel-info text-center">
			  <div class="panel-heading text-left">
			  	<strong><?php echo $value + 1; ?>. Beugró feladat</strong><span class="pull-right">1 pont</span>
			  </div>
			  <div class="panel-body center-block">
	  	       <img src="beugroKerdesekJPG/<?php echo $value + 1; ?>.JPG" alt="Még nincs kész.">
			  </div>
			  <div class="panel-footer text-center">
				<input class="btn btn-default mutat" onclick="change(this)" type="button" value="Mutat" id="myButton1<?php echo $value + 1; ?>" data-toggle="collapse" data-target="#collapseExample<?php echo $value + 1; ?>" aria-expanded="false" aria-controls="collapseExample"></input>
			    <div class="collapse" id="collapseExample<?php echo $value + 1; ?>">
	 	  	      <div class="panel panel-warning">
					  <div class="panel-heading">
					  </div>
						  <div class="panel-body center-block">
				 	  	      <img src="beugroValaszokJPG/<?php echo $value + 1; ?>.JPG" alt="Még nincs kész.">
						  </div>					  
					  <div class="panel-heading">
					  </div>
	 	  	      </div>
			    </div>
			  </div>
			</div>


		<?php
	} ?>



			  </div>					  
			  <div class="panel-heading">
			  </div>
	  	      </div>
	    </div>


	<?php  }

	if(count($teteltalalatok) > 0) { ?>

		<input class="btn btn-primary mutat2" type="button" value="<?php echo count($teteltalalatok);?> tétel bizonyítással" data-toggle="collapse" data-target="#collapsetetel" aria-expanded="false" aria-controls="collapseExample">
	    <div class="collapse" id="collapsetetel">
	  	      <div class="panel panel-danger">
			  <div class="panel-heading">
			  </div>
			  <div class="panel-body center-block">

		<?php 
  		
  			foreach ($teteltalalatok as $key => $value) {

		?>

			<div class="panel panel-primary text-center">
			  <div class="panel-heading text-left">
			  	<strong><?php echo $value + 1; ?>. Tétel és bizonyítás</strong><span class="pull-right"></span>
			  </div>
			  <div class="panel-body center-block">
	  	       <img src="tetelcimJPG/b<?php echo $value + 1; ?>.JPG" alt="Még nincs kész.">
			  </div>
			  <div class="panel-footer text-center">
				<input class="btn btn-default mutat" onclick="change2(this)" type="button" value="Mutat" id="myButton1<?php echo $value + 1; ?>" data-toggle="collapse" data-target="#collapseExample<?php echo $value + 1; ?>" aria-expanded="false" aria-controls="collapseExample"></input>
			    <div class="collapse" id="collapseExample<?php echo $value + 1; ?>">
	 	  	      <div class="panel panel-danger">
					  <div class="panel-heading">
					  </div>
						  <div class="panel-body center-block">
				 	  	      <img src="bizJPG/b<?php echo $value + 1; ?>.JPG" alt="Még nincs kész.">
						  </div>					  
					  <div class="panel-heading">
					  </div>
	 	  	      </div>
			    </div>
			  </div>
			</div>


		<?php  } ?> 




			  </div>					  
			  <div class="panel-heading">
			  </div>
	  	      </div>
	    </div>



	<?php  } ?>

<?php if(!isset($talat) || !$talat) { ?>
	<p class="alert alert-danger">Nincs találat.</p>
	</div>
	<p class="alert alert-info talalatokszama">Összesen: 0 db találat.</p>	
<?php } else {?>
	</div>
	<p class="alert alert-info talalatokszama">Összesen: <?php echo count($beugrotalalatok) + count($teteltalalatok); ?> db találat.</p>	
<?php } ?>


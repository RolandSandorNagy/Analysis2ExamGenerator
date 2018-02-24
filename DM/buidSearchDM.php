<?php
$search = $_GET['search'];
$talalt = false;

$feladatTalalatok = array();
$feladatTalalatokCimek = array();



for($i = 0; $i < count($feladatok); $i++) {
	for($j = 0; $j < count($feladatok[$i]); $j++) {
		if($search != "" && $feladatok[$i][$j] != "" && stristr($feladatok[$i][$j], $search)  !== false) { 
			$talat = true;
			$i2 = $i + 1;
			$j2 = $j + 1;
			array_push($feladatTalalatok, 'DM/'.$i2.'/'.$j2.'.JPG');
			array_push($feladatTalalatokCimek, $feladatok[$i][$j]);
		}
	}
}


?>


<div class="wrap">
	<h1><span class="label label-default">Keresés</span></h1>
<?php if(count($feladatTalalatok) > 0) { ?>
	<h4><span class="label label-default">Keresés eredménye a(z) <span class="label label-success word"><?php echo $_GET['search'] == "" ? "..." : $_GET['search']; ?></span> szóra: <span class="label label-success word"><?php echo count($feladatTalalatok);?></span> találat</span></h4>
<?php } else { ?>
	<h4><span class="label label-default">Keresés eredménye a(z) <span class="label label-danger word"><?php echo $_GET['search'] == "" ? "..." : $_GET['search']; ?></span> szóra: <span class="label label-danger word">0</span> találat</span></h4>
<?php } ?>


<?php 

	//echo $_GET['search'].'<br>';


	if(count($feladatTalalatok) > 0) { ?>


	<?php
	for($i = 0; $i < count($feladatTalalatok); $i++) {
		# code...

		?>
		<button class="btn btn-info text-left kislel" type="button" value="<?php echo count($feladatTalalatok);?> feladat találat" data-toggle="collapse" data-target="#collapsebeugrolel<?php echo 'abc'.$i; ?>" aria-expanded="false" aria-controls="collapseExample"><strong><?php echo $feladatTalalatokCimek[$i]; ?></strong></button>
	    <div class="collapse" id="collapsebeugrolel<?php echo 'abc'.$i; ?>">

			<div class="panel panel-info text-center">
			  <div class="panel-heading text-left">
			  </div>
			  <div class="panel-body center-block">
	  	       <img src="<?php echo $feladatTalalatok[$i]; ?>" alt="Még nincs kész">
			  </div>
			  <div class="panel-heading text-left">
			  </div>
			</div>
		</div>


		<?php
	} ?>



	<?php  } ?>



<?php if(!isset($talat) || !$talat) { ?>
	<p class="alert alert-danger">Nincs találat.</p>
	</div>
	<p class="alert alert-info talalatokszama">Összesen: 0 db találat.</p>	
<?php } else {?>
	</div>
	<p class="alert alert-info talalatokszama">Összesen: <?php echo count($feladatTalalatok); ?> db találat.</p>	
<?php } ?>

}

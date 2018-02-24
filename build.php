<?php include 'js.php'; ?>
<?php 
	$rand = rand(1,25);
	$k = 0;
	$indexes = array();
	while($k < 15) {
		$l = true;
		while($l) {
			$rand2 = rand(1,124);
			if(!in_array($rand2, $indexes)) {
				array_push($indexes, $rand2);
				//echo $indexes[$k].'<br>';
				$l=false;
			} else {
				//echo $rand.' benne volt.<br>';
			}
		}

		$k++;
	}
	sort($indexes);
?>


<div class="wrap">

<h1>
	<span class="foLabel label label-default">
		VizsgaGenerátor
	</span>
	<a href="index.php" class="pull-right btn btn-success" title="Új Vizsga Generálása">
		Új vizsga
	</a>
</h1>

<p class="alert alert-warning"><strong>A vizsga <em>írásbeli</em> és <em>szóbeli</em> részből áll.</strong></p>

	<h2>Írásbeli rész</h2>
	<p>
	"A vizsga egy 60 perces ún. beugróval kezdődik. Ebben 15 kérdést teszek fel az előadás anyagából, a kérdésekre adott válaszokat 0 (helytelen  válasz) vagy 1 (helyes válasz) ponttal értékelem. Helyes válasznak csak azt fogadom el, ami megfelelő indoklással, példával vagy hivatkozással van alátámasztva. Egy puszta „igen” vagy „nem” válasz nem ér pontot. 
	Legalább 8 pontot elérése esetén a hallgató folytathatja a vizsgát a szóbeli résszel. Aki csak legfeljebb 7 pontot ér el, vizsgája elégtelen (1). 
	Az írásbeli rész értékelése: 0-7: 1,  8-9: 2,  10-11: 3,  12-13: 4,  14-15: 5 ..."
	</p>
	<h6 class="text-right" title="Külső hivatkozás az estis analízis2 tárgyi honlapra"><p>(<a href="http://numanal.inf.elte.hu/~csorgo/ev15161/estianal2/">Dr. Csörgő István tanár úr tárgyi honlapján</a> olvasható információ)</p></h6>

<hr>

<div class="row">
	<div class="col col-sm-6">
		<h5 class="kisLabelDiv">
			<span class="kisLabel label label-warning">15 darab definíció/tétel kimondása (írásbeli)</span>
		</h5>
	</div>
	<div class="col col-sm-6 text-right">
		<h5 class="kisLabelDiv">
			<span class="kisLabel label label-danger">1 darab tétel kimondása és bizonyítása (szóbeli)</span>
		</h5>
	</div>
</div>
<div class="row">
	<div class="col col-sm-6">
		<h5 class="kisLabelDiv">
			<span class="kisLabel label label-info">Kapott beugrók: <?php foreach ($indexes as $key => $value) {echo '<div title="'.$beugroinfoarray[$value - 1].'" class="kisdoboz">'.$value.'.</div>';} ?></span>
		</h5>		
	</div>
	<div class="col col-sm-6 text-right">
		<h5 class="kisLabelDiv">
			<span class="kisLabel label label-info">Kapott bizonyítás: <?php echo '<div title="'.$tetelinfoarray[$rand - 1].'" class="kisdoboz2">'.$rand.'</div>'; ?></span>
		</h5>
	</div>
</div>

<!--
<div class="kisLabelDiv">
	<h5 class="kisLabelDiv">
		<span class="kisLabel label label-warning">15 darab definíció/tétel kimondása (írásbeli)</span>
		<span class="kisLabel label label-danger pull-right">1 darab tétel kimondása és bizonyítása (szóbeli)</span>
	</h5>
</div>

<div class="kisLabelDiv">
	<h5 class="kisLabelDiv">
		<span class="kisLabel label label-info">Kapott beugrók: <?php //foreach ($indexes as $key => $value) {echo '<div title="'.$beugroinfoarray[$value - 1].'" class="kisdoboz">'.$value.'.</div>';} ?></span>
		<span class="kisLabel label label-info pull-right">Kapott bizonyítás: <?php //echo '<div title="'.$tetelinfoarray[$rand - 1].'" class="kisdoboz2">'.$rand.'</div>'; ?></span>
	</h5>
</div>
-->
	<?php include 'randbeugro.php'; ?>


	<div class="bev">
		<h2>Szóbeli rész</h2>
			
		<p>
		"A szóbeli részben a hallgató egy tételt kap, melyet szóban ki kell fejtenie: kimondás, bizonyítás, esetleg példákkal való illusztráció. Mindezt olyan részletességgel, ahogyan az előadáson szerepelt. A szóbeli feleletre 30’ felkészülési idő áll rendelkezésre. Ez alatt érdemes egy részletes vázlatot készíteni, ami segít a felelésnél. Hangsúlyozom, hogy nem a vázlatot osztályozom, hanem a szóbeli feleletet, melyből ki kell derülnie, hogy a hallgató érti is, amit elmond. ..."
		<br>
		"... A vizsgajegy az írásbeli és a szóbeli részre kapott értékelés alapján áll össze. Mindkét részt legalább elégséges szinten kell teljesíteni. "
		</p>
		<h6 class="text-right" title="Külső hivatkozás az estis analízis2 tárgyi honlapra"><p>(<a href="http://numanal.inf.elte.hu/~csorgo/ev15161/estianal2/">Dr. Csörgő István tanár úr tárgyi honlapján</a> olvasható információ)</p></h6>
	</div>

	<?php include 'randbiz.php'; ?>


	<h1>
		<a href="index.php" class="pull-left btn btn-success" title="Új Vizsga Generálása">
			Új vizsga
		</a>
	</h1>

</div>



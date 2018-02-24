<?php  

$tetelCimek = array();
$elsoTetel = array();
$feladatok = array();
$elsoFeladatok = array();
$masodikFeladatok = array();

array_push($elsoTetel, ' Gyűrűk, két műveletes algebrai struktúrák viszonya (8.4-es ábra a könyvből) a megfelelő definíciókkal, homomorfizmus és gyűrű homomorf képéről tétel, karakterisztika (tétel). Részgyűrű, ideál, mellékosztályok, műveletek kompatibilitásáról szóló tétel és következménye. biz1 ');
array_push($tetelCimek, $elsoTetel);

array_push($elsoFeladatok, ' Gyűrű definíciója ');
array_push($elsoFeladatok, ' Kétműveletes algebrai struktúrák viszonya (ábra) ');
array_push($elsoFeladatok, ' Nullosztómentes gyűrű definíciója ');
array_push($elsoFeladatok, ' Kommutatív gyűrű definíciója ');
array_push($elsoFeladatok, ' Integritási tartomány definíciója ');
array_push($elsoFeladatok, ' Egységelemes integritási tartomány definíciója ');
array_push($elsoFeladatok, ' Gauss gyűrű definíciója ');
array_push($elsoFeladatok, ' Euklideszi gyűrű definíciója ');
array_push($elsoFeladatok, ' FerdeTest definíciója ');
array_push($elsoFeladatok, ' Test definíciója ');
array_push($elsoFeladatok, ' Homomorfizmus definíciója gyűrűkben ');
array_push($elsoFeladatok, ' Gyűrű homomorf képe (tétel) ');
array_push($elsoFeladatok, ' Gyűrű homomorf képe (bizonyítás) ');
array_push($elsoFeladatok, ' Karakterisztika definíciója ');
array_push($elsoFeladatok, ' Karakterisztika (tétel) ');
array_push($elsoFeladatok, ' Részgyűrű definíciója ');
array_push($elsoFeladatok, ' Ideál definíciója ');
array_push($elsoFeladatok, ' Mellékosztály definíciója ');
array_push($elsoFeladatok, ' Műveletek kompatibilitásáról szóló tétel ');
array_push($elsoFeladatok, ' Műveletek kompatibilitásáról szóló tétel (következmény) ');
array_push($elsoFeladatok, ' Műveletek kompatibilitásáról szóló tétel (következmény bizonyítása) ');
array_push($feladatok, $elsoFeladatok);

array_push($masodikFeladatok, ' Homomorfizmus magjának definíciója ');
array_push($masodikFeladatok, ' Homomorfizmus tétel ');
array_push($masodikFeladatok, ' Homomorfizmus tétel Bizonyítása ');
array_push($masodikFeladatok, ' Direkt szorzat definíciója ');
array_push($masodikFeladatok, ' Főideálról szóló tétel ');
array_push($masodikFeladatok, ' Főideálról szóló tétel bizonyítása ');
array_push($masodikFeladatok, ' Főideálról szóló tétel következménye ');
array_push($feladatok, $masodikFeladatok);





$search = 'search';
$talalt = false;

$feladatTalalatok = array();



for($i = 0; $i < count($feladatok); $i++) {
	for($j = 0; $j < count($feladatok[$i]); $j++) {
		if($search != "" && $feladatok[$i][$j] != "" && stristr($feladatok[$i][$j], $search)  !== false) { 
			$talat = true;
			$i2 = $i + 1;
			$j2 = $j + 1;
			array_push($feladatTalalatok, 'DM/'.$i2.'/'.$j2.'JPG');
		}
	}
}


?>
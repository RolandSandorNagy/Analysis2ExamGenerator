<?php include 'setupDM.php'; ?>
<?php  

if(isset($_GET['search']) && (strcasecmp($_GET['search'], 'go anal') == 0 || strcasecmp($_GET['search'], 'goanal') == 0)) {
  header("Location: http://people.inf.elte.hu/newageson/anal2/vizsga/"); 
} else if(isset($_GET['search']) && $_GET['search'] == '?konyv?') {
  
  header("Location: http://people.inf.elte.hu/newageson/anal2/vizsga/DM/konyv.pdf"); 
}
?>


<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <!--<meta charset="utf-8">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

    <link rel="stylesheet" type="text/css" href="dmstyle.css">
    <!-- Own StyleSheet -->
    <link href="style.css" rel="stylesheet">

    <title>Dimat 3 ELTE</title>


    <script type="text/javascript">

      function changeStyle1(obj) {
        if (obj.getAttribute('data-disabled') == '1') {
        return;
        }

        obj.setAttribute('data-disabled', '1');
      
        if(obj.className == 'btn btn-info mutat2') {
          obj.className="btn btn-primary mutat2";
        } else {
          obj.className="btn btn-info mutat2";
        }   

        setTimeout(function(){
            obj.setAttribute('data-disabled', '0');
        }, 300); // 1500 : ameddig a collapse fut
      }


      function changeStyle2(obj) {
        if (obj.getAttribute('data-disabled') == '1') {
        return;
        }

        obj.setAttribute('data-disabled', '1');
      
        if(obj.className == 'btn btn-warning mutat3') {
          obj.className="btn btn-danger mutat3";
        } else {
          obj.className="btn btn-warning mutat3";
        }   

        setTimeout(function(){
            obj.setAttribute('data-disabled', '0');
        }, 300); // 1500 : ameddig a collapse fut
      }

    </script>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Own StyleSheet -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container<?php echo isset($_GET['search']) ? "" : ' text-center' ?>">

      <?php include 'navDM.php'; ?>

      <?php if(isset($_GET['search'])) {
      	include 'buidSearchDM.php';
      } else { ?>


    	<?php 
    		$j=1;
    		while(is_dir("DM/".$j)) {
		 ?>

    	<input onclick="changeStyle1(this)" class="btn btn-info mutat2" type="button" value="<?php echo 'Tétel '.$j; ?>" data-toggle="collapse" data-target="#collapsedmtetel<?php echo $j; ?>" aria-expanded="false" aria-controls="collapseExample">
	    <div class="collapse" id="collapsedmtetel<?php echo $j; ?>">
  	      <div class="panel panel-info">
		  	<div class="panel-heading">
		  	</div>
		  	<div class="panel-body center-block">

			<img class="cim" src="DM/<?php echo $j; ?>/cim.JPG">

			<?php 
				$i = 1;
				//while(file_exists("DM/".$j."/".$i.".JPG")) {
        while(isset($feladatok[$j-1]) && $i-1 < count($feladatok[$j-1])) { ?>

		    	<button onclick="changeStyle2(this)" class="btn btn-warning mutat3" type="button" data-toggle="collapse" data-target="#collapsedmtetel<?php echo $j.'_'.$i; ?>" aria-expanded="false" aria-controls="collapseExample"><?php echo $feladatok[$j-1][$i-1]; ?></button>
			    <div class="collapse" id="collapsedmtetel<?php echo $j.'_'.$i; ?>">
		  	      <div class="panel panel-warning">
				  	<div class="panel-heading">
				  	</div>
				  	<div class="panel-body center-block">


						<img src="DM/<?php echo $j.'/'.$i.'.JPG'; ?>" alt="Még nincs kész">


				  	</div>					  
				  	<div class="panel-heading">
				  	</div>
		  	      </div>
			    </div>

			<?php
				$i++;
			} ?>
		  	</div>					  
		  	<div class="panel-heading">
		  	</div>
  	      </div>
	    </div>

	    <?php 
			$j++;
		} 

	}?>
		  

    </div>
  
	  <?php include 'footer.php'; ?>

  </body>
</html>













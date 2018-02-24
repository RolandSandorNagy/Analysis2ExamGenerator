<?php //include 'setup.php'; ?>
<?php include 'setup2.php'; ?>
<?php  

if(isset($_GET['search']) && (strcasecmp($_GET['search'], 'go dm') == 0 || strcasecmp($_GET['search'], 'godm') == 0)) {
  header("Location: http://people.inf.elte.hu/newageson/anal2/vizsga/DM/dm.php"); 
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

    <title>Analízis 2 ELTE</title>



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

    <div class="container">
      
      <?php include 'nav.php'; ?>

      <?php 
        
        if((!isset($_GET['page']) && !isset($_GET['search'])) || (isset($_GET['page']) && $_GET['page']=='vizsga')) {
          include 'build.php'; 
        } else if(isset($_GET['page']) && $_GET['page']=='beugro') {
          include 'buildBeugro.php';
        } else if(isset($_GET['page']) && $_GET['page']=='biz') {
          include 'buildBiz.php';
        } else if(isset($_GET['search'])) {
          if(strcasecmp($_GET['search'], 'go dm') == 0) {
            header("Location: http://people.inf.elte.hu/newageson/anal2/vizsga/dm.php"); 
          }
          include 'buildSearch.php';
        }

      ?>

    </div>

    <?php include 'footer.php'; ?>

  </body>
</html>












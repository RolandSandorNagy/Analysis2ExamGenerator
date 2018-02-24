<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" title="ELTE IK PTI Analízis 2"><strong>ELTE : Analízis 2 (Esti 2015/16)</strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li<?php if((!isset($_GET['page']) && !isset($_GET['search'])) || (isset($_GET['page']) && $_GET['page'] == 'vizsga')) echo ' class="active"' ?>><a href="index.php?page=vizsga" title="Vizsga Generálása">VizsgaGenerátor<span class="sr-only">(current)</span></a></li>
        <li<?php if(isset($_GET['page']) && $_GET['page'] == 'beugro') echo ' class="active"' ?>><a href="index.php?page=beugro" title="Összes beugró kérdés megtekintése (124 db)">Beugrók</a></li>
        <li<?php if(isset($_GET['page']) && $_GET['page'] == 'biz') echo ' class="active"' ?>><a href="index.php?page=biz" title="Összes bizonyítás megtekintése (jelenleg 5db)">Bizonyítások</a></li>
        <!--<li<?php //if(isset($_GET['page']) && $_GET['page'] == 'vid') echo ' class="active"' ?>><a href="index.php?page=vid">Videók</a></li>-->

        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
		-->

      </ul>

	        <!--
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Felhasználó <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
      </ul>
        -->

      <form class="navbar-form navbar-right" role="search" method="get" atcion="index.php" title="Keresés az archívumban">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Keresés" name="search" title="Írjon be egy szót vagy kifejezést">
        </div>
        <button type="submit" class="btn btn-default" title="Keresés">Keres</button>
      </form>

    </div><!-- /.navbar-collapse -->
  
  </div><!-- /.container-fluid -->
</nav>
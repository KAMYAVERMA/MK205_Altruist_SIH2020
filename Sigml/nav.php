<?php $pageName = ""; // dummary variable to avoid errors ?>
<!-- Fixed navbar -->
<style type="text/css">
  li a{color:white!important}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background:#152535;color:white;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="index.php" style="padding:0;padding-left:10px;"><h1 style="padding:0; margin:0;"><img src="images/LOGO_ppt.png" style="height:38px;margin-left: -60px;"></h1></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right: -80px">
<li <?php if($pageName=='index.php') echo 'class="active"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Team <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="min-width:180px; padding-right:10px;">
            <li><a href="#">Principle Investigator</a></li>
            <li><a href="#">Co-principle Investigator</a></li>
            <li><a href="#">Research Assistant</a></li>
          </ul>
        </li>-->
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Project<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: #313131;">
            <li><a href="history.php">History</a></li>
            <li><a href="objective.php">Objective</a></li>
            <li><a href="working.php">Working</a></li>
            
          </ul>
        </li> -->
        <!-- <li <?php if($pageName=='##') echo 'class="active"'; ?>><a href="#">Workshop</a></li> -->
        <!-- <li <?php if($pageName=='##') echo 'class="active"'; ?>><a href="#">Contact</span></a></li> -->
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

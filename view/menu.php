<header>
  <nav role="navigation" class="navbar navbar-default">
  <a href="#" class="navbar-brand">
       <img src='public/img/hex.png'></a>
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
		
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="actives"><a href="home.php">Home</a></li>
            <li class="actives"><a href="#">Page 1</a></li>
            <li class="actives"><a href="#">Page 2</a></li>
            <li class="actives"><a href="login.php">Log in</a></li>
            <li class="actives"><a href="?logout=true">Log out</a></li>
        </ul>
</div>
</nav>
<?php 
$user= new USER($DB_con);
 if (@$_GET['logout'] == "true") { 
 $user-> logout();
  header("Location: index.php");
 }
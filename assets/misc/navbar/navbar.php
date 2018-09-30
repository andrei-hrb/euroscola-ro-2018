<!-- Navbar -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<!-- logo -->
	<a class="navbar-brand" href="#"><img src="../assets/img/ui stuff/logo.png" class="logo"></a>
	
	<!-- text links -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link nav-elm" href="#"><?=$home?><span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link nav-elm" href="#"><?=$about?><span class="sr-only"></span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link nav-elm" href="#"><?=$cantemir?><span class="sr-only"></span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link nav-elm" href="#"><?=$team?><span class="sr-only"></span></a>
      </li>
    </ul>

	<!-- language selector -->
	<div class="ml-auto">
		<a class="flagLink" href="<?=$frLink?>">
			<img class="mx-1 flag <?=$frFlag?>" id="fr" src="../assets/img/flags/fr.png">
		</a>

		<a class="flagLink" href="<?=$enLink?>">
			<img class="mx-1 flag <?=$enFlag?>" id="en" src="../assets/img/flags/uk.png">
		</a>

		<a class="flagLink" href="<?=$roLink?>">
			<img class="mx-1 flag <?=$roFlag?>" id="ro" src="../assets/img/flags/ro.png">
		</a>
	</div>
	</div>
</nav>
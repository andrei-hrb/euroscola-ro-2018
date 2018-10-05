<!-- Navbar -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
 crossorigin="" />
<nav id="nav"class="navbar navbar-expand-md navbar-dark ">
	<!-- logo -->
	<a class="navbar-brand" href="../home.php/?lang=<?=$lang?>"><img class="logo" src="../assets/img/ui stuff/logo.png"></a>
	
	<!-- text links -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link nav-elm <?=$srHome?>" href="../home.php/?lang=<?=$lang?>"><?=$home?></a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link nav-elm <?=$srCantemir?>" href="../cantemir.php/?lang=<?=$lang?>"><?=$cantemir?></a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link nav-elm <?=$srTeam?>" href="../team.php/?lang=<?=$lang?>"><?=$team?></a>
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
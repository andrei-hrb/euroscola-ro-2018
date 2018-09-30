<html>
<head>
	<!-- Getting the language of the user and 
		 redirecting to the corect version of the website -->
	<?php $lang=substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);?>
	<script>window.location.replace("home.php/?lang=<?=$lang?>");</script>
</head>
</html>

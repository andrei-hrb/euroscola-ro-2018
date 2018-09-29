<html>

<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126651509-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];function gtag() {dataLayer.push(arguments);}gtag('js', new Date()); gtag('config', 'UA-126651509-1');
	</script>

	<?php $lang=substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);?>
	<script>
		window.location.replace("home.php/?lang=<?= $lang ?>");
	</script>
	
</head>

</html>
<!DOCTYPE html>
<html>
<head>
<script>
	let lang = '<?= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); ?>';
	if (lang !== 'ro' && lang !== 'en' && lang !== 'fr') { lang = 'en'; }
	window.location.replace(`${lang}/home.php`);
</script>
</head>
</html>

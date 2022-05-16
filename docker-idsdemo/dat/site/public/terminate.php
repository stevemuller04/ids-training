<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap.min.css" rel="stylesheet">
		<title>Terminate</title>
	</head>
	<body>
		<div class="container my-5">
			<h1>Nothing here.</h1>
			<p class="small">Really.</p>
<?php echo str_repeat("\n", 1000); ?>
			<p style="margin-top:5000px" class="text-end"><button class="btn btn-danger" onclick="t(this)">&#128128;</button></p>
		</div>
		<script type="text/javascript">
			function t(b) { b.parentNode.removeChild(b); window.setInterval(tt, 100); }
			function tt() { let b = document.querySelector('body'); b.style.backgroundColor=b.style.backgroundColor!='red'?'red':'salmon'; }
		</script>
	</body>
</html>


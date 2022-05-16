<?php

$quotes = [
	"Cyborgs don’t feel pain. I do. Don’t do that again.",
	"Come with me if you want to live.",
	"I need your clothes, your boots, and your motorcycle.",
	"In three years, Cyberdyne will become the largest supplier of military computer systems.",
];
$quote = $quotes[rand(0, count($quotes) - 1)];

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap.min.css" rel="stylesheet">
		<title>SKY.NET</title>
	</head>
	<body>
		<div class="p-5 bg-light">
			<div class="container">
				<h1 class="display-4">Welcome to SKY.NET!</h1>
				<p class="lead"><?php echo htmlspecialchars($quote); ?></p>
				<hr />
				<p>It is <?php echo date('H:i'); ?> in SKY.NET. Time to terminate.</p>
			</div>
		</div>
		<div class="container mt-5">
			<div class="d-flex flex-column align-items-center">
				<div class="card" style="width:500px">
					<div class="card-header text-end">LOGIN TO SKY.NET</div>
					<form class="card-body" action="login.php" method="post">
						<div class="mb-3">
							<label class="form-label">User name:</label>
							<input type="text" class="form-control" name="login" placeholder="Your user name" />
						</div>
						<div class="mb-3">
							<label class="form-label">Password:</label>
							<input type="password" class="form-control" name="password" placeholder="Your password" />
						</div>
						<button class="btn btn-primary" type="submit">Log in</button>
					</form>
				</div>
				<div class="mt-5" style="width:500px">
					<p>Dear visitor!<br />Thanks for being here. You may follow this <a href="terminate.php">harmless link</a> to a fantastic new world.</p>
					<p>Also check out our <a href="api/">API</a>.</p>
					<p>Or browse the wiki:</p>
					<ul>
						<?php $n = rand(3, 8); for ($i = 0; $i < $n; $i++): ?>
							<li><a href="wiki.php?page=<?php echo substr(md5(rand()), 0, 5); ?>">Page #<?php echo rand(34274,128376); ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>


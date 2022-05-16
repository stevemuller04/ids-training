<?php

$id = filter_input(INPUT_GET, 'page');
if (!is_string($id)) $id = '';

$selected_line = crc32($id) % 2901; // there are 2901 lines in the file
$lines = [];

$file = fopen('../julesverne.html', 'r');
for ($i = 0; false !== ($line = fgets($file, 4096)); $i++)
{
	if ($selected_line - 5 <= $i && $i <= $selected_line + 5)
		$lines[] = $line;
}
fclose($file);

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap.min.css" rel="stylesheet">
		<title>Wiki</title>
	</head>
	<body>
		<div class="p-5 bg-light">
			<div class="container">
				<h1 class="display-4">SKY Wiki</h1>
				<p class="lead">Spread the knowledge</p>
			</div>
		</div>
		<div class="container mt-5">
			<div class="mb-3"><a href="/">&laquo; Go back</a></div>
			<p class="lead">From the book, chapter #!NREF, offset 0x<?php echo sprintf('%016x', $selected_line);?>:</p>
			<hr />
			<?php echo implode("\n", $lines); ?>
		</div>
	</body>
</html>


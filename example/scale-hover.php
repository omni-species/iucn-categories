<?php
require '../src/iucnCategories.php';
use OmniSpecies\iucnCategories\iucnCategories;
$iucn = new iucnCategories;
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/style.css" />
		<title>Hover Categories Scale</title>
	</head>

	<body class="iucn">
		<?php foreach ($iucn->getCategories() as $key => $value): ?>
		<?php if ($key != 'ne') echo '-->'; ?><div class="iucn-category iucn-<?= $value->class; ?>">
		<div class="iucn-name">
			<div class="before<?= (!$value->backward) ? ' none' : ''; ?>"></div>
			<?= $value->name; ?>
			<div class="after<?= (!$value->forward) ? ' none' : ''; ?>"></div>
		</div>
		<div class="iucn-acronym"><?= $key; ?></div>
		</div><?php if ($key != 'ex') echo '<!--'; ?>
		<?php endforeach; ?>
	</body>
</html>

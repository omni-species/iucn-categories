<?php
require '../src/iucnCategories.php';
use OmniSpecies\iucnCategories\iucnCategories;
$status = new iucnCategories;
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/style.css" />
		<title>Hover Categories Scale</title>
	</head>

	<body class="iucn">
		<?php foreach ($status->getIucnCategories() as $key => $value): ?>
		<?php if ($key != 'ne') echo '-->'; ?><div class="iucn-category iucn-<?= $value->class; ?>">
		<div class="iucn-name">
			<div class="before<?php if (!$value->backward) echo ' none'; ?>"></div>
			<?= $value->name; ?>
			<div class="after<?php if (!$value->forward) echo ' none'; ?>"></div>
		</div>
		<div class="iucn-acronym"><?= $key; ?></div>
		</div><?php if ($key != 'ex') echo '<!--'; ?>
		<?php endforeach; ?>
	</body>
</html>

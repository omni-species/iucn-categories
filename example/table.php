<?php
require '../src/iucnCategories.php';
use OmniSpecies\iucnCategories\iucnCategories;
$iucn = new iucnCategories;
?>
<html>
	<head>
		<title>Categories Table</title>
	</head>
	<body class="iucn">
		<table class="table table-striped table-hover table-sm small">
			<thead>
				<tr>
					<th role="columnheader" scope="col">Acronym</th>
					<th role="columnheader" scope="col">Names</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($iucn->getCategories() as $key => $value): ?>
				<tr scope="row">
					<td><?= strtoupper($key); ?></td>
					<td><a href="https://www.iucnredlist.org/search?redListCategory=<?= $key; ?>" target="_blank"><?= $value->name; ?></a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>

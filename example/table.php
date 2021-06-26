<?php
require '../src/iucnCategories.php';
use OmniSpecies\iucnCategories\iucnCategories;
$status = new iucnCategories;
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
				<?php foreach ($status->getCategories() as $key => $value): ?>
				<tr scope="row">
					<td><?= strtoupper($key); ?></td>
					<td><?= $value->name; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>

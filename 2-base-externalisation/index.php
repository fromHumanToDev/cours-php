<?php
//fait l'equivalent du copie du contenu du fichier math.inc.php
require_once('math.inc.php');

$nombre = 15;
?>

<html>
	<head>
		<title>Externalisation et recursif</title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>FactorielleIterative</th>
					<th>FactorielleRecursive</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i=1;$i<$nombre;$i++){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo factorielleIterative($i); ?></td>
						<td><?php echo factorielleRecursive($i); ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
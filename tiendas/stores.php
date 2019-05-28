<?php 
include('common/utils.php');
//print_r($_SESSION['user']);

$stores = getStores($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tiendas</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>Tienda: <?php echo $_SESSION['user']['store']; ?></h2>
    <a href="home.php">Inicio</a>
	<table>
		<thead>
			<tr>
				<th>Tienda</th>
				<th>Propietario</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($stores as $s) { ?>
				<tr>
					<td><?php echo $s['store'] ?></td>
					<td><?php echo $s['username'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
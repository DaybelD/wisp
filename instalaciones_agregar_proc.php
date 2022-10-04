<?php
require_once 'requires.php';

$sql = 'INSERT INTO instalaciones (id, cliente_id, fecha, producto_id, router_id, personal_id) VALUES (?, ?, ?, ?, ?, ?)';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['id'], $_POST['cliente_id'], $_POST['fecha'], $_POST['producto_id'], $_POST['router_id'], $_POST['personal_id']],
	[
		'STR', 'STR', 'STR', 'STR', 'STR', 'STR',
	]
);
ir('instalaciones.php');
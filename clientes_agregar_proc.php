<?php
require_once 'requires.php';

$sql = 'INSERT INTO clientes (id, nombre, apellido, dni, email, id_ciudad, direccion, telef1, telef2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['email'], $_POST['id_ciudad'], $_POST['direccion'], $_POST['telef1'], $_POST['telef2']],
	[
		'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR',
	]
);
ir('clientes.php');

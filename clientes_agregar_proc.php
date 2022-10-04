<?php
require_once 'requires.php';

$sql = 'INSERT INTO clientes (id, nombre, apellido, email, id_ciudad, direccion, postal, telef1, telef2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['id_ciudad'], $_POST['direccion'], $_POST['postal'], $_POST['telef1'], $_POST['telef2']],
	[
		'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR',
	]
);
ir('clientes.php');

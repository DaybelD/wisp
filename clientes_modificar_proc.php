<?php
require_once 'requires.php';

$sql = 'UPDATE clientes SET nombre=?, apellido=?, email=?, direccion=?, ciudad_id=?, postal=?, telef1=?, telef2=? WHERE id=?';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['direccion'], $_POST['ciudad_id'], $_POST['postal'], $_POST['telef1'], $_POST['telef2'], $_POST['id']], 
	[
		'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR',
	]
);
ir('clientes.php');
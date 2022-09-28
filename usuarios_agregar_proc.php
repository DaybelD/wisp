<?php
require_once 'requires.php';

if ($_POST['clave'] != $_POST['confirmeclave']) {
	echo '
	<script>window.history.back();</script>
	';
}

$sql = 'INSERT INTO usuarios (id, clave, nombre, nivel, estatus) VALUES (?, ?, ?, ?, ?)';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['id'], password_hash($_POST['clave'], PASSWORD_DEFAULT), $_POST['nombre'], $_POST['nivel'], $_POST['estatus']],
	[
		'STR', 'STR', 'STR', 'STR', 'STR',
	]
);
ir('usuarios.php');

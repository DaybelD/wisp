<?php
require_once 'requires.php';

$sql = 'UPDATE usuarios SET nombre=?, nivel=?, estatus=? WHERE id=?';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['nombre'], $_POST['nivel'], $_POST['estatus'], $_POST['id']], 
	[
		'STR', 'STR', 'STR', 'STR',
	]
);
ir('usuarios.php');

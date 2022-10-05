<?php
require_once 'requires.php';
session_start();
vq($_SESSION);

$hash = $pdo->sql2value("SELECT clave FROM usuarios WHERE id LIKE ?", [$_POST['id']], ['STR']);

if (($_POST['clave'] != $_POST['confirmeclave']) || (!password_verify($_POST['claveactual'], $hash))) {
	echo '
	<script>window.history.back();</script>
	';
}

$sql = 'UPDATE usuarios SET clave=? WHERE id=?';

$pdo->exe($sql, myPDO_RET_RES, [
	password_hash($_POST['clave'], PASSWORD_DEFAULT), $_POST['id']],
	[
		'STR', 'STR',
	]
);
ir('usuarios.php');
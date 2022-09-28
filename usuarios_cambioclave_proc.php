<?php
require_once 'requires.php';

if ($_POST['clave'] != $_POST['confirmeclave']) {
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
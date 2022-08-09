<?php
require_once 'configs/bd.php';
require_once 'configs/funciones.php';

if (
	password_verify($_POST['clave'],
		sql2value($bd, "SELECT clave FROM usuarios WHERE id LIKE '{$_POST['login']}'"))
) {
	session_start();

	$_SESSION['usuario'] = sql2array($bd, "
		SELECT id, nombre, nivel
		FROM usuarios
		WHERE id LIKE '{$_POST['login']}' LIMIT 1; ");
	ir('principal.php');
}

ir('index.php?error=true');
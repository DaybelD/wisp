<?php
require_once 'requires.php';
require_once 'configs/funciones.php';

if (password_verify($_POST['clave'],
	$pdo->sql2value("SELECT clave FROM usuarios WHERE id LIKE ?", [$_POST['login']], ['STR']))
) {
	session_start();
	$_SESSION['usuario'] = $pdo->sql2array("
		SELECT id, nombre, nivel
		FROM usuarios
		WHERE id LIKE ? LIMIT 1;", [$_POST['login']], ['STR']);
	ir('principal.php');
}

ir('index.php?error=true');

<?php
require_once 'requires.php';
require_once 'configs/funciones.php';

if (password_verify($_POST['clave'],
	$pdo->sql2value("SELECT clave FROM usuarios WHERE id LIKE ?", [$_POST['login']], ['STR']))
) {
	session_start();

	$_SESSION['usuario'] = $pdo->sql2array("
		SELECT
			a.id,
			a.nombre nom_usu,
			b.nombre nom_rol,
			a.rol_id
		FROM
			usuarios a,
			roles b
		WHERE
			a.id LIKE ?
			AND
				a.rol_id = b.id
		LIMIT 1;", [$_POST['login']], ['STR'])[0];
	ir('principal.php');
}

ir('index.php?error=true');

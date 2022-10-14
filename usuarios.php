<?php
require_once 'requires.php';
$modulo = 'Ajustes_Usuarios';
session_start();

$u = $pdo->sql2array('SELECT id, clave, nombre, rol_id, estatus FROM usuarios');

$smarty->assign('cab',
	'<link rel="stylesheet" href="./vendor/datatables/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="./vendor/datatables/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="./css/estilo.css">');
$smarty->assign('js',
	'<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="./vendor/datatables/js/dataTables.bootstrap5.js"></script>'
	. smt_script('./scripts/usuarios.js')
);
$smarty->assign('u', $u);
$smarty->display('usuarios.tpl');

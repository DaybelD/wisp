<?php
require_once 'requires.php';
$modulo = 'Personal';
$e = $pdo->sql2array('SELECT id, clave, nombre, email, CONCAT(telef1,\' / \', telef2) AS telefono  FROM personal');
$smarty->assign('cab',
	'<link rel="stylesheet" href="./vendor/datatables/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="./vendor/datatables/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="./css/estilo.css">');
$smarty->assign('js',
	'<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="./vendor/datatables/js/dataTables.bootstrap5.js"></script>'
	. smt_script('./scripts/usuarios.js')
);

$smarty->assign('e', $e);
$smarty->display('personal.tpl');

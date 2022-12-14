<?php
require_once 'requires.php';
$modulo = 'Servicios_Instalaciones';
$i = $pdo->sql2array('SELECT cliente_id, fecha, personal_id FROM instalaciones');

$smarty->assign('cab',
	'<link rel="stylesheet" href="./vendor/datatables/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="./vendor/datatables/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="./css/estilo.css">');
$smarty->assign('js',
	'<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="./vendor/datatables/js/dataTables.bootstrap5.js"></script>'
	. smt_script('./scripts/usuarios.js')
);

$smarty->assign('i', $i);
$smarty->display('instalaciones.tpl');
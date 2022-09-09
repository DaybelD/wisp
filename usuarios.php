<?php
require_once 'requires.php';

$u = $pdo->sql2array('SELECT id, clave, nombre, nivel FROM usuarios LIMIT 25');

$smarty->assign('cab', '<link rel="stylesheet" href="vendor/datatables/dataTables.min.css">');
$smarty->assign('js',
	'<script src="vendor/datatables/datatables.min.js"></script>'
	. smt_script('./scripts/usuarios.js')
);
$smarty->assign('u', $u);
$smarty->display('usuarios.tpl');

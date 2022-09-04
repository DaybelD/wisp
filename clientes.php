<?php
require_once 'requires.php';

$d = $pdo->sql2array('SELECT id, nombre, apellido, dni, email, CONCAT(telef1,\' / \', telef2) AS telefono FROM clientes LIMIT 25');

$smarty->assign('d', $d);
$smarty->display('clientes.tpl');

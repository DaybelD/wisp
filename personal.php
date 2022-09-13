<?php
require_once 'requires.php';

$e = $pdo->sql2array('SELECT id, clave, nombre, email, CONCAT(telef1,\' / \', telef2) AS telefono  FROM personal');

$smarty->assign('e', $e);
$smarty->display('personal.tpl');

<?php
require_once 'requires.php';

$u = $pdo->sql2array('SELECT id, clave, nombre, nivel FROM usuarios LIMIT 25');

$smarty->assign('u', $u);
$smarty->display('usuarios.tpl');
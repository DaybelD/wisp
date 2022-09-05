<?php
require_once 'requires.php';

$t = $pdo->sql2array('SELECT id, clave, nombre, nivel FROM usuarios LIMIT 25');

$smarty->assign('t', $t);
$smarty->display('usuarios.tpl');
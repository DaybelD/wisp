<?php
require_once 'requires.php';

$e = $pdo->sql2array('SELECT id, cliente_id, plan_id, fecha, zona_id FROM contratos');

$smarty->assign('e', $e);
$smarty->display('contratos.tpl');

<?php
require_once 'requires.php';
require_once 'forms/gastos_modificar.php';

$smarty->assign('modgasto', $modgasto);
$smarty->display('gastos_modificar.tpl');
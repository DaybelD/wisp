<?php
require_once 'requires.php';
require_once 'forms/compras_modificar.php';

$smarty->assign('modcompra', $modcompra);
$smarty->display('compras_modificar.tpl');
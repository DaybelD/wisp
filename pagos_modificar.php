<?php
require_once 'requires.php';
require_once 'forms/pagos_modificar.php';

$smarty->assign('modpago', $modpago);
$smarty->display('pagos_modificar.tpl');
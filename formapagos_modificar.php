<?php
require_once 'requires.php';
require_once 'forms/formapagos_modificar.php';

$smarty->assign('modfrmpago', $modfrmpago);
$smarty->display('formapagos_modificar.tpl');
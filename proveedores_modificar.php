<?php
require_once 'requires.php';
require_once 'forms/proveedores_modificar.php';

$smarty->assign('modprov', $modprov);
$smarty->display('proveedores_modificar.tpl');
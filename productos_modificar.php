<?php
require_once 'requires.php';
require_once 'forms/productos_modificar.php';

$smarty->assign('modproduc', $modproduc);
$smarty->display('productos_modificar.tpl');
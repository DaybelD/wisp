<?php
require_once 'requires.php';
require_once 'forms/productos_agregar.php';

$smarty->assign('agregarproduc', $agregarproduc);
$smarty->display('productos_agregar.tpl');
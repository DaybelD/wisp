<?php
require_once 'requires.php';
require_once 'forms/proveedores_agregar.php';

$smarty->assign('agregarprov', $agregarprov);
$smarty->display('proveedores_agregar.tpl');
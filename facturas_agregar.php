<?php
require_once 'requires.php';
require_once 'forms/facturas_agregar.php';

$smarty->assign('agregarfac', $agregarfac);
$smarty->display('facturas_agregar.tpl');
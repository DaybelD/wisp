<?php
require_once 'requires.php';
require_once 'forms/agregarfac.php';

$smarty->assign('agregarfac', $agregarfac);
$smarty->display('agregarfactura.tpl');
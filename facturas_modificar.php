<?php
require_once 'requires.php';
require_once 'forms/facturas_modificar.php';

$smarty->assign('modfac', $modfac);
$smarty->display('facturas_modificar.tpl');
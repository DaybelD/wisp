<?php
require_once 'requires.php';
require_once 'forms/pagos_agregar.php';

$smarty->assign('agregarpag', $agregarpag);
$smarty->display('pagos_agregar.tpl');
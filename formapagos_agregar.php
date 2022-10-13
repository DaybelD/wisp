<?php
require_once 'requires.php';
require_once 'forms/formapagos_agregar.php';

$smarty->assign('agregarfrpago', $agregarfrpago);
$smarty->display('formapagos_agregar.tpl');